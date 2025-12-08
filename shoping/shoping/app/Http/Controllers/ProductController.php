<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showproduct(){
        $data=ProductModel::all();
         return view('home',["data"=>$data]);
    }

   public function viewproduct($id)
    {
         $data=ProductModel::where('id',$id)->first();
         return view('view-product',["data"=>$data]);
    }

    public function index()
    {
        return view('admin.dashboard');
    }



    public function addproduct()
    {
        return view('admin.addproduct');
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
        $validated = $request->validate([
            'product_name' => 'required|string|max:25',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'QTY' => 'required|integer',
            'product_image' => 'required|image|max:10240', // 10MB
        ]);

        // handle image upload (if provided)
        $fileName = null;
        if ($request->hasFile('product_image') && $request->file('product_image')->isValid()) {
            $file = $request->file('product_image');
            $fileName = time() . '_' . rand(1000,9999) . '.' . $file->getClientOriginalExtension();
            // put into public assets folder used by views
            $file->move(public_path('assets/admin/images/product_img'), $fileName);
        }

        $data = [
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'QTY' => $request->QTY,
            'product_image' => $fileName
        ];

        ProductModel::create($data);

        return redirect('/admin/addproduct')->with('success', 'product Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $data=ProductModel::all();
         return view('admin.menage_product',["data"=>$data]);
    }



   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data=ProductModel::where('id',$id)->first();
         return view('admin.edit-product',["data"=>$data]);
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
        $data=array(
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'QTY' => $request->QTY,
        );
        // create a elquent query builder for update data
        ProductModel::where('id',$id)->update($data);
        return redirect('/admin/Menage-product')->with('success','Your employee data successfully updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductModel::where('id',$id)->delete();
        return redirect('/admin/Menage-product')->with('success','Your product data successfully deleted');
    }
}
