<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 * 
 * @property string $nombre
 * @property int $categoriaID
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categoria';
	protected $primaryKey = 'categoriaID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'categoriaID' => 'int'
	];

	protected $fillable = [
		'nombre'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'categoriaID');
	}
}
