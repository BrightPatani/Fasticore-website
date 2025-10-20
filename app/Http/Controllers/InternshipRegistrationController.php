<?php

namespace App\Http\Controllers;

use App\Models\InternshipRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\InternshipRegistrationConfirmation;

class InternshipRegistrationController extends Controller
{
    /**
     * Display registration form
     */
    public function showForm()
    {
        return view('internship.register');
    }

    /**
     * Handle registration submission
     */
    public function register(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:internship_registrations,email',
            'track' => 'required|in:frontend,backend,fullstack,uiux,data-science,mobile,devops',
            'background' => 'nullable|string|max:1000',
        ], [
            'email.unique' => 'This email has already been registered.',
            'track.in' => 'Please select a valid track.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Create registration
            $registration = InternshipRegistration::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'track' => $request->track,
                'background' => $request->background,
                'status' => InternshipRegistration::STATUS_PENDING,
            ]);

            // Send confirmation email (optional)
            try {
                Mail::to($registration->email)->send(
                    new InternshipRegistrationConfirmation($registration)
                );
            } catch (\Exception $e) {
                // Log email error but don't fail the registration
                \Log::error('Failed to send confirmation email: ' . $e->getMessage());
            }

            // Send notification to admin (optional)
            // Notification::route('mail', config('mail.admin_email'))
            //     ->notify(new NewInternshipRegistration($registration));

            return response()->json([
                'success' => true,
                'message' => 'Registration successful! We will contact you soon.',
                'data' => [
                    'id' => $registration->id,
                    'name' => $registration->full_name,
                ]
            ], 201);

        } catch (\Exception $e) {
            \Log::error('Internship registration error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your registration. Please try again.',
            ], 500);
        }
    }

    /**
     * Admin: View all registrations
     */
    public function index(Request $request)
    {
        $query = InternshipRegistration::query();

        // Filter by status
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }

        // Filter by track
        if ($request->has('track')) {
            $query->where('track', $request->track);
        }

        // Search by name or email
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $registrations = $query->latest()->paginate(20);

        return view('admin.internship.index', compact('registrations'));
    }

    /**
     * Admin: Update registration status
     */
    public function updateStatus(Request $request, InternshipRegistration $registration)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $registration->update([
            'status' => $request->status,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.',
        ]);
    }

    /**
     * Admin: Export registrations to CSV
     */
    public function export()
    {
        $registrations = InternshipRegistration::all();
        
        $filename = 'internship_registrations_' . date('Y-m-d') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($registrations) {
            $file = fopen('php://output', 'w');
            
            // Header row
            fputcsv($file, ['ID', 'Full Name', 'Email', 'Track', 'Background', 'Status', 'Registered At']);
            
            // Data rows
            foreach ($registrations as $reg) {
                fputcsv($file, [
                    $reg->id,
                    $reg->full_name,
                    $reg->email,
                    $reg->track_name,
                    $reg->background,
                    $reg->status,
                    $reg->created_at->format('Y-m-d H:i:s'),
                ]);
            }
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}