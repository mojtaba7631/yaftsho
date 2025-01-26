<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
 * 
 * @property Collection|Address[] $addresses
 * @property Collection|FavoriteProduct[] $favorite_products
 * @property Collection|ProductReview[] $product_reviews
 * @property Collection|UserPaymentMethod[] $user_payment_methods
 * @property Collection|Role[] $roles
 * @property Collection|Wallet[] $wallets
 *
 * @package App\Models
 */
class User extends Model
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
