<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Jogos;
use App\Http\Model\Comentarios;

class ComentariosController extends Controller
{
    protected $comentarios = null;

    public function __construct(Comentarios $comentarios)
    {
        $this->comentarios = $comentarios;
    }

    public function lista()
    {
        $jogos = new Jogos();

        $comentarios = $this->comentarios->getAll();
        return view('/comentarios')->with('comentarios', $comentarios)->with('jogos', $jogos->getAll());
    }

    public function adiciona(Request $request)
    {
        $data = $request->all();
        $add = new Comentarios($data);
        $add->save();
        return redirect('/comentarios');
    }

    public function remove($id){
        $comentario = Comentarios::find($id);
        $comentario->delete();
        return redirect('/comentarios');

    }
}
