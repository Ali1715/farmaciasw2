<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleNotaBaja
 * 
 * @property int $cantidad
 * @property string $observacion
 * @property int $detalle_Nota_BajaID
 * @property int $productoID
 * 
 * @property Producto $producto
 * @property Collection|NotaBaja[] $nota_bajas
 *
 * @package App\Models
 */
class DetalleNotaBaja extends Model
{
	protected $table = 'detalle_nota_baja';
	protected $primaryKey = 'detalle_Nota_BajaID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'detalle_Nota_BajaID' => 'int',
		'productoID' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'observacion',
		'productoID'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productoID');
	}

	public function nota_bajas()
	{
		return $this->hasMany(NotaBaja::class, 'detalle_Nota_BajaID');
	}
}
