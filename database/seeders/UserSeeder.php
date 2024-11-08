<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\Traits\ForeignKeyChecking;
use Database\Seeders\Traits\TruncateTable;

class UserSeeder extends Seeder
{
    use TruncateTable, ForeignKeyChecking;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeyChecks();

        $this->truncateTable("posts");

        User::factory(10)->create();

        $this->enableForeignKeyChecks();
    }
}
