<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $catalogs = Catalog::all();
        // $categorys = Category::all();
        // $data = $catalogs->concat($categorys);
        return view('admin.index', compact('catalogs'));
        // return view('admin.index', compact('categorys'));
        // return view('admin.index', compact(['catalogs', 'categorys']));
        // return view('admin.index')->with('catalogs',$catalogs)->with('categorys',$categorys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        return view('admin.create', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_item'     => 'required|min:3',
            'price'         => 'required|min:3',
            'category'      => 'required|min:1',
            'pcs_item'      => 'required|min:1',
        ]);

        Catalog::create([
            'name_item'     => $request->name_item,
            'price'         => $request->price,
            'category'      => $request->category,
            'pcs_item'      => $request->pcs_item,
        ]);

         return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
