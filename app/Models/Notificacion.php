<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notificacion
 * 
 * @property string $encabezado
 * @property string $mensaje
 * @property Carbon $fecha_hora
 * @property int $notificacionID
 * @property int $pedido_ProductoID
 * @property int $usuarioID
 * 
 * @property PedidoProducto $pedido_producto
 * @property User $usuario
 *
 * @package App\Models
 */
class Notificacion extends Model
{
	protected $table = 'notificacion';
	protected $primaryKey = 'notificacionID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha_hora' => 'datetime',
		'notificacionID' => 'int',
		'pedido_ProductoID' => 'int',
		'usuarioID' => 'bigint'
	];

	protected $fillable = [
		'encabezado',
		'mensaje',
		'fecha_hora',
		'pedido_ProductoID',
		'usuarioID'
	];

	public function pedido_producto()
	{
		return $this->belongsTo(PedidoProducto::class, 'pedido_ProductoID');
	}

	public function usuario()
	{
		return $this->belongsTo(User::class, 'usuarioID');
	}
}
