<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Rename tables
        Schema::rename('projects', 'works');
        Schema::rename('project_slugs', 'work_slugs');

        // Modify foreign key and column
        Schema::table('work_slugs', function(Blueprint $table) {
            // Drop old foreign key constraint
            $table->dropForeign('fk_project_slugs_project_id');

            // Rename the column
            $table->renameColumn('project_id', 'work_id');

            // Add new foreign key constraint
            $table->foreign('work_id')
                ->references('id')
                ->on('works')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Modify foreign key and column
        Schema::table('project_slugs', function(Blueprint $table) {
            // Drop old foreign key constraint
            $table->dropForeign('fk_project_slugs_project_id');

            // Rename the column
            $table->renameColumn('project_id', 'work_id');

            $table->foreign('work_id')
                ->references('id')
                ->on('works')
                ->onDelete('cascade');
        });

        // Rename tables
        Schema::rename('works', 'projects');
        Schema::rename('work_slugs', 'project_slugs');
    }
};
