<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class UserLevel extends Model
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
        'name',
        'description',
        'value',
        'is_enabled',
    ];

    /**
     * Get the user details for the level.
     */
    public function user_details(): HasMany
    {
        return $this->hasMany(UserDetail::class, 'user_level_id', 'id');
    }
}
