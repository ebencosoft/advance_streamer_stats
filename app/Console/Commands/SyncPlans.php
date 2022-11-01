<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Braintree;
use App\Streamlabplan;

class SyncPlans extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'braintree:sync-plans';
    
    protected $description = 'Sync with online plans on Braintree';

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
        // Empty table
        Streamlabplan::truncate();

        // Get plans from Braintree
        $braintreePlans = Braintree\Plan::all();

        // uncomment the line below to dump the plans when running the command
        // var_dump($braintreePlans);

        // Iterate through the plans while populating our table with the plan data
        foreach ($braintreePlans as $braintreePlan) {
            Streamlabplan::create([
                'name' => $braintreePlan->name,
                'slug' => str_slug($braintreePlan->name),
                'braintree_plan' => $braintreePlan->id,
                'cost' => $braintreePlan->price,
                'description' => $braintreePlan->description,
            ]);
        }
    }
}
