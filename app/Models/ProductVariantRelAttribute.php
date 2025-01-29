<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductVariantRelAttribute
 *
 * @property int $id
 * @property int $product_variant_id
 * @property int $attribute_variant_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property AttributeValue $attribute_value
 * @property ProductPhysicalVariant $product_physical_variant
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductVariantRelAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductVariantRelAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductVariantRelAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductVariantRelAttribute whereAttributeVariantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductVariantRelAttribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductVariantRelAttribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductVariantRelAttribute whereProductVariantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductVariantRelAttribute whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductVariantRelAttribute extends Model
{
	protected $table = 'product_variant_rel_attribute';

	protected $casts = [
		'product_variant_id' => 'int',
		'attribute_variant_id' => 'int'
	];

	protected $fillable = [
		'product_variant_id',
		'attribute_variant_id'
	];

	public function attribute_value()
	{
		return $this->belongsTo(AttributeValue::class, 'attribute_variant_id');
	}

	public function product_physical_variant()
	{
		return $this->belongsTo(ProductPhysicalVariant::class, 'product_variant_id');
	}
}
