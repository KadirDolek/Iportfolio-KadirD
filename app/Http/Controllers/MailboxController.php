<?php

namespace App\Http\Controllers;

use App\Models\Mailbox;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function index(){
        $mails = Mailbox::all(); 
        return view('backend.mailbox', compact('mails'));
    }

    public function create(){
         return view('create');        
    }

    public function store(Request $request){
      
        $mails = new Mailbox(); 
        $mails->nom = $request->nom;
        $mails->email = $request->email;
        $mails->sujet = $request->sujet;
        $mails->message = $request->message;


        $mails->save(); 
        $mails = Mailbox::all();
        return view('backend.mailbox',compact('mails'));
    }

    public function destroy($id){
        $mails = Mailbox::where("id", $id);
        $mails->delete();

        $mails = Mailbox::all(); 
        return view('backend.mailbox', compact('mails'));
    }
}
