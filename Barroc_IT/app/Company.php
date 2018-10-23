<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function appointments(){
        return $this->hasMany('Appointment');
    }
    public function projects(){
        return $this->hasMany('Project');
    }
}

