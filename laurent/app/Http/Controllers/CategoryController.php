<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if (Category::where('name', '=', $data['nomCat'])-> exists() ){
            return back();
        }

        $this->validate($request, [
            'nomCat' => 'bail|required|between:4,30',
            'descCat' => 'bail|required|between:10,9999'
        ]);

        $cat = Category::create([
            'name' => $data['nomCat'],
            'desc' => $data['descCat'],
        ]);
        
        $cat->save();
        return back();
    }

    public function supprimer(Request $request)
    {
        $data = $request->all();
        Category::where('id', '=', $data['idCat'])->delete();
        return back();
    }
    
    public function modifier(Request $request)
    {
        $data = $request->all();
        DB::table('categories')
            ->where('id',$data['idCat'])
            ->update(['name' => $data['nomCat'],'desc' => $data['descCat']]);
        return back();
    }

    public function getAllPhotos($idCategory){
        $cat = Category::where('id', $idCategory)->first();
        return $cat->photos()->get();
    }

    public function getPhotoDatas($idPhoto){
        $photo = Photo::where('id', $idPhoto)->first();
        return $photo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
