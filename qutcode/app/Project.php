<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function demoProject(){
        return $this->belongsTo('App\DemoProject');
    }
}
