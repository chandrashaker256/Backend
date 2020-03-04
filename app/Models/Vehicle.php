<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Vehicle
 *
 * @property int $id
 * @property string $vehicle_class
 *
 * @package App\Models
 */
class Vehicle extends Model
{
    protected $casts = [
        'id' => 'int',
    ];

    protected $fillable = [
        'id',
        'vehicle_class',
    ];
}
