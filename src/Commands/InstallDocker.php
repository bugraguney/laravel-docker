<?php
/**
 * Created by PhpStorm.
 * User: bugraguney
 * Date: 2019-01-09
 * Time: 12:44
 */

namespace bugraguney\laraveldocker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallDocker extends Command
{
    protected $signature = 'laravel:install-docker';
    protected $description = 'Docker compose dosyalarını çıkart';
    public function handle()
    {
        Artisan::call('vendor:publish' , [
            '--provider' => 'bugraguney\laraveldocker\ServiceProvider'
        ]);
        $this->info('Docker compose dosyaları eklendi.');
    }
}