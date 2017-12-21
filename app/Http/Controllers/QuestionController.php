<?php

namespace App\Http\Controllers;

use App\Question;
use App\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function show(Topic $topic)
    {
        $question = Question::where(['topic_id' => $topic->id, 'done' => false])->firstOrFail();
        return view('questions.question', compact('question'));
    }

    public function update(Topic $topic)
    {
        $question = Question::where(['topic_id' => $topic->id, 'done' => false])->firstOrFail();
        //dd($question);
        $question->done = true;
        $question->save();
        return redirect('/topicos');
    }
}
