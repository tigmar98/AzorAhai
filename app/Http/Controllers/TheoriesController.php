<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theory;
use Auth;
use Validator;

class TheoriesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('theories');
    }

    public function create()
    {
        return view('newTheory');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'title' => 'required|max:255',
                'theory'  => 'required|max:255',
            ]);
        if ($validator->fails()){
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }
        Theory::insert(['title' => $request->title, 'theory' => $request->theory, 'user_id' => Auth::user()['id']]);
        return redirect('/theories');
    }

    public function showAllTheories()
    {
        $allTheories = Theory::where('user_id', Auth::user()['id'])->get()->toArray();
        return view('allTheories', ['theories' => $allTheories]);
    }
}
