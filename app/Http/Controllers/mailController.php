<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class mailController extends Controller
{

    public function mail()
    {

	   $data = array( 'email' => 'hasibul.amin@gagagugu.com', 'first_name' => 'P1', 'from' => 'info@ihemel.net', 'to_name' => 'Hemel' );

		Mail::send( 'emails.welcome', array('data' => $data), function( $message ) use ($data)
		{
		    $message->to( $data['email'] )->from( $data['from'], $data['first_name'] )->subject( 'Welcome!' );
		});
    }
}
