<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index()
	{
	    return \Response::json(array(
	        'name' => 'Wisdom Arerosuoghene',
	        'location' => 'Port Harcourt, NG'),
	        200
	    );
	}
}
