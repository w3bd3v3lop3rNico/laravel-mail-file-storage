<?php

namespace App\Http\Controllers\Admin;

use App\Mail\NewContact;
use App\Models\Lead;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function create()
    {
        return view("admin.leads.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "name"=> "required|max:255",
            "email"=> "required|max:255|email",
            "message"=> "required|min:18",
            "privacy_policy"=> "required",
        ]);

        $data = $request->all();

        $lead = Lead::create($data);

        $mail = new NewContact($lead);

        Mail::to('fake@mail.com')->send($mail);

        return back();

    }
}
