<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    protected $fillable = ['role','user_id','colocation_id','joined_at'];
    public function Colocation(){
        return $this->belongsTo(Colocation::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
