<?php

// database/migrations/xxxx_xx_xx_create_profile_details_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('profile_details', function (Blueprint $table) {
            $table->id();
            $table->text('profile_description')->nullable();
            $table->string('availability')->nullable();
            $table->string('languages')->nullable();
            $table->string('personality_traits')->nullable();
            $table->text('qualifications_and_additional_details')->nullable();
            $table->foreignId('user_id2')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile_details');
    }
}
