<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    return $this->belongsTo(TipoProducto::class, 'tipo_producto_id', 'id_Tpc');
}

}
