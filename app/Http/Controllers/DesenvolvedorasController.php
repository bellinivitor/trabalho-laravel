<?php

namespace App\Http\Controllers;
use App\Http\Model\Desenvolvedora;
use Illuminate\Http\Request;


class DesenvolvedorasController extends Controller
{

    protected $desenvolvedora = null;

    public function __construct(Desenvolvedora $desenvolvedora)
    {
        $this->desenvolvedora = $desenvolvedora;
    }

    public function lista()
    {
        $desenvolvedoras = $this->desenvolvedora->getAll();
        return view('/desenvolvedora')->with('desenvolvedoras', $desenvolvedoras);
    }

    public function adiciona(Request $request)
    {
        $data = $request->all();
        $add = new Desenvolvedora($data);
        $add->save();
        return redirect('/desenvolvedoras');
    }

    public function remove($id){
        $desenvolvedora = Desenvolvedora::find($id);
        $desenvolvedora->delete();
        return redirect('/desenvolvedoras');
    }
}
