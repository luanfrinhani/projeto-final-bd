<?php

namespace App\Http\Controllers;

use App\Models\Alergia;
use App\Models\Distrito;
use App\Models\Escolaridade;
use App\Models\EstadoCivil;
use App\Models\Pessoa;
use App\Models\PlanoSaude;
use App\Models\racaCorEtinia;
use App\Models\Religiao;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function cadastroPessoa()
    {
        $estado_civil = EstadoCivil::all();
        $escolaridade = Escolaridade::all();
        $religiao = Religiao::all();
        $plano_saude = PlanoSaude::all();
        $alergia = Alergia::all();
        $distrito = Distrito::all();
        $raca_cor_etinia = racaCorEtinia::all();

        return view('pessoa',compact('estado_civil','escolaridade','religiao','plano_saude','alergia','distrito','raca_cor_etinia'));
    }

    public function cadastroCaracteristica()
    {
        return view('pessoa_caracteristica');
    }

    public function cadastrarEstadoCivil(Http\Request $request)
    {
        $data = $request->all();
        $estadocivil = EstadoCivil::create($data);

        return redirect(route('admin'));

    }
    public function cadastrarEscolaridade(Http\Request $request)
    {
        $data = $request->all();
        $escolaridade = Escolaridade::create($data);

        return redirect(route('admin'));

    }
    public function cadastrarReligiao(Http\Request $request)
    {
        $data = $request->all();
        $religiao = Religiao::create($data);

        return redirect(route('admin'));

    }
    public function cadastrarRacaCorEtnia(Http\Request $request)
    {
        $data = $request->all();

        $racacoretnia = racaCorEtinia::create($data);

        return redirect(route('admin'));

    }
    public function cadastrarDistrito(Http\Request $request)
    {
        $data = $request->all();
        $distrito = Distrito::create($data);

        return redirect(route('admin'));

    }

    public function cadastrarAlergia(Http\Request $request)
    {
        $data = $request->all();
        $alergia = Alergia::create($data);

        return redirect(route('admin'));

    }

    public function cadastrarPlanoSaude(Http\Request $request)
    {
        $data = $request->all();
        $plano_saude = PlanoSaude::create($data);

        return redirect(route('admin'));

    }

    public function cadastrarPessoa(Http\Request $request)
    {
        $data = $request->all();

        $pessoa = Pessoa::create($data);

        return redirect((route('cadastro')));
    }

    public function buscar()
    {
        return view('buscar');
    }


}
