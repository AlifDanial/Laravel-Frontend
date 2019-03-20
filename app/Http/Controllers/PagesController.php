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
    public function index()
    {
        
        return view ('crops.index');
    }


    /**
     * Display Crops in Alphabetical Order
     */
    public function showCrops()
    {
        //decrease the time to load
        //https://stackoverflow.com/questions/3629504/php-file-get-contents-very-slow-when-using-full-url
        
        $context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
        $url = 'http://35.199.47.68/db_api/api.php/records/crop_info?';
        $data = file_get_contents($url, false, $context);
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
        $context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
        $url = "http://35.199.47.68/db_api/api.php/records/crop_info?filter=cropID,cs,$id";
        $data = file_get_contents($url, false, $context);
        $cropsdata = json_decode($data, true)['records'][0];
        return view ('pages.cropsdata') -> with('cropsdata', $cropsdata);
    }

}
