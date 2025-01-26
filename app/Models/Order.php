<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $user_id
 * @property int $total_amount
 * @property string $order_code
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|OrderDetail[] $order_details
 * @property Collection|Payment[] $payments
 * @property Collection|ProductReturn[] $product_returns
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int',
		'total_amount' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'user_id',
		'total_amount',
		'order_code',
		'status'
	];

	public function order_details()
	{
		return $this->hasMany(OrderDetail::class);
	}

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}

	public function product_returns()
	{
		return $this->hasMany(ProductReturn::class);
	}
}
