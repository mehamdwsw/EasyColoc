<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doit extends Model
{
    protected $fillable = ['status','left'];
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function Depenses(){
        return $this->belongsTo(Depenses::class);
    }
}
