<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($message)
    {
        return response()->json(['success' => true, 'message' => $message]);
    }

    public function error($message)
    {
        return response()->json(['success' => false, 'message' => $message]);
    }

    public function moveFile($file, $path)
    {
        $uploadedFile=$file->store($path);
       return  trim(str_replace($path,'',$uploadedFile),'/');
    }
}
