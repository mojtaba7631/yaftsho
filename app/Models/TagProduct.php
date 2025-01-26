<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TagProduct
 * 
 * @property int $id
 * @property int $tag_id
 * @property int $product_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 * @property Tag $tag
 *
 * @package App\Models
 */
class TagProduct extends Model
{
	protected $table = 'tag_product';

	protected $casts = [
		'tag_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'tag_id',
		'product_id'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function tag()
	{
		return $this->belongsTo(Tag::class);
	}
}
