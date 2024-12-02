<?php

namespace App\Helper;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
  public static function Out($message, $data, $code): JsonResponse
  {
    return  response()->json(['message' => $message, 'data' =>  $data], $code);
  }
}
