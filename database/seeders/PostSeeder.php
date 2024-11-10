<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ForeignKeyChecking;
use Database\Seeders\Traits\TruncateTable;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    use TruncateTable, ForeignKeyChecking;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeyChecks();

        $this->truncateTable("posts");

        Post::factory(4)->create();

        $this->enableForeignKeyChecks();
    }
}
