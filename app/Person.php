<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'nickname',
        'nif',
        'email',
        'zip_code',
        'address',
        'phone'
    ];
    /**
     * The user of the people.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }
}