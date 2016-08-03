<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ips extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip1', 'ip2', 'ip3', 'ip4', 'ip5', 'ip6', 'ip7', 'ip8', 'ip9'
    ];

}
