<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

use Illuminate\Support\Facades\Mail;
use App\Mail\CommercialMail;

use Illuminate\Support\Facades\DB;

class SendCommercialEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send-commercial-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Commercial Emails Command for facebook users';

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
    public function handle()
    {

        DB::connection('sqlite')->table('facebook_users')->find(1);

        $products = Product::with('productImages')
            ->where('product_activity', 1)
            ->get();


        Mail::to('abudherzallah0@gmail.com')->send(new CommercialMail($products));
    }
}
