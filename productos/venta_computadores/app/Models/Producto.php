<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id_pc
 * @property string $nombre
 * @property string $marca
 * @property string|null $modelo
 * @property string|null $procesador
 * @property string|null $ram
 * @property string|null $almacenamiento
 * @property float $precio
 * @property string|null $imagen
 * @property int $tipo_producto_id
 * 
 * @property TipoProducto $tipo_producto
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'producto';
	protected $primaryKey = 'id_pc';
	public $timestamps = false;

	protected $casts = [
		'precio' => 'float',
		'tipo_producto_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'marca',
		'modelo',
		'procesador',
		'ram',
		'almacenamiento',
		'precio',
		'imagen',
		'tipo_producto_id'
	];

	public function tipo_producto()
	{
		return $this->belongsTo(TipoProducto::class);
	}
}
