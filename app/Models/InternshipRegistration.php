<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class InternshipRegistration extends Model
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     */
    protected $table = 'internship_registrations';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'full_name',
        'email',
        'track',
        'background',
        'status',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Available tracks for validation
     */
    const TRACKS = [
        'frontend' => 'Frontend Development',
        'backend' => 'Backend Development',
        'fullstack' => 'Full-Stack Development',
        'uiux' => 'UI/UX Design',
        'data-science' => 'Data Science & Analytics',
        'mobile' => 'Mobile Development',
        'devops' => 'DevOps & Cloud',
    ];

    /**
     * Available statuses
     */
    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';

    /**
     * Get track display name
     */
    public function getTrackNameAttribute(): string
    {
        return self::TRACKS[$this->track] ?? $this->track;
    }

    /**
     * Scope for pending registrations
     */
    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    /**
     * Scope for approved registrations
     */
    public function scopeApproved($query)
    {
        return $query->where('status', self::STATUS_APPROVED);
    }
}