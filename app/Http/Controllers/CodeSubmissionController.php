<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CodeSubmissionController extends Controller
{
    public function submission(Request $requset)
    {
    	$source = $requset->source;
    	//dd($source);
    	$token = "92eab7b6d2839b29ffcd5177ec8ca7fd";

    	$client = new Client([
    	    'headers'=>[
    	        'Content-Type'=>"application/json",
            ]
        ]);

    	//$response = $client->request ('get','https://a856837b.compilers.sphere-engine.com/api/v4/submissions/1/output?access_token=92eab7b6d2839b29ffcd5177ec8ca7fd');

    	$response = $client->request ('post','https://a856837b.compilers.sphere-engine.com/api/v4/submissions?access_token=92eab7b6d2839b29ffcd5177ec8ca7fd',[
    	    'form_params'=>[
    	        'source'=>$source,
                'compilerId'=>11
            ]
        ]);
    	dd ($response);
    }
}
