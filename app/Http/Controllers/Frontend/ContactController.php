<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\AdminMail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Nette\Schema\Helpers;
use Mail;
use Validator;

class ContactController extends Controller
{
    //
    public function sendmail(Request $request)
    {
        

        $validator = \Validator::make($request->all(),[
            'fname'=>'required',
            'lname'=>'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if(!$validator->passes())
        {
            // return response()->json(['code'=>0,'error_message'=>$validator->errors()->toArray()]);
            return back()->with('error','Email not sent');
        }
        else
        {
            $admin_data = Admin::where('id',1)->first();
            $subject = 'Contact Form Email';
            $message = 'Visitor Message Detail:<br>';
            $message .= '<b>Visitor Name: </b>'.$request->fname. $request->lname.'<br>';
            $message .= '<b>Visitor Email: </b>'.$request->email.'<br>';
            $message .= '<b>Visitor Email: </b>'.$request->subject.'<br>';
            $message .= '<b>Visitor Message: </b>'.$request->message;
            \Mail::to($admin_data->email)->send(new AdminMail($subject, $message));

           

            // return response()->json(['code'=>1,'success_message'=>'email sent']);
            return back()->with('success','Email sent');
        }
    }
}
