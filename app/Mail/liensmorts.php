<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class liensMorts extends Mailable
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
        return $this->from('duretkevin@live.fr')->subject('')->view('mail.liensMort')->with('data', $this->data);
    }
}


?>

