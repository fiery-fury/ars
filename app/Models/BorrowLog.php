<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BorrowLog extends Model
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
        'requested_by',
        'assets',
        'approval_level',
        'is_enabled',
    ];

    /**
     * Get the requestor of the log.
     */
    public function requestor(): BelongsTo
    {
        return $this->belongsTo(UserDetail::class, 'requested_by', 'id');
    }

    /**
     * Get the asset list of the log.
     */
    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class, 'id', 'assets');
    }
}
