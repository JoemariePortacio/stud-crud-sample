<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherInformation extends Model
{
    use HasFactory;

    protected $fillable=['name',
    'email','address','contact',
    'status','position'];
}
