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
        Schema::create('heros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hero_role_id')->unsigned();
            $table->string('name');
            $table->string('specially');
            $table->string('lane');
            $table->string('type');
            $table->timestamps();

            $table->foreign('hero_role_id')->references('id')->on('hero_roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
