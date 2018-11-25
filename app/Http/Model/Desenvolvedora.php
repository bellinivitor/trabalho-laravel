<?php

namespace app\Http\Model;

use Illuminate\Database\Eloquent\Model;


class Desenvolvedora extends Model
{
    protected $table = 'desenvolvedoras';
    protected $fillable = array('nome');
    public $timestamps = false;

    public function getAll()
    {
        return self::all();
    }

    public function localiza($id)
    {
        $desenvolvedora = self::find($id);
        if (is_null($desenvolvedora)) {
            return false;
        }
        return $desenvolvedora;
    }
}
