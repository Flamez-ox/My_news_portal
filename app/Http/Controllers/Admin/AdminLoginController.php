<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Mail\AdminMail;
use Hash;
use Auth;


class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('admin.pages.login');
    }



    public function forgotpassword()
    {
        return view('admin.pages.forgot_password');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendmail()
    {
        
    }
    public function forgot_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        $admin_data = Admin::where('email', $request->email)->first();
        if (!$admin_data) {
            return redirect()->back()->with('error', 'Email not found');
        }

        $token = hash('sha256', time());

        $admin_data->token = $token;
        $admin_data->update();



        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = '<a href='.$reset_link.'>Reset password</a>';
        


        \Mail::to($request->email)->send(new AdminMail($subject, $message));

        return redirect()->route('admin_login')->with('success', 'Please check your email');
    }



    public function reset_password($token, $email)
    {

        $admin_data = Admin::where('token', $token)->where('email',$email)->first();
        if(!$admin_data){
            return redirect()->route('admin_login');
        }
        return view('admin.pages.reset_password', compact('token', 'email'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reset_password_submit(Request $request)
    {
        //
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password',
        ]);
       
        $admin_data = Admin::where('token', $request->token)->where('email',$request->email)->first();

        $admin_data->password = Hash::make($request->password);
        $admin_data->token = '';
        $admin_data->update();


        return redirect()->route('admin_login')->with('success', 'Password changed Successfully');
    }


    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($data)){
            return redirect()->route('admin_dashboard');
        }else {
            return redirect()->route('admin_login')->with('error', 'email or password is incorrect!');
        };
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
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
}
