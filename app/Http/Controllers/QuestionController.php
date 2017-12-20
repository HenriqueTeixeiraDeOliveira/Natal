<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function show()
    {
        $question = Question::where('done', false)->firstOrFail();
        return view('questions.question', compact('question'));
    }

}
