<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function company(){
        return $this->hasOne('Company');
    }
    public function invoices(){
        return $this->hasMany('Invoice');
    }
    public function contacts(){
        return $this->hasMany('Contact');
    }
}
