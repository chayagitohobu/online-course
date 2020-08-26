<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'foto', 'deskripsi_diri', 'nomor-hp',
        'jk', 'tanggal-lahir', 'tempat-lahir',
        'pendidikan-terakhir', 'pekerjaan', 'facebook',
        'twitter', 'instagram', 'youtube',
        'linkedin', 'guru', 'murid',
        'nik', 'npwp', 'kode-promosi',
        'kode-affilasi', 'alamat', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
