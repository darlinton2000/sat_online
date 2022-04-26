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
        'cpf',
        'prec_cp',
        'idt_militar',
        'posto_grad_id',
        'subunidade_id',
        'setor_id',
        'om_id',
        'nivel_acesso_id',
        'email',
        'password',
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

    public function posto_grad()
    {
        return $this->belongsTo(PostoGrad::class, 'posto_grad_id');
    }

    public function subunidade()
    {
        return $this->belongsTo(Subunidade::class, 'subunidade_id');
    }

    public function setor()
    {
        return $this->belongsTo(Setor::class, 'setor_id');
    }

    public function om()
    {
        return $this->belongsTo(Om::class, 'om_id');
    }
}
