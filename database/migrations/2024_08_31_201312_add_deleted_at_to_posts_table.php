<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Check if the column already exists before adding it
        if (!Schema::hasColumn('posts', 'deleted_at')) {
            Schema::table('posts', function (Blueprint $table) {
                $table->timestamp('deleted_at')->nullable()->after('updated_at');
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
            $table->dropColumn('deleted_at');
        });
    }
}
