<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WalletWithdrawal
 *
 * @property int $id
 * @property int $wallet_id
 * @property int $user_payment_method_id
 * @property int $amount
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal whereUserPaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletWithdrawal whereWalletId($value)
 * @mixin \Eloquent
 */
class WalletWithdrawal extends Model
{
	protected $table = 'wallet_withdrawals';

	protected $casts = [
		'wallet_id' => 'int',
		'user_payment_method_id' => 'int',
		'amount' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'wallet_id',
		'user_payment_method_id',
		'amount',
		'status'
	];
}
