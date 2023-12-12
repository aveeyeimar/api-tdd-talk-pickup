<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblrecogidas', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->bigInteger('codigo_ave');
            $table->bigInteger('idempresa')->comment('Id de la empresa de aveonline');
            $table->bigInteger('idagente')->comment('Id del agente que solicita la recogida');
            $table->string('nombre_agente');
            $table->string('identificacion_agente')->nullable();
            $table->string('ciudad_agente')->nullable();
            $table->string('direccion_agente')->nullable();
            $table->string('nombre_contacto');
            $table->string('telefono_contactos_agente');
            $table->string('comentarios_agente')->nullable();
            $table->string('email_contacto')->nullable();
            $table->string('responsable_servicio');
            $table->bigInteger('id_transportador');
            $table->string('fecha_recogida');
            $table->time('fecha_hora_recogida');
            $table->string('imprimir_guias');
            $table->string('tipo_envio');
            $table->integer('unidades')->default(1);
            $table->integer('alto')->default(0);
            $table->integer('largo')->default(0);
            $table->integer('ancho')->default(0);
            $table->integer('peso')->nullable()->comment('Peso en gramos');
            $table->integer('valor_declarado')->nullable()->comment('Valor declarado en pesos');
            $table->string('observaciones_adicionales');
            $table->string('dice_contener')->nullable()->comment('Descripción de lo que contiene el paquete');
            $table->string('nombre_destinatario')->nullable()->comment('Nombre del destinatario');
            $table->string('identificacion_destinatario')->nullable()->comment('Cédula o NIT del destinatario');
            $table->string('ciudad_destinatario')->nullable()->comment('Ciudad del destinatario');
            $table->string('direccion_destinatario')->nullable()->comment('Direccion de google maps del destinatario');
            $table->string('telefono_destinatario')->nullable()->comment('Teléfono fijo o celular');
            $table->string('idrecogida')->nullable()->comment('Id de la recogida en el operador ');
            $table->bigInteger('numero_guia')->nullable()->comment('Numero de la guia asignada');
            $table->string('estado_coordinadora')->nullable();
            $table->integer('idestado')->nullable()->comment('Id de estado');
            $table->string('documento_adjunto')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblrecogidas');
    }
};
