<?php

namespace App\Http\Controllers;
use App\Models\Contact; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail; 

class ContactController extends Controller
{
    public function save(Request $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Thank you for contact us!');

    }
}
