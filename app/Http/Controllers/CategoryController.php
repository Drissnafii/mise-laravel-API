<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catego = category::all();
        return response()->json([
            'status' => 'success',
            'message' => 'category created successfully',
            'data' => $catego
        ], 201);    }

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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $catego = Category::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'category created successfully',
            'data' => $catego
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $catego = Category::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $catego->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'category updated successfully',
            'data' => $catego
        ], 200); //ddskdjskjd

        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $catego = Category::find($id);
        $catego->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'category deleted successfully',
            'data' => $catego
        ], 200); // the code of delede should be added IDK it :/

        }

}
