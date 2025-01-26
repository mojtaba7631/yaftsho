<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductPhysicalVariant
 *
 * @property int $id
 * @property int $product_id
 * @property int $inventory
 * @property int $price
 * @property int $weight
 * @property int $post_price
 * @property string|null $sku
 * @property string|null $dimensions
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Product $product
 * @property Collection|ProductReturn[] $product_returns
 * @property Collection|ProductVariantRelAttribute[] $product_variant_rel_attributes
 *
 * @package App\Models
 */
class ProductPhysicalVariant extends Model
{
	protected $table = 'product_physical_variant';

	protected $casts = [
		'product_id' => 'int',
		'inventory' => 'int',
		'price' => 'int',
		'weight' => 'int',
		'post_price' => 'int'
	];

	protected $fillable = [
		'product_id',
		'inventory',
		'price',
		'weight',
		'post_price',
		'sku',
		'dimensions'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function product_returns(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
		return $this->hasMany(ProductReturn::class, 'product_variant_id');
	}

	public function product_variant_rel_attributes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
		return $this->hasMany(ProductVariantRelAttribute::class, 'product_variant_id');
	}
}
