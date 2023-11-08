<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;


/**
 * Class Usuario
 * 
 * @property string $nombre
 * @property string $email
 * @property string $password
 * @property Carbon $fecha_nac
 * @property int $ci
 * @property int $usuarioID
 * 
 * @property Collection|Factura[] $facturas
 * @property Collection|Notificacion[] $notificacions
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table = 'users';
	protected $primaryKey = 'id';
	public $incrementing = true;
	public $timestamps = false;


    protected $fillable = [
        'name',
        'email',
        'password',
        'fecha_nac',
		'ci'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'fecha_nac' => 'datetime',
		'ci' => 'int',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function facturas()
	{
		return $this->hasMany(Factura::class, 'id');
	}

	public function notificacions()
	{
		return $this->hasMany(Notificacion::class, 'id');
	}
}
