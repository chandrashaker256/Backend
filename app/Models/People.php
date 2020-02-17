<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class People
 *
 * @property int $id
 * @property string $birth_year
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $edited
 * @property string $eye_color
 * @property string $gender
 * @property string $hair_color
 * @property string $height
 * @property int $homeworld
 * @property string  $mass
 * @property string $name
 * @property string $skin_color
 * 
 * @package App\Models
 */

 class People extends Model
{
    const CREATED_AT = 'created';
    const UPDATED_AT  = 'edited';
    protected $casts = [
        'id' => 'int',
        'homeworld' => 'int',
    ];
    protected $dates = [
        'created',
        'edited',
	];
    protected $fillable = [
        'id',
        'birth_year',
        'created',
        'edited',
        'eye_color',
        'gender',
        'hair_color',
        'height',
        'homeworld',
        'mass',
        'name',
        'skin_color',
    ];
}
