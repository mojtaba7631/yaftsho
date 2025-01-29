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
 * @property Product $product
 * @property Collection|ProductReturn[] $product_returns
 * @property Collection|ProductVariantRelAttribute[] $product_variant_rel_attributes
 * @package App\Models
 * @property-read int|null $product_returns_count
 * @property-read int|null $product_variant_rel_attributes_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant whereDimensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant whereInventory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant wherePostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductPhysicalVariant whereWeight($value)
 * @mixin \Eloquent
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

	public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
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
