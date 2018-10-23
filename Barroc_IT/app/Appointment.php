<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function company(){
        return $this->hasOne('Company');
    }

    // An appoinment belongs to 1 company
}
