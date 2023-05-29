<?php

namespace Amirul\Contact\https\controllers;

use Amirul\Contact\models\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function view()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        contact::create($validated);

        return redirect('/');
    }
}
