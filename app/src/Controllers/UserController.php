<?php

namespace App\Controllers;

use App\Models\Users;

class UserController extends Controller {

    public function index($request, $response, $args){
        
    	$result = Users::get();

    	if(!empty($result)){

	    	$data['status'] = true;
	    	$data['message'] = "Data found!";
	    	$data['data'] = $result;
    	
    	} else {

    		$data['status'] = true;
	    	$data['message'] = "Data empty!";
	    	$data['data'] = "";

    	}

    	return $response->withStatus(200)
        ->withHeader("Content-Type", "application/json")
        ->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));

    }

}