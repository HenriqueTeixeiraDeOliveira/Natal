<?php

namespace App\Http\Controllers;

use App\Question;
use App\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    public function show(Topic $topic)
    {
        $question = Question::where(['topic_id' => $topic->id, 'done' => false])->firstOrFail();
        return view('questions.show', compact('question'));
    }

    public function create()
    {
        $topics = Topic::all();
        return view('questions.create', compact('topics'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'topic_id' => 'required',
            'question' => 'required',
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'fourth' => 'required',
            'fifth' => 'required',
            'answer' => 'required',
        ]);
        Question::create([
            'topic_id' => request('topic_id'),
            'question' => request('question'),
            'first' => request('first'),
            'second' => request('second'),
            'third' => request('third'),
            'fourth' => request('fourth'),
            'fifth' => request('fifth'),
            'answer' => request('answer'),
            'link' => request('link')
        ]);

        return redirect('/perguntas');
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
