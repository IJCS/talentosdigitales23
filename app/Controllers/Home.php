<?php

namespace App\Controllers;

use App\Models\usuarioM;

class Home extends BaseController
{
    public function index(): string
    {
      return view('usuario');
    }

    public function test(): string
    {
      $data = [
        'user'=> [
          'usuario'=> 'Prueba',
          'creacion'=> '0000-00-00 00:00:00',
        ]
      ];
      return view('resultado',$data);
    }
}
