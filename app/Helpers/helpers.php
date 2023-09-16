<?php

use Illuminate\Support\Facades\Storage;



if (!function_exists('responseWithSuccess')) {
    function responseWithSuccess($message,$data=null,$meta=null)
    {
        $status = \Illuminate\Http\Response::HTTP_OK;
        $success['status'] = true;
        $success['message'] = $message;
        if ($data != null) $success['data'] = $data;
        if ($meta != null) $success['meta'] = $meta;
        return response()->json($success, $status);
    }
}

if (!function_exists('responseWithFailure')) {
    function responseWithFailure( $message,$status=null)
    {
        $fail['status'] = false;
        $status = !empty($status)? $status : 500;
        if ($message != null) $fail['errors'] = $message;
        return response()->json($fail, $status);
    }
}
