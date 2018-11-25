<?php

namespace App\Http\Controllers;
use App\Http\Model\Jogos;
use App\Http\Model\Desenvolvedora;
use Illuminate\Http\Request;



class jogosController extends Controller
{
    protected $jogos = null;

    public function __construct(Jogos $jogos)
    {
        $this->jogos= $jogos;
    }

    public function lista()
    {
        $desenvolvedoras = new Desenvolvedora();

        $jogos = $this->jogos->getAll();
        return view('/jogos')->with('jogos', $jogos)->with('desenvolvedoras', $desenvolvedoras->getAll());
    }

    public function adiciona(Request $request)
    {
        $data = $request->all();
        $add = new Jogos($data);
        $add->save();
        return redirect('/jogos');
    }

    public function remove($id){
        $jogos = Jogos::find($id);
        $jogos->delete();
        return redirect('/jogos');
    }
}
