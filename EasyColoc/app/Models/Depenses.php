<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depenses extends Model
{
    protected $fillable = ['title','amount'];
    public function leadership(){
        return $this->belongsTo(user::class);
    }
    public function colocation(){
        return $this->belongsTo(colocation::class);
    }
    public function doits(){
        return $this->hasMany(doit::class);
    }
}
