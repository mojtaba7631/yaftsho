<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductReturn
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_variant_id
 * @property int $count
 * @property string|null $reason
 * @property int $return_status
 * @property Carbon $return_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Order $order
 * @property ProductPhysicalVariant $product_physical_variant
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn whereProductVariantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn whereReturnDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn whereReturnStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductReturn whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductReturn extends Model
{
	protected $table = 'product_return';

	protected $casts = [
		'order_id' => 'int',
		'product_variant_id' => 'int',
		'count' => 'int',
		'return_status' => 'int',
		'return_date' => 'datetime'
	];

	protected $fillable = [
		'order_id',
		'product_variant_id',
		'count',
		'reason',
		'return_status',
		'return_date'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}

	public function product_physical_variant()
	{
		return $this->belongsTo(ProductPhysicalVariant::class, 'product_variant_id');
	}
}
