<?php

namespace App\Console\Commands;

use App\Jobs\ExperationNotifierJob;
use App\Models\add_member_model;
use http\Client\Curl\User;
use http\Message;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CronJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'expire_dataNotifier';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Njofton useret kur i ka skadu afati';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(){

        $lista = add_member_model::query()->whereDate('expire_date','<',Carbon::today())->get();
        if(count($lista) != 0){
            Mail::send([],[], function ($message) use ($lista){
                $message->to('albenit44@gmail.com')->setBody( count($lista) . " anetar skadojn sot ");
            });
        }
        }





}
