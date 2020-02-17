<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Vehicles_Pilot
 *
 * @property int $vehicle_id
 * @property int $people_id
 *
 * @package App\Models
 */

class Vehicles_Pilot extends Model
{
    protected $casts = [
        'vehicle_id' => 'int',
        'people_id' => 'int',
    ];

    protected $fillable = [
        'vehicle_id',
        'people_id',
    ];
}
