<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use DB;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets=DB::table('pets')
            ->get();

       return view('pets.index',['pets'=>$pets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breeds=DB::table('breeds')
        ->get();
        return view('pets.add',['breeds'=>$breeds]);
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
        DB::table('pets')->insert([
            'name'=>$request->name,
            'year'=>$request->year,
            'breed'=>$request->breed,
            'price'=>$request->price,

        ]);
        return redirect()->route('pets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
        $pets=DB::table('pets')
        ->where('id',$id)
        ->get();
        $breeds=DB::table('breeds')
        ->get();
        return view('pets.edit',['pets'=>$pets,'breeds'=>$breeds]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;

        //dd($request);

        $request->validate([
            'name'=>'required|string|max:255',
            'year'=>'required|date',
            'breed'=>'required|integer',
        ]);


        $update_query=DB::table('pets')
        ->where('id',$id)
        ->update([
        'name'=>$request->name,
        'year'=>$request->year,
        'breed'=>$request->breed,
        'price'=>$request->price,
        ]);
        return redirect()->route('pets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;
        Pet::destroy($id);
        return redirect()->route('pets');
    }
}