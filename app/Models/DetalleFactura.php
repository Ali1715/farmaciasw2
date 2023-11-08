<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleFactura
 * 
 * @property int $cantidad
 * @property float $subtotal
 * @property float $precio_u
 * @property int $detalle_FacturaID
 * @property int $productoID
 * 
 * @property Producto $producto
 * @property Collection|Factura[] $facturas
 *
 * @package App\Models
 */
class DetalleFactura extends Model
{
	protected $table = 'detalle_factura';
	protected $primaryKey = 'detalle_FacturaID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'subtotal' => 'float',
		'precio_u' => 'float',
		'detalle_FacturaID' => 'int',
		'productoID' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'subtotal',
		'precio_u',
		'productoID'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productoID');
	}

	public function facturas()
	{
		return $this->hasMany(Factura::class, 'detalle_FacturaID');
	}
}
