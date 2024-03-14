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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->decimal('year', 4, 0);
            $table->string('make', 64);
            $table->string('model', 64);
            $table->string('trim_level', 64)->nullable();
            $table->text('description');
            $table->text('project_expectations');
            $table->text('details');
            $table->string('color', 64)->nullable();
            $table->string('engine', 64)->nullable();
            $table->unsignedInteger('cylinders')->nullable();
            $table->unsignedInteger('horsepower')->nullable();
            $table->unsignedInteger('torque')->nullable();
            $table->string('transmission', 64)->nullable();
            $table->unsignedInteger('speeds')->nullable();
            $table->boolean('is_manuel')->default(false);
            $table->string('rear_end', 64)->nullable();
            $table->string('brakes', 64)->nullable();
            $table->string('front_suspension', 64)->nullable();
            $table->string('rear_suspension', 64)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
