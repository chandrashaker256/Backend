<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Films_Species
 *
 * @property int $film_id
 * @property int $species_id
 * 
 * @package App\Models
 */

class Films_Species extends Model
{
    protected $casts = [
        'film_id' => 'int',
        'species_id' => 'int',
    ];

    protected $fillable = [
        'film_id',
        'species_id',
    ];
}
