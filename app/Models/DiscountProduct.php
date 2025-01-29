<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiscountProduct
 *
 * @property int $id
 * @property int $product_id
 * @property int $discount_value
 * @property int $discount_type
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property int $count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Product $product
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct whereDiscountValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DiscountProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DiscountProduct extends Model
{
	protected $table = 'discount_product';

	protected $casts = [
		'product_id' => 'int',
		'discount_value' => 'int',
		'discount_type' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'count' => 'int'
	];

	protected $fillable = [
		'product_id',
		'discount_value',
		'discount_type',
		'start_date',
		'end_date',
		'count'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
