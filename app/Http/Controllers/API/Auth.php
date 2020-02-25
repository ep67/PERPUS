<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use \Firebase\JWT\JWT;

class Auth extends Controller
{
  public function login(Request $req)
  {
    $check = User::where('username', $req->username)->first();
    if($check == null) return "tidak ada";
    $key = "example_key";
    $payload = array(
        "iss" => "http://example.org",
        "aud" => "http://example.com",
        "iat" => time(),
        "id" => $check->id
    );
    $jwt = JWT::encode($payload, $key);
    return response()->json(["token" => $jwt]);    
  }
}
