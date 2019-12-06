<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable = ['first_name', 'last_name', 'roll_no', 'degree_title', 'course_id'];

    public function courses() {

    	return $this->hasMany(Course::class);

    }
}
