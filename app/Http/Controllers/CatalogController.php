<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Task;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = auth()->user()->catalogs;
        return view('catalog.index', compact('catalogs'));
    }

    public function create()
    {
        return view('catalog.create');
    }

    public function store(Request $request)
    {
        $catalog = new Catalog;
        $catalog->name = $request->name;
        $catalog->user_id = $request->user()->id;
        $catalog->save();
        return redirect()->route('catalogs.index');
    }

    public function show($id)
    {
        $catalog = Catalog::findOrFail($id);
        $tasks = $catalog->tasks;
        return view('catalog.show', compact('catalog', 'tasks'));
    }

    public function edit($id)
    {
        $catalog = Catalog::find($id);
        return view('catalog.edit', compact('catalog'));
    }

    public function update(Request $request, $id)
    {
        $catalog = Catalog::find($id);
        $catalog->name = $request->get('name');
        $catalog->user_id = $request->user()->id;
        $catalog->save();
        return redirect()->route('catalogs.index');
    }

    public function destroy($id)
    {
        $catalog = Catalog::find($id);
        $catalog->delete();
        return redirect()->route('catalogs.index');
    }
}
