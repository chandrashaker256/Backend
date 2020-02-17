<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Species_People
 *
 * @property int $species_id
 * @property int $people_id
 * 
 * @package App\Models
 */


class Species_People extends Model
{
    protected $casts = [
        'species_id' => 'int',
        'people_id' => 'int',
    ];

    protected $fillable = [
        'species_id',
        'people_id'
    ];
}
