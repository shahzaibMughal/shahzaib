<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title','description','liveLink', 'githubLink', 'imageName'];
    protected $hidden = ['id','created_at','updated_at'];

    public function technames(){
        return $this->belongsToMany(Techname::class);
    }
}
