<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Custom Command ';

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
        // $name = $this->ask("What is your Name ?");
        // $this->info($name);
        // return 0;
        $this->info('Command Hid');
        $users = User::whereNull('email_verified_at')->get();
        foreach ($users as $user) {
            $user->delete();
        }
    }
}
