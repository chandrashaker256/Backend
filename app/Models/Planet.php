<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Planet
 *
 * @property int $id
 * @property string $climate 
 * @property \Carbon\Carbon $created
 * @property string $diameter
 * @property \Carbon\Carbon $edited
 * @property string $gravity
 * @property string $name
 * @property string $orbital_period
 * @property string $population
 * @property string $rotation_period
 * @property string $surface_water
 * @property string $terrain
 * 
 * @package App\Models
 */

class Planet extends Model
{
    const CREATED_AT = 'created';
    const UPDATED_AT  = 'edited';
    protected $casts = [
        'id' => 'int',
    ];
    protected $dates = [
        'created',
        'edited',
	];
    protected $fillable = [
        'id',
        'climate',
        'created',
        'diameter',
        'edited',
        'gravity',
        'name',
        'orbital_period',
        'population',
        'rotation_period',
        'surface_water',
        'terrain',
    ];
}
