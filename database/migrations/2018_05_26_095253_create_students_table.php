<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('students', function (Blueprint $table) {
              $table->increments('id');
              $table->string('image')->nullable();
              $table->string('name')->nullable();
              $table->string('Father_name')->nullable();
              $table->string('dob')->nullable();
              $table->enum('gender', ['male','female']);
              $table->enum('meritalStatus', ['married','unmarried']);
              $table->string('cnic')->nullable();
              $table->string('address')->nullable();
              $table->string('city')->nullable();
              $table->string('postalCode')->nullable();
              $table->string('Phone')->nullable();
              $table->string('mobile')->nullable();
              $table->string('email')->nullable();

              $table->string('yop1')->nullable();
              $table->string('deg1')->nullable();
              $table->string('sub1')->nullable();
              $table->string('Board1')->nullable();

              $table->string('yop2')->nullable();
              $table->string('deg2')->nullable();
              $table->string('sub2')->nullable();
              $table->string('Board2')->nullable();

              $table->string('yop3')->nullable();
              $table->string('deg3')->nullable();
              $table->string('sub3')->nullable();
              $table->string('Board3')->nullable();

              $table->string('yop4')->nullable();
              $table->string('deg4')->nullable();
              $table->string('sub4')->nullable();
              $table->string('Board4')->nullable();

              $table->string('yop5')->nullable();
              $table->string('deg5')->nullable();
              $table->string('sub5')->nullable();
              $table->string('Board5')->nullable();


              $table->string('courseTitle')->nullable();
              $table->enum('courseType', ['Three month','Six month','One Year','Two Year','Degree Program']);
              $table->string('session')->nullable();
              $table->string('instituteName')->nullable();

              $table->string('roll_No')->nullable();
              $table->string('reg_No')->nullable();
              $table->string('dateOfReg')->nullable();
              $table->string('completionDate')->nullable();

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
      Schema::dropIfExists('students');
    }
}
