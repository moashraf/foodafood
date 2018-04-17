<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Categories_Products;
use App\Models\Products;

class ProductControllerEN extends Controller
{


    function __construct() { 
        App()->setLocale('en');

   }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Categories_Products = Categories_Products::where('lang', 'en')->limit(7)->get();
       $Products = Products::where('lang', 'en')->paginate(12);
        return view('main.All_products', 
            [
             'Categories_Products' => $Categories_Products, 
               'Products' => $Products, 
                //'slider' => $slider
            ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Products = Products::where('lang', 'en')->where('id', $id)->first();
        if (!is_null($Products)) {
            return view('main.singel_product',
                [
                    'Products' => $Products,
                ]);
        } else {
            return redirect('/');

        }

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
