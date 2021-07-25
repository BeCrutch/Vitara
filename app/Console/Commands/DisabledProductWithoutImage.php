<?php

namespace App\Console\Commands;

use App\Classes\Imports\B2BImport;
use Illuminate\Console\Command;

class DisabledProductWithoutImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:disabled';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import image from B2B';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(B2BImport $b2BImport)
    {
        try {
            $b2BImport->disabledProductWithoutImage();

            $this->info('Prices have been successfully added to the queue');
        } catch (\Exception $exception) {
            $this->error('Something went wrong.' . $exception->getMessage());
        }
    }
}
