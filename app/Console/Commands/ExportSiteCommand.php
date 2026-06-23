<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExportSiteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the static site to the dist/ directory';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting static export...');

        // Create dist paths
        $distPath = base_path('dist');
        $enPath = $distPath . '/en';

        if (!File::exists($distPath)) {
            File::makeDirectory($distPath, 0755, true);
        }
        if (!File::exists($enPath)) {
            File::makeDirectory($enPath, 0755, true);
        }

        // Copy public assets (Vite build, images, etc.) to dist/
        $this->info('Copying public assets...');
        File::copyDirectory(public_path(), $distPath);

        // Generate Indonesian (default)
        $this->info('Generating Indonesian /id ...');
        app()->setLocale('id');
        $htmlId = view('home')->render();
        File::put($distPath . '/index.html', $htmlId);

        // Generate English
        $this->info('Generating English /en ...');
        app()->setLocale('en');
        $htmlEn = view('home')->render();
        File::put($enPath . '/index.html', $htmlEn);

        $this->info('Static export completed successfully in dist/');
    }
}
