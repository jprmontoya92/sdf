<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request){
       $message =  request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        
        Mail::to('juanpedrormm92@gmail.com')->queue(new MessageReceived($message));

    
        //nos redirige a la ultima peticion 
        return back()->with('status', 'Recibimos tu mensaje.');
    }
}
