<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AttributeValue
 *
 * @property int $id
 * @property int $attribute_id
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Attribute $attribute
 * @property Collection|ProductVariantRelAttribute[] $product_variant_rel_attributes
 *
 * @package App\Models
 */
class AttributeValue extends Model
{
	protected $table = 'attribute_value';

	protected $casts = [
		'attribute_id' => 'int'
	];

	protected $fillable = [
		'attribute_id',
		'value'
	];

	public function attribute(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
		return $this->belongsTo(Attribute::class);
	}

	public function product_variant_rel_attributes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
		return $this->hasMany(ProductVariantRelAttribute::class, 'attribute_variant_id');
	}
}
