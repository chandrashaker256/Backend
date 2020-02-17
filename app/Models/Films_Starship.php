<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Films_Starship
 *
 * @property int $film_id
 * @property int $starship_id
 * 
 * @package App\Models
 */

class Films_Starship extends Model
{
    protected $casts = [
        'film_id' => 'int',
        'starship_id' => 'int',
    ];

    protected $fillable = [
        'film_id',
        'starship_id',
    ];

}
