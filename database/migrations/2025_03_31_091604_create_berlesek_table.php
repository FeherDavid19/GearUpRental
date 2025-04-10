<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerlesekTable extends Migration
{
    public function up()
    {
        Schema::create('berlesek', function (Blueprint $table) {
            $table->id();
            $table->string('user_name'); // Felhasználó neve
            $table->string('auto_tipus'); // Autó típusa
            $table->date('berles_kezdete'); // Bérlés kezdete
            $table->date('berles_vege')->nullable(); // Bérlés vége
            $table->timestamps(); // created_at és updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('berlesek');
    }
}
