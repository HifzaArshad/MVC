<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            // Add the columns
            $table->unsignedBigInteger('class_id'); // Foreign key reference to Mclass
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            
            // Add the foreign key constraint (if class_id references classes table)
            $table->foreign('class_id')->references('id')->on('class_records')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class');
    }
};
