<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Concurso;

class ConcursoSiteController extends Controller
{
    public function show($id)
    {
        $concurso = Concurso::find($id);
        return response()
            ->view('site.concurso', compact('concurso'))
            ->header('Cache-Control','public,max-age=900');
    }

    public function concursosView()
    {
        $concursos = Concurso::paginate(9);
        return response()
            ->view('site.concursos', compact('concursos'))
            ->header('Cache-Control','public,max-age=900');
    }

    public function buscaConcursos()
    {
        $buscaModalidade = Input::get('modalidade');
        $buscaSituacao = Input::get('situacao');
        $buscaNrProcesso = Input::get('nrprocesso');
        $dia = Input::get('datarealizacao');
        if(isset($dia)) {
            $replace = str_replace('/','-',$dia);
            $dia = new \DateTime($replace);
            $buscaDataRealizacao = $dia->format('Y-m-d');
        } else {
            $buscaDataRealizacao = '';
        }
        if (!empty($buscaModalidade) 
            or !empty($buscaSituacao)
            or !empty($buscaNrProcesso)
            or !empty($buscaDataRealizacao)
        ){
            $busca = true;
        } else {
            $busca = false;
        }
        $concursos = Concurso::where('modalidade','LIKE','%'.$buscaModalidade.'%')
            ->where('situacao','LIKE','%'.$buscaSituacao.'%')
            ->where('nrprocesso','LIKE',$buscaNrProcesso)
            ->where('datarealizacao','LIKE','%'.$buscaDataRealizacao.'%')
            ->paginate(10);
        if (count($concursos) > 0) {
            return view('site.concursos', compact('concursos', 'busca'));
        } else {
            $concursos = null;
            return view('site.concursos', compact('concursos', 'busca'));
        }
    }
}
