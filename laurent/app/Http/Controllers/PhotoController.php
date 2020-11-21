<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
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
    public function create(Request $req)
    {
        $data = $req->all();
        $chemin = $data['choosePhoto']->store('public/storage/images');
        $photo = Photo::create([
            'name' => $data['nomPhoto'],
                'desc' => $data['descPhoto'],
                'path' => substr($chemin,7),
                'category_id' => $data['idCat'],
        ]);
        
        $photo->save();
        return back();
        abort(500, 'Could not upload image :(');
    }

    public function delete(Request $request)
    {
        $data = $request->all();
        Photo::where('id', '=', $data['idPhoto'])->delete();
        return back();
    }

    public function modifier(Request $request)
    {
        $data = $request->all();
        DB::table('photos')
            ->where('id',$data['idPhoto'])
            ->update(['name' => $data['nomPhoto'],'desc' => $data['descPhoto']]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
