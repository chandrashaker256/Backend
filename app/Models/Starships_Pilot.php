<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Starships_Pilot
 *
 * @property int $people_id
 * @property int $starship_id
 *
 * @package App\Models
 */

class Starships_Pilot extends Model
{
    protected $casts = [
        'people_id' => 'int',
        'starship_id' => 'int',
    ];

    protected $fillable = [
        'people_id',
        'starship_id',
    ];
}
