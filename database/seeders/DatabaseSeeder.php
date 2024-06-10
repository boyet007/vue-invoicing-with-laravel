<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Counter;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Counter::factory(1)->create();
        // \App\Models\Invoice::factory(5)->create();
        \App\Models\InvoiceItem::factory(5)->create();

    }
}
