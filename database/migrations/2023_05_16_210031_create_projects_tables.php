<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTables extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();

            $table->text('description')->nullable();

            $table->integer('position')->unsigned()->nullable();

            $table->text('year')->nullable();
            $table->text('client')->nullable();
            $table->text('company')->nullable();
            $table->text('type')->nullable();
            $table->text('role')->nullable();
            $table->text('process')->nullable();
            $table->text('tools')->nullable();
        });

        Schema::create('project_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'project');
        });


    }

    public function down()
    {

        Schema::dropIfExists('project_slugs');
        Schema::dropIfExists('projects');
    }
}
