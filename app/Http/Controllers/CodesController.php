<?php

namespace App\Http\Controllers;


use App\Models\Code;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllCodes()
    {
        return Code::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'value' => 'required|integer',
        ]);

        

        $todo = Todo::create($data);

        return response($todo, 201);
    }
}
