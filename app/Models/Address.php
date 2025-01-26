<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $id
 * @property int $user_id
 * @property int $city_id
 * @property string $address
 * @property string $postal_code
 * @property string $longitude
 * @property string $latitude
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'addresses';

	protected $casts = [
		'user_id' => 'int',
		'city_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'city_id',
		'address',
		'postal_code',
		'longitude',
		'latitude'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
