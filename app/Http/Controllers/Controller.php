<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\Welcome;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function contactSend(Request $request)
    {
        $this->validate($request, [
            'inputFirstName'    => 'required|max:255',
            'inputLastName'     => 'required|max:255',
            'inputEmail'        => 'required|email',
            'inputMessage'      => 'required',
        ]);

        // save message
        $message = new \App\Message();
        $message->first_name    = $request->input('inputFirstName');
        $message->last_name     = $request->input('inputLastName');
        $message->email         = $request->input('inputEmail');
        $message->message       = $request->input('inputMessage');
        $message->save();

        return back();
    }
}
