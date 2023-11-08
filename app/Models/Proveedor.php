<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 * 
 * @property string $nombre
 * @property int $telefono
 * @property string $email
 * @property int $proveedorID
 * 
 * @property Collection|DetalleInventario[] $detalle_inventarios
 * @property Collection|DetallePedido[] $detalle_pedidos
 *
 * @package App\Models
 */
class Proveedor extends Model
{
	protected $table = 'proveedor';
	protected $primaryKey = 'proveedorID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'telefono' => 'int',
		'proveedorID' => 'int'
	];

	protected $fillable = [
		'nombre',
		'telefono',
		'email'
	];

	public function detalle_inventarios()
	{
		return $this->hasMany(DetalleInventario::class, 'proveedorID');
	}

	public function detalle_pedidos()
	{
		return $this->hasMany(DetallePedido::class, 'proveedorID');
	}
}
