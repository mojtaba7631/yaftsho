<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductDigitalDownload
 * 
 * @property int $id
 * @property int $digital_product_id
 * @property int $user_id
 * @property Carbon $download_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property DigitalProduct $digital_product
 *
 * @package App\Models
 */
class ProductDigitalDownload extends Model
{
	protected $table = 'product_digital_download';

	protected $casts = [
		'digital_product_id' => 'int',
		'user_id' => 'int',
		'download_date' => 'datetime'
	];

	protected $fillable = [
		'digital_product_id',
		'user_id',
		'download_date'
	];

	public function digital_product()
	{
		return $this->belongsTo(DigitalProduct::class);
	}
}
