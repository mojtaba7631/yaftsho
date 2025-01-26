<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductImage
 * 
 * @property int $id
 * @property int $product_id
 * @property string $url_image
 * @property bool $default_image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class ProductImage extends Model
{
	protected $table = 'product_images';

	protected $casts = [
		'product_id' => 'int',
		'default_image' => 'bool'
	];

	protected $fillable = [
		'product_id',
		'url_image',
		'default_image'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
