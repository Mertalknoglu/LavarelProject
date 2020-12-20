<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KitapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      /* $kitapbilgis=DB::select('select * from kitapbilgis');
       return view('index',['kitapbilgis'=>$kitapbilgis]);
       */
      $search= $request ->get('search');
      
       $kitapbilgis=DB::table('kitapbilgis')
       ->select('kitapbilgis.kitapadi','kitapbilgis.isbnno','yazars.adi','yazars.soyadi','kategoris.kategoriadi','yayinevis.yayineviadi','kitapbilgis.dil','kitapbilgis.sayfasayisi')
       ->join('yazars','kitapbilgis.yazarid','=','yazars.id')
       ->join('kategoris','kitapbilgis.kategoriid','=','kategoris.id')
       ->join('yayinevis','kitapbilgis.yayineviid','=','yayinevis.id')
       ->where('kitapadi','like','%'.$search.'%')
       ->orwhere('isbnno','like','%'.$search.'%')
       ->paginate(5);
      // $kitapbilgis=DB::table('kitapbilgis')->where('kitapadi','like','%'.$search.'%')->paginate(5);
        return view('index',['kitapbilgis' => $kitapbilgis]);
         
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
    public function search()
    {
      
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
