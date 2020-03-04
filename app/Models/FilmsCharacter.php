<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model;

/**
 * Class FilmsCharacter
 *
 * @property int $film_id
 * @property int $people_id
 * 
 * @package App\Models
 */
class FilmsCharacter extends Model
{

    protected $casts = [
        'film_id' => 'int',
        'people_id' => 'int',
    ];

    protected $fillable = [
        'film_id',
        'people_id',
    ];

    public function film()
	{
		return $this->belongsTo(\App\Models\Film::class);
	}

	public function people()
	{
		return $this->belongsTo(\App\Models\People::class);
	}
}
