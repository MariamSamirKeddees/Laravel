<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatorIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Check if the column already exists before adding it
        if (!Schema::hasColumn('posts', 'creator_id')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->unsignedBigInteger('creator_id')->nullable();

                // Add foreign key constraint if needed
                $table->foreign('creator_id')->references('id')->on('creators')->onDelete('set null');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Optionally, drop the column if needed
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['creator_id']);
            $table->dropColumn('creator_id');
        });
    }
}
