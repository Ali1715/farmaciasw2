<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NotaBaja
 * 
 * @property Carbon $fecha_dada_baja
 * @property string $motivo
 * @property int $nota_BajaID
 * @property int $detalle_Nota_BajaID
 * 
 * @property DetalleNotaBaja $detalle_nota_baja
 *
 * @package App\Models
 */
class NotaBaja extends Model
{
	protected $table = 'nota_baja';
	protected $primaryKey = 'nota_BajaID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha_dada_baja' => 'datetime',
		'nota_BajaID' => 'int',
		'detalle_Nota_BajaID' => 'int'
	];

	protected $fillable = [
		'fecha_dada_baja',
		'motivo',
		'detalle_Nota_BajaID'
	];

	public function detalle_nota_baja()
	{
		return $this->belongsTo(DetalleNotaBaja::class, 'detalle_Nota_BajaID');
	}
}
