<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property string $nombre
 * @property Carbon $fecha_nac
 * @property int $ci
 * @property int $clienteID
 * 
 * @property Collection|Factura[] $facturas
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'cliente';
	protected $primaryKey = 'clienteID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fecha_nac' => 'datetime',
		'ci' => 'int',
		'clienteID' => 'int'
	];

	protected $fillable = [
		'nombre',
		'fecha_nac',
		'ci'
	];

	public function facturas()
	{
		return $this->hasMany(Factura::class, 'clienteID');
	}
}
