<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller
{
	public function getIndex()
	{
		$posts = Post::orderBy('created_at','asc')->limit(7)->get();
        return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout()
	{

	  $email='suvrodatta95@gmail.com';
      return view('pages.about')->with("name","Suvro Datta")->withGmail($email);
	}

	public function getContact()
	{
       return view('pages.contact');
	}

	public function postContact(Request $request)
	{
      $this->validate($request,[
      	'email'   =>'required|email',
      	'subject' =>'min:3',
      	'message' =>'min:10'
      	]); 

      $data = array(

      	'email'   => $request->email,
      	'subject' => $request->subject,
      	'bodyMessage' => $request->message

      	);

      Mail::send('emails.contact',$data,function( $message ) use ($data){

      	$message->from($data['email']);
      	$message->to('suvrodatta95@gmail.com');
      	$message->subject($data['subject']);

      });

      Session::flash('success','Your email is sent succssfully!');

      return redirect('/');

	}

	
}