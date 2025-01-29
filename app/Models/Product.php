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
 * @property Collection|DigitalProduct[] $digital_products
 * @property Collection|DiscountProduct[] $discount_products
 * @property Collection|FavoriteProduct[] $favorite_products
 * @property Collection|Category[] $categories
 * @property Collection|ProductImage[] $product_images
 * @property Collection|ProductPhysicalVariant[] $product_physical_variants
 * @property Collection|ProductReview[] $product_reviews
 * @property Collection|Tag[] $tags
 * @package App\Models
 * @property-read int|null $categories_count
 * @property-read int|null $digital_products_count
 * @property-read int|null $discount_products_count
 * @property-read int|null $favorite_products_count
 * @property-read int|null $product_images_count
 * @property-read int|null $product_physical_variants_count
 * @property-read int|null $product_reviews_count
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 * @mixin \Eloquent
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
