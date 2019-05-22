<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Techname extends Model
{
    protected $fillable = ['techName'];
    protected $hidden = ['id','created_at','updated_at','pivot'];
    public function projects(){
       return $this->belongsToMany(Project::class);
    }
}
