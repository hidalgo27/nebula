<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('page.index');
    }
    public function web(){
        return view('page.paginas');
    }
    public function community(){
        return view('page.community');
    }
    public function logos(){
        return view('page.logos');
    }
    public function tiendas(){
        return view('page.tienda');
    }
    public function fotoproducto(){
        return view('page.fotoproducto');
    }
    public function publicidad(){
        return view('page.publicidad');
    }
    public function aplicaciones(){
        return view('page.aplicaciones');
    }
    public function turismo(){
        return view('page.turismo');
    }
    public function gastronomico(){
        return view('page.gastronomico');
    }
}

