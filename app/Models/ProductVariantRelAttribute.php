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
 * 
 * @property AttributeValue $attribute_value
 * @property ProductPhysicalVariant $product_physical_variant
 *
 * @package App\Models
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
