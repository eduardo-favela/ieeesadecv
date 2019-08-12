<?php

namespace App\Http\Controllers;

use App\Mail\correos;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;

class ControllerMails extends Controller
{
    function enviarcorreo1(Request $request){


    }

    function enviarcorreo2(Request $request)
    {
        $nombre=$request->get('nombre');
        $email=$request->get('email');
        $telefono=$request->get('telefono');
        $mensaje=$request->get('mensaje');
        $asunto=$request->get('asunto');
        $data=array(
            'mensaje'=>$mensaje,
            'telefono'=>$telefono
        );
        Mail::send('correo',$data,function ($message) use ($asunto, $email,$nombre){
            $message->from($email,$nombre);
            $message->to('arturo99favela@gmail.com')->subject($asunto);
        });
        $confirm='Mensaje enviado correctamente, nos contactaremos con usted lo antes posible';
        $response= array('confirmacion'=>$confirm);
        return $response;

    }}
