<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\liensMorts;

class mailController extends Controller
{
    
   

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required',
      'message' =>  'required',
      'subject' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'subject'   =>   $request->subject,
            'mail'   =>   $request->email
        );

     Mail::to('mongeneral05@gmail.com')->send(new Contact($data));
        return back();
        
    }  
    
    function liensMortsSend(Request $request)
    {
     $this->validate($request, [
      'lienMort'     =>  'required'
     ]);

        $data = array(
          'lienMort'   =>   $request->lienMort,
            'subject'   =>   "Lien Mort"
            
        );

     Mail::to('mongeneral05@gmail.com')->send(new liensMorts($data));
        return back();
        
    }  
    
}

?>
