<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Student;

class University extends Model
{
    protected $table = 'university';

    public function departments(){
        return $this->hasMany(Department::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }



}
