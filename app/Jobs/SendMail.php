<?php

namespace App\Jobs;

use Carbon\Carbon;
use http\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $to;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($to)
    {
        $this->to = $to;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send([],[], function ($message){
            $message->to($this->to)->setBody("Welcome");
        });
    }

}

