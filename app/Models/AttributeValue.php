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
 * @property Attribute $attribute
 * @property Collection|ProductVariantRelAttribute[] $product_variant_rel_attributes
 * @package App\Models
 * @property-read int|null $product_variant_rel_attributes_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereValue($value)
 * @mixin \Eloquent
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

	public function attribute()
	{
		return $this->belongsTo(Attribute::class);
	}

	public function product_variant_rel_attributes()
	{
		return $this->hasMany(ProductVariantRelAttribute::class, 'attribute_variant_id');
	}
}
