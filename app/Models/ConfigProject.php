<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfigProject
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigProject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigProject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigProject query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigProject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigProject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigProject whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigProject whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ConfigProject whereValue($value)
 * @mixin \Eloquent
 */
class ConfigProject extends Model
{
	protected $table = 'config_project';

	protected $fillable = [
		'key',
		'value'
	];
}
