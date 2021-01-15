<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorshipAvailable extends Model
{
    public function worship(){
        return $this->belongsTo(Worship::class);
    }

    public function form(){
        return $this->belongsTo(Form::class);
    }
}
