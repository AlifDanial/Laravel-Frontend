<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Display Crops in Alphabetical Order
     */
    public function showCrops()
    {
        $url = 'http://35.199.47.68/db_api/api.php/records/crop_info?';
        $data = file_get_contents($url);
        $crops = json_decode($data, true)['records'];
        usort($crops, function ($a, $b) {
            return strcasecmp(trim($a['name_var_lndrce']), trim($b['name_var_lndrce']));
        });
        return view ('pages.crops') -> with('crops', $crops);
    }
 
    /**
     * Display Particular Crop Data
     */
    public function showCropsData($id)
    {
        $url = "http://35.199.47.68/db_api/api.php/records/crop_info?filter=cropID,cs,$id";
        $data = file_get_contents($url);
        $cropsdata = json_decode($data, true)['records'][0];
        return view ('pages.cropsdata') -> with('cropsdata', $cropsdata);
    }

}
