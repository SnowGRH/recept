<?php

use App\Models\receptek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recepteks', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('kategorias');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });
        receptek::create(['nev' => 'Saláta','kat_id'=>4,'kep_eleresi_ut'=>'/c','leiras'=>'egyszeru saláta']);
        receptek::create(['nev' => 'Tojás leves','kat_id'=>2,'kep_eleresi_ut'=>'/D','leiras'=>'egyszeru tojás leves']);
        receptek::create(['nev' => 'Sertéspörkölt','kat_id'=>1,'kep_eleresi_ut'=>'/G','leiras'=>'egyszeru Főétel']);
        receptek::create(['nev' => 'Minyon','kat_id'=>3,'kep_eleresi_ut'=>'/F','leiras'=>'egyszeru minyon']);
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepteks');
    }
};
