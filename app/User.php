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

    public function store()  //representação da minha relação
    {
        return $this->hasOne(Store::class);  //(has one) -> método do eloquent

    }
}
        // * No caso do hasOne, o Eloquent usará a chave primária do modelo atual 
        //para encontrar registros na tabela do modelo relacionado que possuem 
        //a chave estrangeira correspondente.

        //Para belongsTo, o Eloquent usará a chave estrangeira no modelo atual 
        // para encontrar o registro na tabela do modelo relacionado cuja chave primária 
        //corresponde ao valor da chave estrangeira.