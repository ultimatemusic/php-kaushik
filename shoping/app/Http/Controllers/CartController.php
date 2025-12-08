<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartModel;
use Illuminate\Support\Facades\Auth;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        try{
        $cart = DB::table('cart')
            ->join('_product', 'cart.product_id', '=', '_product.id')
            ->join('users', 'cart.user_id', '=', 'users.id')
            ->select('cart.*', '_product.product_name','_product.product_image', 'users.name')
            ->where('cart.status', 'Pending')
            ->where('cart.user_id', $id)
            ->get();
        // dd($cart);
            // return redirect('/')->with('error','Your cart is empty'); 
        
        // $subtotal= DB::table('cart')->select(sum('product_QTY'*'product_price'))->first();
       $rawTotalExpression = DB::raw('SUM(product_QTY * product_price) AS TOTAL');

        // 2. Execute the query using the Query Builder.
        $cartTotalResult = DB::table('cart')
            ->select($rawTotalExpression)
            ->first();
        $TOTALitem =DB::table('cart')
                ->where('status', 'Pending')
                 ->where('user_id', $cart[0]->user_id)
                 ->count();
        // dd($TOTALitem);
        if (isset($cart)) {
            return view('cart',["cart"=>$cart,"cartTotal"=>$cartTotalResult,"toatalProduct"=>$TOTALitem]);    
        }
        else {
            return redirect('/')->with('error','Your cart is empty');
        }
        
        }
        catch(\Exception $e){
            return redirect('/')->with('error','Your cart is empty');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $cart = DB::table('cart')
        //     ->join('_product', 'cart.product_id', '=', '_product.id')
        //     ->join('users', 'cart.user_id', '=', 'users.id')
        //     ->select('cart.*', '_product.product_name','_product.product_image', 'users.name')
        //     ->get();
        // dd($cart);
            // return redirect('/')->with('error','Your cart is empty'); 
        
        // $subtotal= DB::table('cart')->select(sum('product_QTY'*'product_price'))->first();
    //    $rawTotalExpression = DB::raw('SUM(product_QTY * product_price) AS TOTAL');

        // 2. Execute the query using the Query Builder.
        // $cartTotalResult = DB::table('cart')
        //     ->select($rawTotalExpression)
        //     ->first();
        // $TOTALitem =DB::table('cart')
        //         ->where('status', 'Pending')
        //          ->where('user_id', $cart[0]->user_id)
        //          ->count();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        return view('cart');
    }
    public function store(Request $request)
    {
         if(Auth::check()){
             $validated = $request->validate([
                'product_id'=>'required',
                'product_QTY'=>'required',
                'product_price'=>'required',
                'user_id'=>'required',
                'status'=>'required',
            ]);
            $data=[
                'product_id'=>$request->product_id,
                'product_QTY'=>$request->product_QTY,
                'product_price'=>$request->product_price,
                'user_id'=>$request->user_id,
                'status'=>$request->status,
            ];
            CartModel::create($data);
            $link='/cart/'.$data['user_id'];
            return redirect($link)->with('status','Product added to cart successfully');
        }else{
         
           
           return redirect('/sign-in')->with('error','Please login to add items to your cart');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        

        // $cartItems = DB::table('cart')
            // ->select('*')
            // ->get(); 
        // dd($cartItems);

        // $groupedCart = $cartItems->groupBy('user_id');
        // DD($groupedCart);
        
        // dd($finalArray,$groupedCart);

        $data = DB::table('cart')
            ->join('users', 'users.id', '=', 'cart.user_id')
            ->join('_product', 'cart.product_id', '=', '_product.id')
            ->select('_product.id','_product.product_name','_product.price' ,'_product.product_image','cart.id', 'cart.product_id', 'cart.product_QTY','cart.user_id','cart.status','cart.created_at', 'users.name', 'users.email')
            ->get();
        // dd($data);
        $group=$data->groupBy('user_id');
        $finalArray = $group->toArray();
    
        // dd($userdata);
        return view('admin.Manage-orders',['data'=>$finalArray]);
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
        CartModel::where('id',$id)->delete();
        return redirect('/')->with('success', 'Product removed from cart successfully.');
    }



    public function complete($id)
    {
        CartModel::where('user_id',$id)->update(['status'=>'Complete']);

        return redirect('/admin/Manage-orders')->with('success', 'Order Complited successfully');
    }
    public function cancel($id)
    {
        CartModel::where('user_id',$id)->delete();

        return redirect('/admin/Manage-orders')->with('error', 'Order cancel successfully');
    }
}
