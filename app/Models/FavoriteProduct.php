<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FavoriteProduct
 * 
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property Carbon $favorite_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 * @property User $user
 *
 * @package App\Models
 */
class FavoriteProduct extends Model
{
	protected $table = 'favorite_product';

	protected $casts = [
		'user_id' => 'int',
		'product_id' => 'int',
		'favorite_date' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'product_id',
		'favorite_date'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
