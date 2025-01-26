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
 * 
 * @property Wallet $wallet
 *
 * @package App\Models
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
