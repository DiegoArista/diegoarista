<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Post;
use App\Subscription;
use App\User;
use App\Mail\NewPost;
use Mail;

class NewPost extends Mailable
{
    use Queueable, SerializesModels;


    public $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {

        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.NewPost')->subject('¡Hemos publicado un nuevo artículo!');
    }
}
