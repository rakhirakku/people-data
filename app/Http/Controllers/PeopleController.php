<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeopleController extends Controller
{
    public function getData(Request $request)
    {
        if($request->get('nxt') == 1){
            $index = $request->get('index');
            // Read the JSON file and decode its content
            $jsonContent = file_get_contents('json/data.json');
            $data = json_decode($jsonContent, true); 
            $person = $data[$index];
            $j = $index+1;
            $htm = '<div class="container1" width=100%>
            <div class="first-column"><center>'.$j.'</center></div>
              <div class="second-column">
              <div class="row1">Name:' . $person['name'] . '</div>
              <div class="row2">Location: ' . $person['location'] . '</div></div></div>';          
            return $htm;
        }
        return view('personal');
    }
}
