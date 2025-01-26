<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetail
 * 
 * @property int $id
 * @property int $order_id
 * @property int $count
 * @property int $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Order $order
 *
 * @package App\Models
 */
class OrderDetail extends Model
{
	protected $table = 'order_detail';

	protected $casts = [
		'order_id' => 'int',
		'count' => 'int',
		'price' => 'int'
	];

	protected $fillable = [
		'order_id',
		'count',
		'price'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}
}
