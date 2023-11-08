<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallePedido
 * 
 * @property int $cantidad
 * @property float $precio
 * @property int $detalle_PedidoID
 * @property int $proveedorID
 * @property int $productoID
 * 
 * @property Producto $producto
 * @property Proveedor $proveedor
 * @property Collection|PedidoProducto[] $pedido_productos
 *
 * @package App\Models
 */
class DetallePedido extends Model
{
	protected $table = 'detalle_pedido';
	protected $primaryKey = 'detalle_PedidoID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'precio' => 'float',
		'detalle_PedidoID' => 'int',
		'proveedorID' => 'int',
		'productoID' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'precio',
		'proveedorID',
		'productoID'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productoID');
	}

	public function proveedor()
	{
		return $this->belongsTo(Proveedor::class, 'proveedorID');
	}

	public function pedido_productos()
	{
		return $this->hasMany(PedidoProducto::class, 'detalle_PedidoID');
	}
}
