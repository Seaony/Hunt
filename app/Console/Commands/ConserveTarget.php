<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ConserveTarget extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'conserve-target';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $targets = cache()->pull('targets',[]);

        $count = count($targets);

        if ($count) {
            \DB::table('targets')->insert($targets);
        }

        $this->info("链接跳转记录已保存，共执行{$count}条。");
    }
}
