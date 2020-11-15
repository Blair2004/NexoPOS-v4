<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FirstDemoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {       
        $this->call( RewardSystemSeeder::class );
        $this->call( CustomerGroupSeeder::class );
        $this->call( FirstExampleUnitGroupSeeder::class );
        $this->call( FirstExampleTaxesSeeder::class );
        $this->call( ProductsSeeder::class );
        $this->call( FirstExampleProviderSeeder::class );
    }
}
