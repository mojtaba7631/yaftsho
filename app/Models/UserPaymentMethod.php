<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPaymentMethod
 * 
 * @property int $id
 * @property int $user_id
 * @property int $method_type
 * @property int $default
 * @property string $detail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|WalletCharge[] $wallet_charges
 *
 * @package App\Models
 */
class UserPaymentMethod extends Model
{
	protected $table = 'user_payment_method';

	protected $casts = [
		'user_id' => 'int',
		'method_type' => 'int',
		'default' => 'int'
	];

	protected $fillable = [
		'user_id',
		'method_type',
		'default',
		'detail'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function wallet_charges()
	{
		return $this->hasMany(WalletCharge::class);
	}
}
