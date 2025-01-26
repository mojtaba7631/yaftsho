<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $price
 * @property string $description
 * @property string $meta_description
 * @property string $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|DigitalProduct[] $digital_products
 * @property Collection|DiscountProduct[] $discount_products
 * @property Collection|FavoriteProduct[] $favorite_products
 * @property Collection|Category[] $categories
 * @property Collection|ProductImage[] $product_images
 * @property Collection|ProductPhysicalVariant[] $product_physical_variants
 * @property Collection|ProductReview[] $product_reviews
 * @property Collection|Tag[] $tags
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';

	protected $fillable = [
		'title',
		'slug',
		'price',
		'description',
		'meta_description',
		'type'
	];

	public function digital_products()
	{
		return $this->hasMany(DigitalProduct::class);
	}

	public function discount_products()
	{
		return $this->hasMany(DiscountProduct::class);
	}

	public function favorite_products()
	{
		return $this->hasMany(FavoriteProduct::class);
	}

	public function categories()
	{
		return $this->belongsToMany(Category::class, 'product_category')
					->withPivot('id')
					->withTimestamps();
	}

	public function product_images()
	{
		return $this->hasMany(ProductImage::class);
	}

	public function product_physical_variants()
	{
		return $this->hasMany(ProductPhysicalVariant::class);
	}

	public function product_reviews()
	{
		return $this->hasMany(ProductReview::class);
	}

	public function tags()
	{
		return $this->belongsToMany(Tag::class, 'tag_product')
					->withPivot('id')
					->withTimestamps();
	}
}
