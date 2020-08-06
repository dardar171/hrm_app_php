<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class AuthController extends Controller
{
    public function login(Request $request){
        $http=new Client;

        $response=$http->post('http://localhost:8000/oauth/token',[
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'BaO1hNj3uPexVbbmWcz8nDmfK73O6FSsYz2FcUKa',
                'username' => $request->username,
                'password' => $request->password,
                'scope'=>'',
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }
}
