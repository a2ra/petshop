<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use Illuminate\Http\Request;
use DB;


class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $breeds=DB::table('breeds')
       ->orderBy('country')
       ->get();
       return view('breeds.index',['breeds'=>$breeds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $categories = DB::table('categories')
     ->get();
     return view('breeds.add',['categories'=>$categories]);
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
        'name'=>'required|string|max:255',
      ]);
      DB::table('breeds')->insert([
        'name'=>$request->name,
        'country'=>$request->country,
        'category'=>$request->category,
      ]);
      return redirect()->route('breeds');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function show(Breed $breed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      $id=$request->id;
      $breeds=DB::table('breeds')
      ->where('id',$id)
      ->get();
      $categories=DB::table('categories')
      ->get();
      return view('breeds.edit',['breeds'=>$breeds,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $id = $request->id;
      $request->validate([
        'name'=>'required|string|max:255',
        'country'=>'required|string|max:255',
        'category'=>'required|integer',
    ]);


    $update_query=DB::table('breeds')
    ->where('id',$id)
    ->update([
    'name'=>$request->name,
    'country'=>$request->country,
    'category'=>$request->category,
    ]);
    return redirect()->route('breeds');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breed  $breed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breed $breed)
    {
        //
    }

    public function delete(Request $request){
      $id=$request->id;
      Breed::destroy($id);
      return redirect()->route('breeds');
  }

}
