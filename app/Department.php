<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public function student(){
        return $this->hasMany(Student::class);
    }
      //
      public function teacher(){
        return $this->hasMany(Department::class);
    }
}
