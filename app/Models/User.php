<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password', 'cita_cita', 'status_akun', 'kelas', 'agama', 'alamat', 'kelurahan', 'kontak', 'moto_hidup',
        'role_id', 'umur', 'nik', 'nip', 'nis', 'nisn', 'tanggal_lahir', 'tempat_lahir', 'jenis_kelamin', 'status_kawin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userRole()
    {
        return $this->belongsTo(UserRole::class, 'role_id');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
