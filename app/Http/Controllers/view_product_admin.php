<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\product;
use Illuminate\Http\Request;

class view_product_admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('product')->get();
       return view('admin.view_product',compact('products'));
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
        $products=DB::table('product')->where('id',$id)->First();
        return view('admin.product_edit',compact('products'));
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
        $request->validate([
            'product_name' => 'required',
            'product_image' => 'mimes:jpeg,png,jpg',
            'product_chamical' => 'required',
            'product_packing' => 'required',
            'catagory_name' => 'required',
            ]);
        /*if($file = $request->hasFile('product_image'))
        {
            
            $file=$request->file('product_image');
            $filename=$file->getClientOriginalName();
            $destinationPath=public_path().'/uploads/';
            $file->move($destinationPath,$filename);
            $product->product_image = $filename ;
        
        }
        $product = product::find($id);
        $product->product_name=$request->get('product_name');
        if($file = $request->hasFile('product_image'))
        {
            
            $file=$request->file('product_image');
            $filename=$file->getClientOriginalName();
            $destinationPath=public_path().'/uploads/';
            $file->move($destinationPath,$filename);
            $product->product_image = $filename ;
 
        }
        $product->product_chamical=$request->get('product_chamical');
        $product->product_packing=$request->get('product_packing');
        $product->catagory_name=$request->get('catagory_name');
        $product->save();
        return redirect()->route('view_product.index');*/
                $product = ['product_name' => $request->product_name, 
                'product_chamical' => $request->product_chamical, 'product_packing' => $request->product_packing, 
                'catagory_name' => $request->catagory_name];
                if($file = $request->hasFile('product_image'))
                {
                    
                    $file=$request->file('product_image');
                    $filename=$file->getClientOriginalName();
                    $destinationPath=public_path().'/uploads/';
                    $file->move($destinationPath,$filename);
                    $product['product_image'] = "$filename";
        
                }
                $product['product_name'] = $request->get('product_name');
                $product['product_chamical'] = $request->get('product_chamical');
                $product['product_packing'] = $request->get('product_packing');
                $product['catagory_name'] = $request->get('catagory_name');
                Product::where('id',$id)->update($product);
                return redirect()->route('view_product.index');
       
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flag=DB::table('product')->where('id',$id)->delete();
        if($flag)
        {
            return redirect()->route('view_product.index');
        }
        else
        {
            echo "false";
        }
    }
}
