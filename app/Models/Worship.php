<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worship extends Model
{
    protected $fillable = ['nombre','day_id','start_time','end_time'];
    public function day(){
        return $this->belongsTo(Day::class);
    }
}
