<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController
{
    public function index()
    {
        $items = Todo::all();
        return response()->json($items);
    }

    public function show($id)
    {
        $item = Todo::find($id);
        return response()->json($item);
    }


    // понятно что в проде фильтры не делаются так
    // это всего лишь демка для соответствия ТЗ
    public function byStatus($status)
    {
        $item = Todo::all()->where('status', $status);
        return response()->json($item);
    }


    public function store(Request $request)
    {
        $item = Todo::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $item = Todo::find($id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function destroy($id)
    {
        Todo::destroy($id);
        return response()->json(null, 204);
    }
}
