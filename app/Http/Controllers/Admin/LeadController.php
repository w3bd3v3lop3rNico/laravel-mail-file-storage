<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeadController extends Controller
{
    public function create()
    {
        return view("admin.leads.create");
    }
}