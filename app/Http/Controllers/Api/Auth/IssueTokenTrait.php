<?php
/**
 * Created by PhpStorm.
 * User: Boni
 * Date: 12/18/2017
 * Time: 12:53 PM
 */

namespace App\Http\Controllers\Api\Auth;



use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;



trait IssueTokenTrait
{

     public function issueToken(Request $request, $grantType, $scope = "*") {

              $params = [

                        'grant_type' => $grantType,
                        'client_id' => $this->client->id,
                        'client_secret' => $this->client->secret,
                        'username' => $request->username ?: $request->email,
                        'scope' => $scope
                    ];

                    $request->request->add($params);

                    $proxy = Request::create('oauth/token', 'POST');

                    return Route::dispatch($proxy);

        }

}






