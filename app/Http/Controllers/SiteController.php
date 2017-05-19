<?php

namespace App\Http\Controllers;

use App\Config;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    private $configs;
    private $data;

    public function __construct(Config $config)
    {
        $this->configs = $config;

        $configs = $this->configs->all();

        $this->data['titulo'] = $configs->where('parametro', 'titulo')->first();
        $this->data['email'] = $configs->where('parametro', 'email')->first();
        $this->data['fone'] = $configs->where('parametro', 'fone')->first();
        $this->data['menu'] = $configs->where('parametro', 'menu')->all();
        $this->data['quemsomos'] = $configs->where('parametro', 'quemsomos')->first();
        $this->data['nossocompromisso'] = $configs->where('parametro', 'nossocompromisso')->first();
        $this->data['clientessatisfeitos'] = $configs->where('parametro', 'clientessatisfeitos')->first();
        $this->data['anosatividade'] = $configs->where('parametro', 'anosatividade')->first();
        $this->data['premios'] = $configs->where('parametro', 'premios')->first();
        $this->data['historiassucesso'] = $configs->where('parametro', 'historiassucesso')->first();
        $this->data['areaatuacao'] = $configs->where('parametro', 'areaatuacao')->all();
        $this->data['depoimento'] = $configs->where('parametro', 'depoimento')->all();
        $this->data['advogado'] = $configs->where('parametro', 'advogado')->all();

    }

    public function index()
    {
        $this->data['pag'] = 'Início';

        return view('site.inicio')->with('data', $this->data);
    }

    public function atuacao()
    {
        $this->data['pag'] = 'Atuação';

        return view('site.atuacao')->with('data', $this->data);
    }

    public function advogados()
    {
        $this->data['pag'] = 'Advogados';

        return view('site.advogados')->with('data', $this->data);
    }

    public function noticias()
    {
        $this->data['pag'] = 'Notícias';

        return view('site.noticias')->with('data', $this->data);
    }


    public function contato()
    {
        $this->data['pag'] = 'Contato';

        return view('site.contato')->with('data', $this->data);
    }

    public function areadocliente()
    {
        $this->data['pag'] = 'Área do cliente';

        return view('site.areadocliente')->with('data', $this->data);
    }
}
