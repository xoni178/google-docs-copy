<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ForeignKeyChecking;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    use TruncateTable, ForeignKeyChecking;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeyChecks();

        $this->truncateTable("comments");

        Comment::factory(3)->create();

        $this->enableForeignKeyChecks();
    }
}
