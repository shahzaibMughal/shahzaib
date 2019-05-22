<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Techname extends Model
{
    protected $fillable = ['techName'];

    public function projects(){
       return $this->belongsToMany(Project::class);
    }
}
