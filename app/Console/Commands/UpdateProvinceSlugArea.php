<?php

namespace App\Console\Commands;

use App\Models\Province;
use Illuminate\Console\Command;

class UpdateProvinceSlugArea extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'province:update-slug-area';

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
     * @return int
     */
    public function handle()
    {
        $provinces = Province::all();

        foreach ($provinces as $province) {
            $updatedSlugArea = str_replace('lich-cup-dien-', 'dien-luc-', $province->slug);

            $province->slug_area = $updatedSlugArea;
            $province->save();

            $this->info("Updated province: {$province->name} with slug_area: {$updatedSlugArea}");
        }

        $this->info("All provinces have been updated.");
    }
}
