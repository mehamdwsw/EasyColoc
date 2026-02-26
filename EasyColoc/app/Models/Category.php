<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public function colocations(){
        return $this->hasMany(Colocation::class);
    }
}
