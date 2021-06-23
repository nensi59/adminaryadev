<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;

class add_product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add_product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $request->validate([
        'product_name' => 'required',
        'product_image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'product_chamical' => 'required',
        'product_packing' => 'required',
        'catagory_name' => 'required',
        ]);

        $product= new product();
        $product->product_name=$request->product_name;
        if($file = $request->hasFile('product_image'))
        {
            
            $file=$request->file('product_image');
            $filename=$file->getClientOriginalName();
            $destinationPath=public_path().'/uploads/';
            $file->move($destinationPath,$filename);
            $product->product_image = $filename ;
 
        }
        $product->product_chamical=$request->product_chamical;
        $product->product_packing=$request->product_packing;
        $product->catagory_name=$request->catagory_name;
        $product->save();
        return redirect()->route('view_product.index');
         
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
        
    }
}
