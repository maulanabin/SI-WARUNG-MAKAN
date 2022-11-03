<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\StorageLinkCommand;

class CustomStorageLinkCommand extends StorageLinkCommand
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a symbolic link from "public/a" to "storage/app/public"';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // if (file_exists(public_path('images/frontend/foods'))) {
        //     return $this->error('The "public/images/frontend/foods" directory already exists.');
        // }
        // $this->laravel->make('files')->link(
        //     storage_path('app/public'), public_path('images/frontend/foods')
        // );
        // $this->info('The [public/images/frontend/foods] directory has been linked.');
        if (file_exists(public_path('imagess'))) {
            return $this->error('The "public /imagess" directory already exists.');
        }
        $this->laravel->make('files')->link(
            storage_path('app/public'), public_path('imagess')
        );
        $this->info('The [public/imagess] directory has been linked.');
    }
}
