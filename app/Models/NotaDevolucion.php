<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NotaDevolucion
 * 
 * @property string $motivo
 * @property Carbon $fecha_dev
 * @property int $nota_devolucionID
 * @property int $detalle_Nota_DevID
 * @property int $facturaID
 * 
 * @property DetalleNotaDev $detalle_nota_dev
 * @property Factura $factura
 *
 * @package App\Models
 */
class NotaDevolucion extends Model
{
	protected $table = 'nota_devolucion';
	protected $primaryKey = 'nota_devolucionID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha_dev' => 'datetime',
		'nota_devolucionID' => 'int',
		'detalle_Nota_DevID' => 'int',
		'facturaID' => 'int'
	];

	protected $fillable = [
		'motivo',
		'fecha_dev',
		'detalle_Nota_DevID',
		'facturaID'
	];

	public function detalle_nota_dev()
	{
		return $this->belongsTo(DetalleNotaDev::class, 'detalle_Nota_DevID');
	}

	public function factura()
	{
		return $this->belongsTo(Factura::class, 'facturaID');
	}
}
