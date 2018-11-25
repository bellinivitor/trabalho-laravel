<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $table = 'comentarios';
    protected $fillable = array('comentario', 'jogo_id');
    public $timestamps = true;

    public function getAll()
    {
        return self::all();
    }

    public function localiza($id)
    {
        $comentario = self::find($id);
        if (is_null($$comentario)) {
            return false;
        }
        return $comentario ;
    }
}
