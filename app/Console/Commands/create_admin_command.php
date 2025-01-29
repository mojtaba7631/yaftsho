<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Console\Command;

class create_admin_command extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:admin';

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

            $admin_role = Role::where('key', '=', 'admin');

            if ($admin_role->count() == 1) {

                $user_info = User::query()->create([
                    'name' => 'admin',
                    'family' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('123456'),
                    'national_code' => '123456789',
                    'mobile' => '123456789',
                    'user_name' => 'admin',
                ]);

                UserRole::query()->create([
                    'user_id' => $user_info->id,
                    'role_id' => $admin_role->first()->id,
                ]);

            }


        } catch (\Exception $e) {
            $this->info($e->getMessage());
        }

    }
}
