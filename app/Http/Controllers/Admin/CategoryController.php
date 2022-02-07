<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Result;
use phpDocumentor\Reflection\PseudoTypes\False_;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return response()->json(['categories' => $categories], 200) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'status' => 'required',
        ]);

        Category::create([
            'name'   => $request->name,
            'slug'   => strtolower(str_replace(' ','-', $request->name)) ,
            'status'   => $request->status,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();

        return response()->json(['category' => $category], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'status' => 'required',
        ]);

        $category = Category::find($request->id);

        $category->name    = $request->name;
        $category->slug    = strtolower(str_replace(' ','-', $request->name)) ;
        $category->status  = $request->status;
        // $category->save();

        if($category->save()){
            $success = true;
        }else{
            $success = false;
        }
        return response()->json(['success' => $success],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category_id = Category::where('slug', $slug)->first();

       if( $category_id->delete()){
            $success = true;
        }else{
            $success = false;
       }
       return response()->json(['success' => $success], 200);
    }
}
