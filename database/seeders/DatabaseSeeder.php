<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Account;
use App\Models\Customer;
use App\Models\Journal;
use App\Models\Payment;
use App\Models\Purchase;
use App\Models\Receipt;
use App\Models\Sale;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
        // \App\Models\User::factory(10)->create();
        Account::factory(10)->create();
        Customer::factory(10)->create();
        Journal::factory(10)->create();
        Purchase::factory(10)->create();
        Transaction::factory(10)->create();
        Payment::factory(10)->create();
        Sale::factory(10)->create();
        Receipt::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);
    }
}
