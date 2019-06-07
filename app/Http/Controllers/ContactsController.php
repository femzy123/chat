<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ContactsController extends Controller
{
    public function get() 
    {
        $contacts = User::all();

        return response()->json($contacts);
    }

    public function getMessageFor($id)
    {
        $message = Message::where('from', $id)->orWhere('to', $id)->get();

        return response()->json($messages);
    }
}
