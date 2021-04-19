<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *    title="ApiTutorial",
 *    version="3.3.6"
 * )
 */

 /**
  * @OA\Server(
  *    url=L5_SWAGGER_CONST_TEST_HOST
  *  )

  * @OA\Server(
  *    url=L5_SWAGGER_CONST_REAL_HOST
  *  )
  */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
