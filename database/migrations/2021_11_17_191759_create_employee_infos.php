<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_infos', function (Blueprint $table) {
            $table->id();
            $table->string('employee_image')->nullable();
            $table->string('user_id');
            $table->string('lname');
            $table->string('email');  
            $table->string('password');
            $table->string('password1');
            $table->string('departments_id');
            $table->string('branches_id');
            $table->string('address');
            $table->double('pnumber');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_infos');
    }
}
