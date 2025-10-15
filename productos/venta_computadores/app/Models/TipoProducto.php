<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoProducto
 * 
 * @property int $id_Tpc
 * @property string $nombre_Tpc
 * @property string $descripcion_Tpc
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class TipoProducto extends Model
{
	protected $table = 'tipo_producto';
	protected $primaryKey = 'id_Tpc';
	public $timestamps = false;

	protected $fillable = [
		'nombre_Tpc',
		'descripcion_Tpc'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class);
	}
}
