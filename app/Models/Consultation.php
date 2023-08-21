<?php

namespace App\Models;

use App\Traits\BelongsToPatient;
use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory, BelongsToUser, BelongsToPatient;
    protected $guarded = [];

    // inventories relationship
    function inventories()
    {
        return $this->belongsToMany(Inventory::class)->withPivot('quantity');
    }

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'visited_at' => 'datetime',
        'checkout_at' => 'datetime',
    ];
}