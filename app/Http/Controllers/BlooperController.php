<?php

namespace App\Http\Controllers;

use App\Blooper;
use App\Competitor;
use Illuminate\Http\Request;

class BlooperController extends Controller
{
    public function index()
    {
        $bloopers = Blooper::all();
        return view('bloopers.index', compact('bloopers'));
    }

    public function create()
    {
        return view('bloopers.create');
    }

    public function intro()
    {
        $competitors = Competitor::all();
        return view('bloopers.intro', compact('competitors'));
    }

    public function show(Competitor $competitor)
    {
        $blooper = Blooper::where(['age' => $competitor->age, 'done' => false])->firstOrFail();
        return view('bloopers.show', compact('blooper', 'competitor'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'age' => 'required',
        ]);
        Blooper::create([
            'title' => request('title'),
            'description' => request('description'),
            'age' => request('age'),
        ]);

        return redirect('/micos');
    }

    public function update(Competitor $competitor)
    {
        $blooper = Blooper::where(['age' => $competitor->age, 'done' => false])->firstOrFail();
        $blooper->done = true;
        $blooper->save();
        return redirect('/topicos');
    }

    public function destroy(Blooper $blooper)
    {
        $blooper->delete();
        return redirect('/micos/todos');
    }
}
