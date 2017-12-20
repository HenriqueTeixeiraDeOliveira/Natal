<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }

    public function show()
    {
        $topics = Topic::all();
        return view('questions.topics', compact('topics'));
    }
}
