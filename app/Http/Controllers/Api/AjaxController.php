<?php

namespace Vanguard\Http\Controllers\Api;

use Illuminate\Http\Request;
use Vanguard\Contact;
use Vanguard\Http\Controllers\Controller;

class AjaxController extends Controller
{
     public function contact(Request $request)
    {
        $contact  = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->description = $request->description;
        $contact->phone = $request->phone;
        $contact->save();

        return $contact;
    }
}
