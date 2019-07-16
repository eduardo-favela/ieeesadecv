<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Process\Process;

class DeployController extends Controller
{
    public function deploy(Request $request)
    {
        $output=array();
        exec('cd /home3/ieeesade/ieeesadecv&&git pull 2>&1',$output);
        var_dump($output);
    }
}
