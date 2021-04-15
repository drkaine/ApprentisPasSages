<?php
namespace App\Http\Controllers;


use App\Mail\Contact;
use App\Mail\liensMorts;
use App\Mail\motDePasse;
use App\Mail\newMotDePasse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


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
        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }

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
        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }

        $data = array(
          'lienMort'   =>   $request->lienMort,
            'subject'   =>   "Lien Mort"
            
        );

     Mail::to('mongeneral05@gmail.com')->send(new liensMorts($data));
        return back();
        }
    
    function sendMDP($mdp)
    {

        $data = array(
            'password'   =>   $mdp->password,
            'expiration'   =>   $mdp->expiration,
            'email'   =>   $mdp->email,
            'subject'   =>   "Mot de Passe Admin, ApprentisPasSages"
            
        );

     Mail::to($data['email'])->send(new motDePasse ($data));
        }
    
    function sendNewMDP($mdp)
    {

        $data = array(
            'password'   =>   $mdp->password,
            'email'   =>   $mdp->email,
            'subject'   =>   "Nouveau compte Admin, ApprentisPasSages"
            
        );

     Mail::to($data['email'])->send(new newMotDePasse ($data));
        }
    
}
        
          
    


?>
