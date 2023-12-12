<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblrecogida
 * 
 * @property string $id
 * @property int $codigo_ave
 * @property int $idempresa
 * @property int $idagente
 * @property string $nombre_agente
 * @property string|null $identificacion_agente
 * @property string|null $ciudad_agente
 * @property string|null $direccion_agente
 * @property string $nombre_contacto
 * @property string $telefono_contactos_agente
 * @property string|null $comentarios_agente
 * @property string|null $email_contacto
 * @property string $responsable_servicio
 * @property int $id_transportador
 * @property string $fecha_recogida
 * @property Carbon $fecha_hora_recogida
 * @property string $imprimir_guias
 * @property string $tipo_envio
 * @property int $unidades
 * @property int $alto
 * @property int $largo
 * @property int $ancho
 * @property int|null $peso
 * @property int|null $valor_declarado
 * @property string $observaciones_adicionales
 * @property string|null $dice_contener
 * @property string|null $nombre_destinatario
 * @property string|null $identificacion_destinatario
 * @property string|null $ciudad_destinatario
 * @property string|null $direccion_destinatario
 * @property string|null $telefono_destinatario
 * @property string|null $idrecogida
 * @property int|null $numero_guia
 * @property string|null $estado_coordinadora
 * @property int|null $idestado
 * @property string|null $documento_adjunto
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Tblrecogida extends Model
{
	protected $table = 'tblrecogidas';
	public $incrementing = false;

	protected $casts = [
		'codigo_ave' => 'int',
		'idempresa' => 'int',
		'idagente' => 'int',
		'id_transportador' => 'int',
		'fecha_hora_recogida' => 'datetime',
		'unidades' => 'int',
		'alto' => 'int',
		'largo' => 'int',
		'ancho' => 'int',
		'peso' => 'int',
		'valor_declarado' => 'int',
		'numero_guia' => 'int',
		'idestado' => 'int'
	];

	protected $fillable = [
		'codigo_ave',
		'idempresa',
		'idagente',
		'nombre_agente',
		'identificacion_agente',
		'ciudad_agente',
		'direccion_agente',
		'nombre_contacto',
		'telefono_contactos_agente',
		'comentarios_agente',
		'email_contacto',
		'responsable_servicio',
		'id_transportador',
		'fecha_recogida',
		'fecha_hora_recogida',
		'imprimir_guias',
		'tipo_envio',
		'unidades',
		'alto',
		'largo',
		'ancho',
		'peso',
		'valor_declarado',
		'observaciones_adicionales',
		'dice_contener',
		'nombre_destinatario',
		'identificacion_destinatario',
		'ciudad_destinatario',
		'direccion_destinatario',
		'telefono_destinatario',
		'idrecogida',
		'numero_guia',
		'estado_coordinadora',
		'idestado',
		'documento_adjunto'
	];
}
