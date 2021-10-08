<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersWhoReceivedMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_who_received_mails', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('ref_id')->index();
            $table->boolean('is_approve')->nullable();

            $table->timestamp('open_time')->nullable();

            $table->foreignId('product_id')->nullable()
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

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
        Schema::dropIfExists('users_who_received_mails');
    }
}
