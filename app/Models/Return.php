<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Return
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
 * 
 * @property ProductPhysicalVariant $product_physical_variant
 *
 * @package App\Models
 */
class Return extends Model
{
	protected $table = 'returns';

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

	public function product_physical_variant()
	{
		return $this->belongsTo(ProductPhysicalVariant::class, 'product_variant_id');
	}
}
