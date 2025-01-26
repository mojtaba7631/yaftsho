<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Wallet
 * 
 * @property int $id
 * @property int $user_id
 * @property int $currency_id
 * @property int $balance
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Currency $currency
 * @property User $user
 * @property Collection|WalletCharge[] $wallet_charges
 * @property Collection|WalletTransaction[] $wallet_transactions
 *
 * @package App\Models
 */
class Wallet extends Model
{
	protected $table = 'wallet';

	protected $casts = [
		'user_id' => 'int',
		'currency_id' => 'int',
		'balance' => 'int'
	];

	protected $fillable = [
		'user_id',
		'currency_id',
		'balance'
	];

	public function currency()
	{
		return $this->belongsTo(Currency::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function wallet_charges()
	{
		return $this->hasMany(WalletCharge::class);
	}

	public function wallet_transactions()
	{
		return $this->hasMany(WalletTransaction::class);
	}
}
