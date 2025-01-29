<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $family
 * @property string $email
 * @property string $user_name
 * @property string $password
 * @property string $mobile
 * @property string|null $code
 * @property string $national_code
 * @property int $gender
 * @property Carbon $birthday
 * @property int $status
 * @property string|null $image
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection|Address[] $addresses
 * @property Collection|FavoriteProduct[] $favorite_products
 * @property Collection|ProductReview[] $product_reviews
 * @property Collection|UserPaymentMethod[] $user_payment_methods
 * @property Collection|Role[] $roles
 * @property Collection|Wallet[] $wallets
 * @package App\Models
 * @property-read int|null $addresses_count
 * @property-read int|null $favorite_products_count
 * @property-read int|null $product_reviews_count
 * @property-read int|null $roles_count
 * @property-read int|null $user_payment_methods_count
 * @property-read int|null $wallets_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereNationalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUserName($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
	protected $table = 'users';

	protected $casts = [
		'gender' => 'int',
		'birthday' => 'datetime',
		'status' => 'int',
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'family',
		'email',
		'user_name',
		'password',
		'mobile',
		'code',
		'national_code',
		'gender',
		'birthday',
		'status',
		'image',
		'email_verified_at',
		'remember_token'
	];

	public function addresses()
	{
		return $this->hasMany(Address::class);
	}

	public function favorite_products()
	{
		return $this->hasMany(FavoriteProduct::class);
	}

	public function product_reviews()
	{
		return $this->hasMany(ProductReview::class);
	}

	public function user_payment_methods()
	{
		return $this->hasMany(UserPaymentMethod::class);
	}

	public function roles()
	{
		return $this->belongsToMany(Role::class, 'user_role')
					->withPivot('id')
					->withTimestamps();
	}

	public function wallets()
	{
		return $this->hasMany(Wallet::class);
	}
}
