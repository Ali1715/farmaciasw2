<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $nit
 * @property Carbon $fecha
 * @property float $total
 * @property float $impuesto
 * @property float $descuento
 * @property float $subtotal
 * @property string $nota
 * @property int $facturaID
 * @property int $clienteID
 * @property int $detalle_FacturaID
 * @property int $usuarioID
 * 
 * @property Cliente $cliente
 * @property DetalleFactura $detalle_factura
 * @property User $usuario
 * @property Collection|NotaDevolucion[] $nota_devolucions
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'factura';
	protected $primaryKey = 'facturaID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nit' => 'int',
		'fecha' => 'datetime',
		'total' => 'float',
		'impuesto' => 'float',
		'descuento' => 'float',
		'subtotal' => 'float',
		'facturaID' => 'int',
		'clienteID' => 'int',
		'detalle_FacturaID' => 'int',
		'usuarioID' => 'bigint'
	];

	protected $fillable = [
		'nit',
		'fecha',
		'total',
		'impuesto',
		'descuento',
		'subtotal',
		'nota',
		'clienteID',
		'detalle_FacturaID',
		'usuarioID'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'clienteID');
	}

	public function detalle_factura()
	{
		return $this->belongsTo(DetalleFactura::class, 'detalle_FacturaID');
	}

	public function usuario()
	{
		return $this->belongsTo(User::class, 'usuarioID');
	}

	public function nota_devolucions()
	{
		return $this->hasMany(NotaDevolucion::class, 'facturaID');
	}
}
