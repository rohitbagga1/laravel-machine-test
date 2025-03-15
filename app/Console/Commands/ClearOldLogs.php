<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class ClearOldLogs extends Command
{
    protected $signature = 'logs:clear';
    protected $description = 'Delete log files older than 7 days from storage/logs';

    public function handle()
    {
        $logPath = storage_path('logs');
        $files = File::files($logPath);
        $deletedCount = 0;

       
        foreach ($files as $file) {
            $fileTime = Carbon::parse($file->getMTime()); //
            \Log::info("Checking file: {$file->getFilename()}, Last Modified: {$fileTime}");
            if (Carbon::parse($file->getMTime())->lt(Carbon::now()->subDays(7))) {
                File::delete($file);
                $deletedCount++;
            }
        }

        $this->info("Deleted {$deletedCount} old log files.");
    }
}
