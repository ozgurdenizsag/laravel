<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Supplier;
use App\SupplierCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsAdminController extends Controller
{
    public function index(){
        $products = Product::all();
        $categories = Category::all();
        $suppliers = Supplier::all();
        //dd($products);
        return view('admin.manage_products.index')
            -> with('products', $products) 
            -> with('categories', $categories) 
            -> with('suppliers', $suppliers);
    }

    public function fetch(Request $request) {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('categories')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }

    public function create(Request $request){
        
    }

}
