<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\User as UserEloquent;
use app\Score as ScoreEloquent;

class Student extends Model
{
    protected $table = 'scores';

    public function user(){
        return $this->belongsTo(UserEloquent::class);
    }

    public function score(){
        return $this->hasOne(ScoreEloquent::class);
    }
}
