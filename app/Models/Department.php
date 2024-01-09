<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
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
        'code',
        'name',
        'description',
        'is_enabled',
    ];

    /**
     * Get the assets for the department.
     */
    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class, 'department_id', 'id');
    }
}
