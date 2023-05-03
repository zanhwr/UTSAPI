<?php

namespace App\Bantuan;

class needApi 
{
    protected static $response = [
        'Addtional Info' => [
            'code' => null,
            'message' => null,
        ],
        
        'data' => null,
    ];

    public static function createApi($code=null, $message=null, $data=null){
        self::$response['Addtional Info']['code'] = $code;
        self::$response['Addtional Info']['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['Addtional Info']['code']);
    }
}