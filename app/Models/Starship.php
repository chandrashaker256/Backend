<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Starship
 *
 * @property int $id
 * @property string $MGLT
 * @property string $hyperdrive_rating
 * @property string $starship_class
 *
 * @package App\Models
 */


class Starship extends Model
{
    protected $casts = [
        'id' => 'int',
    ];

    protected $fillable = [
        'id',
        'MGLT',
        'hyperdrive_rating',
        'starship_class',
    ];
}
