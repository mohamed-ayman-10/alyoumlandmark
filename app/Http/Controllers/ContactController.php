<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'name.required' => __('The Name Is Required'),
            'phone.required' => __('The Phone Is Required'),
            'email.required' => __('The Email Is Required'),
            'address.required' => __('The Address Is Required'),
        ];
        $request->validate([
            'name'      => 'required',
            'phone'     => 'required',
            'email'     => 'required',
            'address'   => 'required',
        ], $message);
        if ($request) {
            Contact::create($request->all());
            return redirect()->back()->with('success', __('The request has been sent successfully'));
        } else {
            return redirect()->back()->with('success', __('The request has not been sent'));
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
