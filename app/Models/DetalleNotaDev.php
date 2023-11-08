<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleNotaDev
 * 
 * @property int $cantidad
 * @property string $observacion
 * @property int $detalle_Nota_DevID
 * @property int $productoID
 * 
 * @property Producto $producto
 * @property Collection|NotaDevolucion[] $nota_devolucions
 *
 * @package App\Models
 */
class DetalleNotaDev extends Model
{
	protected $table = 'detalle_nota_dev';
	protected $primaryKey = 'detalle_Nota_DevID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'detalle_Nota_DevID' => 'int',
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

	public function nota_devolucions()
	{
		return $this->hasMany(NotaDevolucion::class, 'detalle_Nota_DevID');
	}
}
