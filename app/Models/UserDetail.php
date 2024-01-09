<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'created_by',
        'updated_by',
        'user_level_id',
        'first_name',
        'middle_name',
        'last_name',
        'is_enabled',
    ];

    /**
     * Get the user level.
     */
    public function user_level(): BelongsTo
    {
        return $this->belongsTo(UserLevel::class, 'user_level_id', 'id');
    }

    /**
     * Get the user account.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'user_detail_id', 'id');
    }

    /**
     * Get the user borrowed assets.
     */
    public function borrowed_assets(): HasMany
    {
        return $this->hasMany(BorrowLog::class, 'requested_by', 'id');
    }
}
