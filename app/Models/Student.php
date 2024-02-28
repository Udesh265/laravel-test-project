<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    // Fillable fields
    protected $fillable = [
        'name',
        'email',
        'address',
        'mobile',
        'user_id'
    ];

    /**
     * Implement BelongsTo Relationship with User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
