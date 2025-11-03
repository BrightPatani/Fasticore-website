<?php
namespace App\Http\Controllers;

use App\Models\InternshipRegistration;
use App\Http\Requests\StoreInternshipRegistrationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Exception;

class InternshipRegistrationController extends Controller
{
    public function store(StoreInternshipRegistrationRequest $request): JsonResponse
    {
        try {
            // Create the registration
            $registration = InternshipRegistration::create($request->validated());

            // Log successful registration
            Log::info('Internship registration created', [
                'id' => $registration->id,
                'email' => $registration->email,
                'track' => $registration->track,
            ]);

            // Optional: Send confirmation email
            // Mail::to($registration->email)->send(new InternshipRegistrationConfirmation($registration));

            return response()->json([
                'success' => true,
                'message' => 'Registration successful! We will contact you soon.',
                'data' => [
                    'id' => $registration->id,
                    'full_name' => $registration->full_name,
                    'email' => $registration->email,
                ]
            ], 201);

        } catch (Exception $e) {
            // Log the error
            Log::error('Internship registration failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Registration failed. Please try again later.',
            ], 500);
        }
    }

    public function index()
    {
        // 
    }
}
