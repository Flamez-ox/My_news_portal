<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    //
    public function contact_show()
    {
        $contact = Contact::where('id',1)->first();
        return view("admin.pages.contact", compact('contact'));
    }

    public function contact_update(Request $request, $id)
    {
        $contact = Contact::where('id',1)->first();

        $contact->contact_tittle = $request->contact_tittle;
        $contact->contact_detail = $request->contact_detail;
        $contact->contact_address = $request->contact_address;
        $contact->contact_number = $request->contact_number;
        $contact->contact_email = $request->contact_email;
        $contact->contact_map = $request->contact_map;
        $contact->contact_status = $request->contact_status;
        $contact->update();

        return redirect()->route('contact_show')->with('success', 'Contact Updated Successfully');
        
    }
}
