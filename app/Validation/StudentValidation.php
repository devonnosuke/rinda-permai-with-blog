<?php

namespace App\Validation;

class StudentValidation
{
    public $rules = [
        'student_name' => 'required|min_length[4]',
        'student_gender' => 'required',
        'student_address' => 'required|min_length[4]',
        'student_class'    => 'required',
        'student_pic'    => 'uploaded[student_pic]',
    ];
}
