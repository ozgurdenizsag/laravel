<?php

namespace App\Http\Controllers;

use App\Mail\DemandeDevis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact/contact');
    }

    public function sendMail(Request $req) {

        $this->validate($req, [
            'env-mail' => 'bail|required|email|between:5,30',
            'env-msg' => 'bail|required|between:5,9999'
        ]);

        $data = $req->all();
        $mail=$data["env-mail"];
        $msg=$data["env-msg"];

        Mail::to('ozgurdenizsag@gmail.com')->queue(new DemandeDevis($mail,$msg));

        return back();

        // dd($data["env-mail"]);
    }
}
