<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colocation extends Model
{
    protected $fillable = ['name','Description','status'];
    public function leadership()
    {
        return $this->hasMany(Leadership::class);
    }
    public function Depenses()
    {
        return $this->hasMany(Depenses::class);
    }
    public function Category()
    {
        return $this->hasMany(Category::class);
    }
}
