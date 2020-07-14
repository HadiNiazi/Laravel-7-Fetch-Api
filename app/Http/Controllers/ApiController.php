<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get_api_data()
    {
            $url = "https://api.postalpincode.in/pincode/110002";
            $curl = curl_init();

            // set our url with curl_setopt()
            curl_setopt($curl, CURLOPT_URL, $url);

            // return the transfer as a string, also with setopt()
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            // curl_exec() executes the started curl session
            // $output contains the output string
            $output = curl_exec($curl);

            // close curl resource to free up system resources
            // (deletes the variable made by curl_init)
            curl_close($curl);
            echo $output;


        }
}
