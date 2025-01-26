<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $id
 * @property string $name
 * @property string $key
 * @property int $state_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property State $state
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'city';

	protected $casts = [
		'state_id' => 'int'
	];

	protected $fillable = [
		'name',
		'key',
		'state_id'
	];

	public function state()
	{
		return $this->belongsTo(State::class);
	}
}
