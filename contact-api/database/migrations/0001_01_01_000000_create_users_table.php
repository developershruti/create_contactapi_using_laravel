<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(' contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('phone');
            $table->string('email');
            $table->string('select_service');
            $table->string('select_product');
            $table->text('message');
          
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}