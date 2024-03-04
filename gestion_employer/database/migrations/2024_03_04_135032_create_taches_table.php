<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateTachesTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('taches', function (Blueprint $table) {
$table->id();
$table->timestamps();
$table->string('intituléTache');
$table->date('date_tache');
$table->foreignId('Num_Employe')->constrained('employes')->cascadeOnDelete();
//$table->foreignId('Num_Employe')->references('id')->on('employes');
});
}
/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('taches');
}
}