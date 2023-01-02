<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->cascadeOnUpdate()->cascadeOnDelete();  // Party creator
            $table->foreignId('chairman_id')->constrained('users');      // Party chairman
            $table->string('name', 100)->unique();
            $table->string('abbreviation')->unique();            
            $table->string('slogan', 250)->unique();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('parties');
    }
};
