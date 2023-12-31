<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerCampaignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('banner_campaign')) {
            Schema::create('banner_campaign', function (Blueprint $table) {
                $table->integer('id')->autoIncrement();
                $table->integer('campaign_id');
                $table->string('url');
                $table->timestamps();

                $table->foreign('campaign_id')->references('id')->on('campaigns');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner_campaign');
    }
}
