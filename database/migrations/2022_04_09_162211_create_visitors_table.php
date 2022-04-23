<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable()->default('-');
            $table->String('email')->nullable()->default('-');
            $table->String('phone')->nullable()->default('-');
            $table->text('addres')->nullable()->default('-');
            $table->Text('saying')->nullable()->default('-');
            $table->enum('present', ['0', '1'])->comment('0 = Hadir, 1 = Tidak Hadir')->nullable();
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
        Schema::dropIfExists('visitors');
    }
}
