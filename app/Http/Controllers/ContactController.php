<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function get()
    {
        return view ('contact');
    }

    protected function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'platform' => 'required',
            'devans' => 'required',
            'Comment' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        return $this->mailto($request, $input);
    }
    protected function mailto ($request, $input)
    {

        \Mail::send('Contact_email', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'platform' => $input['platform'],
            'devans' => $input['devans'],
            'Comment' => $input['Comment'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('admin@neonzz.online', 'admin');
        });

        \Debugbar::info($debug);

        return redirect()->back()->with(['success' => 'Thank you for contacting us!']);
    }

}