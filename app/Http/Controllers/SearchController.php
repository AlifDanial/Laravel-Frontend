<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Iluminate\Database\MySqlConnection;
use DB;

class SearchController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Search for crops
     */
    public function searchCrops()
    {
        set_time_limit(1000);
        $context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
        $url = 'http://35.199.47.68/db_api/api.php/records/crop_info?';
        $data = file_get_contents($url, false, $context);
        $crops = json_decode($data, true)['records'];

        $cropName = Input::get ( 'cropName' );
        $search_crop = collect($crops)->where ('name_var_lndrce', $cropName);

        return view ( 'pages.searchCrop' )->with('search_crop', $search_crop);
    }

    /**
     * Search for crops and threads
     */
    public function search()
    {
        $text = Input::get ( 'text' );

        set_time_limit(1000);
        $context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
        $url = 'http://35.199.47.68/db_api/api.php/records/crop_info?';
        $data = file_get_contents($url, false, $context);
        $crops = json_decode($data, true)['records'];
        $search_crop = collect($crops)->where ('name_var_lndrce', $text);

        $search_thread = DB::table('thread')
                            ->selectRaw("*")
                            ->whereRaw("MATCH(threadSubject,threadDescription) AGAINST ('$text' IN NATURAL LANGUAGE MODE)")
                            ->get();

        $search_thread = json_decode(json_encode($search_thread, true));

        return view ( 'pages.search')->with('search_crop', $search_crop)->with('search_thread', $search_thread)->with('text', $text);
    }


}
