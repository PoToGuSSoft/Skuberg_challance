<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::insert("INSERT INTO Users(name,email,password) VALUES 
       ('admin','admin@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA=='),
       ('punya','punya@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA=='),
       ('seller','seller@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA=='),
       ('buyer','buyer@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA=='),
       ('test1','test1@punyadev.com','Q9KtJ+ZKaledsHzasWUEbA==') ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::delete("DELETE FROM Posts WHERE id in(1,2,3,4,5)");
    }
}
