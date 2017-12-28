<?php

namespace App\Http\Controllers;

use App\Competitor;
use Illuminate\Http\Request;

class CompetitorController extends Controller
{

    public function index()
    {
        $competitors = Competitor::all();
        return view('competitors.index', compact('competitors'));
    }

    public function create()
    {
        return view('competitors.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required',
        ]);
        Competitor::create([
            'name' => request('name'),
            'age' => request('age'),
        ]);

        return redirect('/competidores');
    }

    public function destroy(Competitor $competitor)
    {
        $competitor->delete();
        return redirect('/competidores');
    }
}
