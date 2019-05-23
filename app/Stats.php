<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Protected fillable på de databas kolumner som jag vill att man bara ska kunna lägga till eller ändra via formuläret. Extra säkerhet.
 */
class Stats extends Model
{
    protected $fillable = [
        'name', 'experience', 'kdRatio', 'winRatio'
    ];
}
