<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function civilStatus(){
        return $this->belongsTo(CivilStatus::class);
    }
}
