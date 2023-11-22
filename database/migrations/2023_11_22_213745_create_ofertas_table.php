<?php

use App\Models\User;
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
        Schema::create("ofertas", function(Blueprint $table){
            $table->id();
            $table->foreignIdFor(User::class, "id_empresa");
            $table->string("carreras_solicitadas");
            $table->integer("cantidad_estudiantes")->default(1);
            $table->string("puesto");
            $table->double("salario")->nullable();
            $table->string("descripcion_proyecto");
            $table->timestamp("fecha_inicio");
            $table->timestamp("fecha_fin");
            $table->timestamp("fecha_max_aplicar");
            $table->foreign("id_empresa")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas');
    }
};
