<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 * 
 * @property Carbon $fecha_ingreso
 * @property int $cantidad_ingresada
 * @property float $total_costo
 * @property int $inventarioID
 * @property int $detalle_InventarioID
 * 
 * @property DetalleInventario $detalle_inventario
 *
 * @package App\Models
 */
class Inventario extends Model
{
	protected $table = 'inventario';
	protected $primaryKey = 'inventarioID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha_ingreso' => 'datetime',
		'cantidad_ingresada' => 'int',
		'total_costo' => 'float',
		'inventarioID' => 'int',
		'detalle_InventarioID' => 'int'
	];

	protected $fillable = [
		'fecha_ingreso',
		'cantidad_ingresada',
		'total_costo',
		'detalle_InventarioID'
	];

	public function detalle_inventario()
	{
		return $this->belongsTo(DetalleInventario::class, 'detalle_InventarioID');
	}
}
