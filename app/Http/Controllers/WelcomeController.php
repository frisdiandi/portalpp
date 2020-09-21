<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Http\Client;
use GuzzleHttp\Message\Response;
use GuzzleHttp\Exception\RequestException;

class WelcomeController extends Controller
{
   public function index(){
   	$client = new Client();
   	$api_response = $client->get('http://berita.padangpanjang.go.id/api/berita');
   	$res = $api_response->getBody()->getContents();
   	$response = array_slice(json_decode(json_decode($res, TRUE),0,3);
   	return view('publik', compact('response'));
   }
}
