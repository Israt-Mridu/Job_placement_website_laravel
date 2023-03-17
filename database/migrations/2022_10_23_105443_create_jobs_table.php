<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title',length:200);
            $table->text('desc');
            $table->string('location',length: 300);
            $table->string('type',length: 100);
            $table->string('category',length: 100);
            $table->string('date');
            $table->string('company_name',length: 200);
            $table->string('company_website',length: 200);
            $table->text('comp_logo');
            $table->string('google',length: 200);
            $table->string('facebook',length: 200);
            $table->string('linkedin',length: 200);
            $table->string('twitter',length: 200);
            $table->string('instagram',length: 200);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
