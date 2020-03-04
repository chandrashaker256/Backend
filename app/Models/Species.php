<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Species
 *
 * @property int $id
 * @property string $average_height
 * @property string $average_lifespan
 * @property string $classification
 * @property \Carbon\Carbon $created
 * @property string $designation
 * @property \Carbon\Carbon $edited
 * @property string $eye_colors
 * @property string $hair_colors
 * @property int  $homeworld
 * @property string $language
 * @property string $name
 * @property string $skin_colors
 * 
 * @package App\Models
 */

class Species extends Model
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
        'average_height',
        'average_lifespan',
        'classification',
        'created',
        'designation',
        'edited',
        'eye_colors',
        'hair_colors',
        'homeworld',
        'language',
        'name',
        'skin_colors'
    ];
}
