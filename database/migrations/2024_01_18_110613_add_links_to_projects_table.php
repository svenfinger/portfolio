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
        Schema::table('projects', function (Blueprint $table) {
            $table->text('link_primary')->nullable();
            $table->text('link_primary_label')->nullable();
            $table->text('link_secondary')->nullable();
            $table->text('link_secondary_label')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('link_primary');
            $table->dropColumn('link_primary_label');
            $table->dropColumn('link_secondary');
            $table->dropColumn('link_secondary_label');
        });
    }
};
