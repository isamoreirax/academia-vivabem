<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadeController extends Controller
{

        public function index(){
            return view('site.modalidade');
        }
        public function musculacao(){
            return view('site.modalidades.musculacao');
        }


}
