<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationModel;
use App\Models\User;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;

class registration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
    }

    public function signin() {
        return view('signin');
    }

    public function profile() {
        return view('profile');
    }

   


    public function updateprofile(Request $request)
    {
        # Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);


        # Match The Old Password
        // if(!Hash::check($request->old_password, auth()->user()->password)){
        //     return back()->with("error", "Old Password Doesn't match!");
        // }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
        
        User::whereId(Auth()->user()->id)->update($data);
        return redirect('/profile')->with('success', 'Profile Updated successfully');
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

        
        // FIX: Check if the OTP record exists
        $otptbl = DB::table('_o_t_pverification')->where('email', $request->email)->first();
        
        
        $userotp = (int)$request->otp;
        
        
        // dd($otptbl->otp,gettype($userotp),$userotp,gettype($otptbl->otp));

        if ($otptbl->otp == $userotp) {
            $validated = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|",  
            "phone" => "required|min:10|max:10",
            "password" => "required|min:8", 
            "confirm-password" => "required|same:password"
        ]);    
        }
        else{
            return redirect('/create-account')->with('error', 'worng otp');
        }

        // ... rest of the successful registration code ...
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ];
        
        RegistrationModel::create($data);

        return redirect('/sign-in')->with('success', 'Registration is successfully with OTP ');
    }


    // login 
    
    public function login(Request $request)
    {
        $validated = $request->validate([
            "email" => "required",
            "password" => "required|min:8"
        ]);

        $user = User::where('email', $request->email)->first();
        // DD($user); // Remove or comment this out

        if ($user != null) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect('/sign-in')->with('success', 'Login successful!');
            } else {
                return redirect('/sign-in')->with('error', 'Your Login credentials are not matched');
            }
        } else {
            return redirect('/sign-in')->with('error', 'Your Login credentials are not matched');
        }
    }
    

    public function logout(Request $request)
    {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('success', 'You have been successfully logged out.');
    }

    // admin menage customers
    public function menagecustomers()
    {
        $data = User::all();
        return view('admin.managecustomers', ["data" => $data]);
    }
    // delete customers
    public function deletecustomers($id)
    {
        User::where('id', $id)->delete();
        return redirect('/admin/Menage-customers')->with('success', 'Customer deleted successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = User::all();
        $dates = DB::table('users')
            ->select(DB::raw('DATE(created_at) as creation_date'))
            ->get();
        // DD($dates);

        return view('admin.dashboard', ["data" => $data , "dates" => $dates]);
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
