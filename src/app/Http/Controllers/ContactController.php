<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Validation\Validator;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contacts = $request->all();
        // $result=count($contact);
        // echo $result;
        // var_dump($contact);

        return view('confirm', compact('contacts'));
    }

    public function store(ContactRequest $request)
    {
        $fullname=$request->only(['last_name'. 'first_name']);
        $contact = $fullname . $request->only(['gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);

        Contact::create($contact);

        return view('thanks');
    }
}
