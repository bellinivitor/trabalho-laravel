<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Jogos extends Model
{
    protected $table = 'jogos';
    protected $fillable = array('nome', 'desenvolvedora_id');
    public $timestamps = true;

    public function getAll()
    {
        return self::all();
    }

    public function localiza($id)
    {
        $jogos = self::find($id);
        if (is_null($jogos )) {
            return false;
        }
        return $jogos ;
    }
}
