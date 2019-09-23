<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\AlertMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;

class MailController extends Controller
{
    public function ship(Request $request, $newuser)
    {
        $order = User::findOrFail($newuser);

        // Ship order...

        Mail::to($request->user())->send(new OrderShipped($order));
    }
}
