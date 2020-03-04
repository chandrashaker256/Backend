<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Transport
 *
 * @property int $id
 * @property string $cargo_capacity
 * @property string $consumables
 * @property string $cost_in_credits
 * @property \Carbon\Carbon $created
 * @property string $crew
 * @property \Carbon\Carbon $edited
 * @property string $length
 * @property string $manufacturer
 * @property string $max_atmosphering_speed
 * @property string $model
 * @property string $name
 * @property string $passengers
 *
 * @package App\Models
 */

class Transport extends Model
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
        'cargo_capacity',
        'consumables',
        'cost_in_credits',
        'created',
        'crew',
        'edited',
        'length',
        'manufacturer',
        'max_atmosphering_speed',
        'model',
        'name',
        'passengers'
    ];
}
