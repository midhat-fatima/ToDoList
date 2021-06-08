<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Carbon\Carbon;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $list = Todolist::all();
      return view('todolist', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_todolist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Todolist::create([
            'task' => $request->task,
        ]);

        return redirect(route('todolist.index'))->with(['success' => 'ToDoList is added!!!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todolist = Todolist::where('id', $id)->first();
        return view('edit_todolist', ['todolist' => $todolist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Todolist::where('id', $id)->update([
            'task' => $request->task,
        ]);

        return redirect(route('todolist.index'))->with(['success' => 'ToDoList is updated!!!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todolist::where('id', $id)->delete();
        return redirect(route('todolist.index'))->with(['success' => 'ToDoList is Deleted!!!!']);
    }

    public function completed($id)
    {
        Todolist::where('id', $id)->Carbon::now();
        return redirect(route('todolist.index'))->with(['success' => 'ToDoList is Completed!!!']);
    }
}
