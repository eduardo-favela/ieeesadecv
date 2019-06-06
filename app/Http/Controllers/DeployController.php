<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Process\Process;

class DeployController extends Controller
{
    public function deploy(Request $request)
    {
//        $githubPayload = $request->getContent();
//        $githubHash = $request->header('X-Hub-Signature');
//        $localToken = config('app.deploy_secret');
//        $localHash = 'sha1='.hash_hmac('sha1', $githubPayload, $localToken, false);
//        if (hash_equals($githubHash, $localHash)) {
//            $process = new Process(['./'.'ieeesadecv/public/deploy.sh'],null,[null],[null],null);
//            $process->run(function ($type, $buffer) {
//                dd($buffer);
//            });
//        }
        $output=array();
        exec('cd /home3/ieeesade/ieeesadecv&&git pull 2>&1',$output);
        var_dump($output);
    }
}
