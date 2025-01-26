<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DigitalProduct
 * 
 * @property int $id
 * @property int $product_id
 * @property int|null $file_size
 * @property int|null $download_limit
 * @property string|null $file_url
 * @property string|null $licence_code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 * @property Collection|ProductDigitalDownload[] $product_digital_downloads
 *
 * @package App\Models
 */
class DigitalProduct extends Model
{
	protected $table = 'digital_product';

	protected $casts = [
		'product_id' => 'int',
		'file_size' => 'int',
		'download_limit' => 'int'
	];

	protected $fillable = [
		'product_id',
		'file_size',
		'download_limit',
		'file_url',
		'licence_code'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function product_digital_downloads()
	{
		return $this->hasMany(ProductDigitalDownload::class);
	}
}
