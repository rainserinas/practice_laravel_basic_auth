<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leads;

class LeadsController extends Controller
{
    public function index() {
        return Leads::all();
    }
    public function show($id) {
        return Leads::find($id);
    }
}
