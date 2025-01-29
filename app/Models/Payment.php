<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 *
 * @property int $id
 * @property int $order_id
 * @property int $amount
 * @property int $payment_method
 * @property int $payment_status
 * @property int $transaction_code
 * @property int $transaction_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Order $order
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereTransactionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereTransactionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
	protected $table = 'payment';

	protected $casts = [
		'order_id' => 'int',
		'amount' => 'int',
		'payment_method' => 'int',
		'payment_status' => 'int',
		'transaction_code' => 'int',
		'transaction_date' => 'int'
	];

	protected $fillable = [
		'order_id',
		'amount',
		'payment_method',
		'payment_status',
		'transaction_code',
		'transaction_date'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}
}
