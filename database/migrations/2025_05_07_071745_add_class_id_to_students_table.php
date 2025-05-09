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
            $table->unsignedBigInteger('class_id')->after('id');
    
            // Foreign key constraint (if your class table is `class_records`)
            $table->foreign('class_id')->references('id')->on('class_records')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('students', function (Blueprint $table) {
        $table->dropForeign(['class_id']);
        $table->dropColumn('class_id');
    });
}
};
