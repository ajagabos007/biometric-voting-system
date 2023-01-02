<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Party;
use App\Models\Post;
use App\Models\Election;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Party::class)->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Post::class)->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Election::class)->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('candidates');
    }
};
