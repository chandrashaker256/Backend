<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Film;
class QandAController extends Controller
{
    public function __construct() 
    {

    }
    public function getAnswers(Request $request)
    {
        $data = array();
        $longest_opening_crawl = Film::orderBy(DB::raw('LENGTH(opening_crawl)'), 'ASC')->limit(1)->first();
        $data['longest_opening_crawl_movie'] = $longest_opening_crawl->title;
        return $data;

    }
    
}