<?php

namespace App;

use App\Models\User;
use Illuminate\Http\JsonResponse;

class Helper
{
    /**
     * @param null $data
     * @return JsonResponse
     */
    public static function successResponse($data = null): JsonResponse
    {
        return response()->json([
            'code' => CODE_SUCCESS,
            'message' => 'successfully',
            'data' => $data
        ]);
    }

    /**
     * @param $data
     * @param $total
     * @return JsonResponse
     */
    public static function successResponseList($data, $total): JsonResponse
    {
        return response()->json([
            'code' => CODE_SUCCESS,
            'message' => 'successfully',
            'total' => $total,
            'data' => $data
        ]);
    }

    /**
     * @param $token
     * @return JsonResponse
     */
    public static function successResponseWithToken($token): JsonResponse
    {
        $authUser = User::query()->find(auth()->id());
        return response()->json([
            'code' => CODE_SUCCESS,
            'token' => $token,
            'type' => 'bearer',
            'user' => $authUser
        ]);
    }

    /**
     * @param null $message
     * @return JsonResponse
     */
    public static function errorResponse($message = null): JsonResponse
    {
        return response()->json([
            'code' => CODE_ERROR,
            'message' => $message? $message : null,
        ]);
    }

    /**
     * Return response if validation not success
     * @param null $message
     * @return JsonResponse
     */
    public static function errorValidation($message = null): JsonResponse
    {
        return response()->json([
            'code' => CODE_ERROR,
            'message' => $message? $message : null,
        ], 422);
    }
}
