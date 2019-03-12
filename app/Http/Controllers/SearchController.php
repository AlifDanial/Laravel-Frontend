<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
        $url = 'http://35.199.47.68/db_api/api.php/records/crop_info?';
        $data = file_get_contents($url);
        $crops = json_decode($data, true)['records'];

        $cropName = Input::get ( 'cropName' );
        $result = collect($crops)->where ('name_var_lndrce', $cropName);

        return view ( 'pages.search' )->with('result', $result);
        
    }
 
   

}
