<?php

namespace App\Models;

use App\Traits\HasManyConsultation;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, HasManyConsultation;
    protected $guarded = [];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();

        // creation of automatic patient id
        self::creating(function ($model) {
            $model->patient_id = IdGenerator::generate(['table' => 'patients', 'field' => 'patient_id', 'length' => 14, 'prefix' => 'SHBS-PT/']);
        });
    }
}