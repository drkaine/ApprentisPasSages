<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class motDePasse extends Mailable
{
        use Queueable, SerializesModels;
 
    /**
     * Elements de contact
     * @var array
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
 
    public function build()
    {
        return $this->from('mongeneral05@gmail.com')->subject($this->data['subject'])->view('mail.mdpOublie')->with('data', $this->data);
    }
}


?>

