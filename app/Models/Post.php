<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function likes(){
        return $this -> hasMany(Like::class);
    }

}
