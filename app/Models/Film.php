<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class Film
 *
 * @property int $id
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $edited
 * @property string $director
 * @property string $opening_crawl
 * @property string $producer
 * @property int $episode_id
 * @property string $title
 * @property \Carbon\Carbon $release_date
 * 
 * @package App\Models
 */

class Film extends Model
{
    const CREATED_AT = 'created';
    const UPDATED_AT  = 'edited';
    protected $casts = [
        'id' => 'int',
        'episode_id' => 'int',
    ];
    protected $dates = [
        'created',
        'edited',
        'release_date'
	];
    protected $fillable = [
        'id',
        'created',
        'director',
        'edited',
        'episode_id',
        'opening_crawl',
        'producer',
        'release_date',
        'title',
    ];
}
