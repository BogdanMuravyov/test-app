<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function enterMessage()
    {
        $messages = Contact::all();
        return view('message', ['messages' => $messages]);
    }

    public function storeMessage(MessageRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('message');
    }
}
