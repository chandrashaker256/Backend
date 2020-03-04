<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Films_Planet
 *
 * @property int $film_id
 * @property int $planet_id
 * 
 * @package App\Models
 */

class Films_Planet extends Model
{
    protected $casts = [
        'film_id' => 'int',
        'planet_id' => 'int',
    ];

    protected $fillable = [
        'film_id',
        'planet_id',
    ];
}
