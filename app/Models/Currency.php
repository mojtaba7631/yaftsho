<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * 
 * @property int $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Wallet[] $wallets
 *
 * @package App\Models
 */
class Currency extends Model
{
	protected $table = 'currency';

	protected $fillable = [
		'title'
	];

	public function wallets()
	{
		return $this->hasMany(Wallet::class);
	}
}
