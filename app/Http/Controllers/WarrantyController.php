<?php

namespace App\Http\Controllers;

use App\Models\Warranty;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function index()
    {
        $warranties = Warranty::latest()->paginate(10);
        return view('warranties.index', compact('warranties'));
    }

    public function create()
    {
        return view('warranties.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'duration_months' => 'required|integer|min:1',
            'product_description' => 'required|string',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
        ]);

        Warranty::create($request->all());

        return redirect()->route('warranties.index')
            ->with('success', 'Garantía registrada con éxito.');
    }

    public function show(Warranty $warranty)
    {
        return view('warranties.show', compact('warranty'));
    }

    public function edit(Warranty $warranty)
    {
        return view('warranties.edit', compact('warranty'));
    }

    public function update(Request $request, Warranty $warranty)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'duration_months' => 'required|integer|min:1',
            'product_description' => 'required|string',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
        ]);

        $warranty->update($request->all());

        return redirect()->route('warranties.index')
            ->with('success', 'Garantía actualizada con éxito.');
    }

    public function destroy(Warranty $warranty)
    {
        $warranty->delete();

        return redirect()->route('warranties.index')
            ->with('success', 'Garantía eliminada con éxito.');
    }
}