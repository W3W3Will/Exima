<?php

use App\Models\setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable;
            $table->string('variant');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Exima',
            'variant' => 'text',
        ]);

        setting::create([
            'key' => '_site_owner',
            'label' => 'Nama Owner',
            'value' => 'William Evan Lomanto',
            'variant' => 'text',
        ]);

        setting::create([
            'key' => '_line',
            'label' => 'Line',
            'value' => 'wwevan',
            'variant' => 'text',
        ]);

        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/ww_aja/',
            'variant' => 'text',
        ]);

        setting::create([
            'key' => '_site_desc',
            'label' => 'Deskripsi',
            'value' => 'Situs untuk sharing pengalaman sehari-hari ku',
            'variant' => 'longtext',
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
