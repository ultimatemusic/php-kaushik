<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcategory;
use DB;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=subcategory::all();
        // dd($data);
        $category=DB::table('category')->select('id','category')->get();
        // dd($category);
        return view('admin.addsubcategory',["data"=>$data,"category"=>$category]);
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
            'category' => 'required|string',
            'subcategory_name' => 'required|string',

        ]);

        $data = [
            'category_id' => $request->category,
            'subcategory_name' => $request->subcategory_name,
        ];

        subcategory::create($data);

        return redirect('/admin/add-subcategory')->with('success', 'category Added successfully');
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
    }

    public function showsubcategory($id)
    {
        $data=subcategory::where('id',$id)->first();;
        // DD($data);
        $category=DB::table('category')->select('id','category')->get();
        // dd($category);
        return view('admin.editsubcategory',["data"=>$data,"category"=>$category]);
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
        $validated = $request->validate([
            'category' => 'required|string',
            'subcategory_name' => 'required|string',

        ]);

        $data = [
            'category_id' => $request->category,
            'subcategory_name' => $request->subcategory_name,
        ];

        subcategory::where('id',$id)->update($data);

        return redirect('/admin/add-subcategory')->with('success', 'subcategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        subcategory::where('id',$id)->delete();
        return redirect('/admin/add-subcategory')->with('error','category successfully deleted');
    }
}
