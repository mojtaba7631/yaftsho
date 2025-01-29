<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;

class init_project_command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            Role::query()->create([
                'key'=>'admin',
                'title' => 'ادمین'
            ]);
        }
        catch (\Exception $exception){
            $this->info('init project executed old');
        }
    }
}
