<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Films_Vehicles
 *
 * @property int $film_id
 * @property int $vehicle_id
 * 
 * @package App\Models
 */

class Films_Vehicles extends Model
{
    protected $casts = [
        'film_id' => 'int',
        'vehicle_id' => 'int',
    ];

    protected $fillable = [
        'film_id',
        'vehicle_id',
    ];
}
