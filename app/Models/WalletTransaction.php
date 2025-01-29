<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WalletTransaction
 *
 * @property int $id
 * @property int $wallet_id
 * @property int $amount
 * @property string $description
 * @property int $status
 * @property int $type
 * @property Carbon $transaction_date
 * @property string $reference
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Wallet $wallet
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereTransactionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WalletTransaction whereWalletId($value)
 * @mixin \Eloquent
 */
class WalletTransaction extends Model
{
	protected $table = 'wallet_transaction';

	protected $casts = [
		'wallet_id' => 'int',
		'amount' => 'int',
		'status' => 'int',
		'type' => 'int',
		'transaction_date' => 'datetime'
	];

	protected $fillable = [
		'wallet_id',
		'amount',
		'description',
		'status',
		'type',
		'transaction_date',
		'reference'
	];

	public function wallet()
	{
		return $this->belongsTo(Wallet::class);
	}
}
