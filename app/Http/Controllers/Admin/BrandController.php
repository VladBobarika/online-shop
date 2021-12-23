<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
/**
* Display a listing of the resource.
*
*/
    public function index()
    {
        $brands = Brand::paginate();

        return view('admin.brand.index', [
            'brands' => $brands
        ]);
    }

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
    public function create()
    {
        return view('admin.brand.create');
    }

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
        $data = $request->all();
        $brand = Brand::create($data);
        dd($brand);

        //$brand = Brand::create($request->all());

        //return  redirect(route('admin.brand.index'));
    }

/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
    public function show(Brand $brand)
    {
        dd($brand);
    }

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', compact('brand'));
    }

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
    public function update(Request $request, Brand $brand)
    {
        $brand->fill($request->all());
        $brand->save();
        return redirect(route('admin.brand.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect(route('admin.brand.index'));
    }
}
