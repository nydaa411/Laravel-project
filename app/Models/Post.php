<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Foundation\Auth\User as BaseUser;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Builder;

class User extends BaseUser
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Attributes that can be mass assigned.
     */
    protected array $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Attributes hidden during serialization.
     */
    protected array $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Attribute type casting.
     */
    protected array $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Set the user's password securely.
     */
    public function setPasswordAttribute(string $password): void
    {
        if (!empty($password) && (!isset($this->attributes['password']) || !password_verify($password, $this->attributes['password']))) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    /**
     * Scope a query to search users by email.
     */
    public function scopeByEmail(Builder $query, string $email): Builder
    {
        return $query->where('email', $email);
    }

    /**
     * Send a custom notification.
     */
    public function sendCustomNotification(string $message): void
    {
        $this->notify(new CustomNotification($message));
    }
}

