<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Films_Character
 *
 * @property int $film_id
 * @property int $people_id
 * 
 * @package App\Models
 */
class Films_Character extends Model
{

    protected $casts = [
        'film_id' => 'int',
        'people_id' => 'int',
    ];

    protected $fillable = [
        'film_id',
        'people_id',
    ];

    
}
