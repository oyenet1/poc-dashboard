<?php

namespace App\Traits;

use App\Models\Patient;

trait BelongsToPatient
{
  function patient()
  {
    return $this->belongsTo(Patient::class);
  }
  function patients()
  {
    return $this->hasMany(Patient::class);
  }
}