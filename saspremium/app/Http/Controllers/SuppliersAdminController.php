<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersAdminController extends Controller
{
    public function index(){
        return view('admin.manage_suppliers.index');
    }
}
