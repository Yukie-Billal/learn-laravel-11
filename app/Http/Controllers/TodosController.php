<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use App\Http\Requests\StoreTodosRequest;
use App\Http\Requests\UpdateTodosRequest;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('todos.todo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Todos $todos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todos $todos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodosRequest $request, Todos $todos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todos $todos)
    {
        //
    }
}
