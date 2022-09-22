<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model{
    protected $fillable = ['question_id','test_id'];
    public $timestamps = false;
    use HasFactory;
}