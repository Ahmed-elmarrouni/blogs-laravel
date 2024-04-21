<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DeleteFakeData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:delete-fake-data';

    protected $signature = 'db:seed:clean';

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Delete records
        DB::table('likes')->delete();

        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $this->info('Fake data deleted successfully.');
        return 0;
    }
}
