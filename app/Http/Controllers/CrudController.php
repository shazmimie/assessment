<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\Todo;

class CrudController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $todo = Todo::all();
        return view('home')->with(compact('todo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:50',
            'dob' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'state_id' => 'required'
        ]);

        $todo = Todo::create($data);

        return Response::json($todo);

         

    }

    //$paste  = Paste::where('id',$id)->first();
        //return response()->json($paste);

}