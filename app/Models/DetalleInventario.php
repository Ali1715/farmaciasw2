<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleInventario
 * 
 * @property int $cantidad
 * @property int $numero_lote
 * @property float $precio_compra
 * @property Carbon $fecha_venc_lote
 * @property int $detalle_InventarioID
 * @property int $proveedorID
 * @property int $productoID
 * 
 * @property Producto $producto
 * @property Proveedor $proveedor
 * @property Collection|Inventario[] $inventarios
 *
 * @package App\Models
 */
class DetalleInventario extends Model
{
	protected $table = 'detalle_inventario';
	protected $primaryKey = 'detalle_InventarioID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'numero_lote' => 'int',
		'precio_compra' => 'float',
		'fecha_venc_lote' => 'datetime',
		'detalle_InventarioID' => 'int',
		'proveedorID' => 'int',
		'productoID' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'numero_lote',
		'precio_compra',
		'fecha_venc_lote',
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

	public function inventarios()
	{
		return $this->hasMany(Inventario::class, 'detalle_InventarioID');
	}
}
