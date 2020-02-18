<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Film;
use App\Models\FilmsCharacter;
class QandAController extends Controller
{
    public function __construct() 
    {

    }
    public function getAnswers(Request $request)
    {
        $data = array();
        #Question 1
        $longest_opening_crawl = Film::orderBy(DB::raw('LENGTH(opening_crawl)'), 'ASC')->limit(1)->first();
        $data['longest_opening_crawl_movie'] = $longest_opening_crawl->title;

        #Question 2
        $charecter_count_query = Collect(DB::select("SELECT count(people_id) as max_occurence FROM films_characters 
        group by people_id order by count(people_id) desc LIMIT 1"))->first();
        
        $charecter_count_max = $charecter_count_query->max_occurence;

        $max_occurence_list = DB::select("SELECT people.name FROM films_characters join people on people.id = films_characters.people_id group by films_characters.people_id having count(films_characters.people_id) = $charecter_count_max ");
        $max_occurence_names = array();
        foreach($max_occurence_list as $list)
        {
            array_push($max_occurence_names, $list->name);
        }
        $data['max_occurence_names'] = $max_occurence_names;
        
        #Question 3
        $spieces_count_query = DB::select("SELECT species.classification, count(species.id) as species_count 
                                    FROM films_species 
                                    join species on species.id = films_species.species_id
                                    group by species.classification
                                    order by count(species.id) desc");
        
        $spieces_count_results = array();
        foreach($spieces_count_query as $spieces_count)
        {
            array_push($spieces_count_results, array("spieces_name"=>$spieces_count->classification,"count"=>$spieces_count->species_count));

        }
        $data['spieces_count_results'] = $spieces_count_results;
        return $data;

    }
    
}