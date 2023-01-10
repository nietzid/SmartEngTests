<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    public $timestamps = false;
    protected $table = 'question_banks';
    protected $primaryKey = 'id';
    protected $fillable = ['question', 'answer', 'passage_id', 'option1', 'option2', 'option3', 'option4', 'category'];
    use HasFactory;

    public function getQuestions()
    {
        $questions = QuestionBank::all();
        return $questions;
    }
}
