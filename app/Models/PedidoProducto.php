<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidoProducto
 * 
 * @property Carbon $fecha_pedido
 * @property float $total
 * @property int $pedido_ProductoID
 * @property int $detalle_PedidoID
 * 
 * @property DetallePedido $detalle_pedido
 * @property Collection|Notificacion[] $notificacions
 *
 * @package App\Models
 */
class PedidoProducto extends Model
{
	protected $table = 'pedido_producto';
	protected $primaryKey = 'pedido_ProductoID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha_pedido' => 'datetime',
		'total' => 'float',
		'pedido_ProductoID' => 'int',
		'detalle_PedidoID' => 'int'
	];

	protected $fillable = [
		'fecha_pedido',
		'total',
		'detalle_PedidoID'
	];

	public function detalle_pedido()
	{
		return $this->belongsTo(DetallePedido::class, 'detalle_PedidoID');
	}

	public function notificacions()
	{
		return $this->hasMany(Notificacion::class, 'pedido_ProductoID');
	}
}
