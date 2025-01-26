<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WalletCharge
 * 
 * @property int $id
 * @property int $wallet_id
 * @property int $user_payment_method_id
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property UserPaymentMethod $user_payment_method
 * @property Wallet $wallet
 *
 * @package App\Models
 */
class WalletCharge extends Model
{
	protected $table = 'wallet_charge';

	protected $casts = [
		'wallet_id' => 'int',
		'user_payment_method_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'wallet_id',
		'user_payment_method_id',
		'status'
	];

	public function user_payment_method()
	{
		return $this->belongsTo(UserPaymentMethod::class);
	}

	public function wallet()
	{
		return $this->belongsTo(Wallet::class);
	}
}
