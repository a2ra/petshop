<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Models\Pet;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $najcescekupovano = DB::table('pets')
        ->select('pets.*', DB::raw('count(*) as brojac'))
        ->groupBy('pets.id')
        ->join('shops','pets.id','=','shops.pets')
        ->orderByRaw('COUNT(*) DESC')
        ->get();
        $most_buy_customer=DB::table('customers')
        ->select('customers.*', DB::raw('count(*) as brojac'))
        ->groupBy('customers.id')
        ->join('shops','customers.id','=','shops.customer')
        ->orderByRaw('COUNT(*) DESC')
        ->get();
        $najcesci_breeds= DB::table('breeds')
        ->select('breeds.*', DB::raw('count(*) as brojac'))
        ->groupBy('breeds.id')
        ->join('pets','breeds.id','=', 'pets.breed')
        ->orderByRaw('COUNT(*) DESC')
        ->get();
        $ispisHusky=DB::table('pets')
        ->select('pets.*', DB::raw('count(*) as brojac'))
        ->groupBy('pets.id')
        ->join('breeds','breeds.id','=','pets.breed')
        ->where('breeds.name','Husky')
        ->whereBetween('pets.year',['2020-01-01','2020-12-31'])

        ->get();
        $cheap_pets=DB::table('pets')
        ->select('pets.*', DB::raw('count(*) as brojac'))
        ->groupBy('pets.id')
        ->whereBetween('pets.price',['200','600'])
        ->orderByRaw('COUNT(*) DESC')
        ->get();
        $pets_do_10g=DB::table('pets')
        ->select('pets.*', DB::raw('count(*) as brojac'))
        ->groupBy('pets.id')
        ->join('shops','pets.id','=','shops.pets')
        ->whereBetween('pets.year',['2012-01-01','2022-01-01'])
        ->get();
        $ispisCorellaPrice=DB::table('pets')
        ->select('pets.*', DB::raw('count(*) as brojac'))
        ->groupBy('pets.id')
        ->join('breeds','breeds.id','=','pets.breed')
        ->where('breeds.name','Pudla')
        ->whereBetween('pets.price',['200','1600'])

        ->get();
        $costumer2022=DB::table('customers')
    ->select('customers.*', DB::raw('count(*) as brojac'))
    ->groupBy('customers.id')
    ->join('shops','customers.id','=','shops.customer')
    ->join('pets','pets.id','=','shops.pets')
    ->join('breeds','breeds.id','=','pets.breed')

    ->where('breeds.name','Corella')
    ->whereBetween('pets.year',['2018-01-01','2023-01-01'])
    ->get();
    $BiH_Pets=DB::table('pets')
    ->select('pets.*', DB::raw('count(*) as brojac'))
    ->groupBy('pets.id')
    ->join('shops','pets.id','=','shops.pets')
    ->join('breeds','breeds.id','=','pets.breed')
    ->where('breeds.country','BIH')
    ->get();
    $PetsPLUS=DB::table('pets')
    ->select('pets.*', DB::raw('count(*) as brojac'))
    ->groupBy('pets.id')
    ->whereBetween('pets.year',['2021-01-01','2022-01-01'])
    ->get();


        return view('shops.index',[
        'najcescekupovano'=>$najcescekupovano,
        'most_buy_customer'=>$most_buy_customer,
        'najcesci_breeds'=>$najcesci_breeds,
        'pets_do_10g'=>$pets_do_10g,
        'cheap_pets'=>$cheap_pets,
        'ispisHusky'=>$ispisHusky,
        'costumer2022'=>$costumer2022,
        'ispisCorellaPrice'=>$ispisCorellaPrice,
        'BiH_Pets'=>$BiH_Pets,
        'PetsPLUS'=>$PetsPLUS ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}