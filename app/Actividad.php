<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $fillable = [
        'titulo', 'fecha', 'descripcion'
    ];
    public function usuarios()
    {
        return $this->belongsToMany('App\User');
    }

    
    public function scopePalabra($query, $v){

        return $query->where('titulo','like', "%$v%");
    }
    public function scopeFecha($query, $v){
        if(!isset($v)){
            return $query->where('fecha', 'like', '%');
        }
        if($v=='%'){
            return $query->where('fecha', 'like', $v);
        }
        if($v=='activas'){
        return $query->where('fecha','>=', now()->toDateString());
    }
    if($v=='pasadas'){
        return $query->where('fecha','<', now()->toDateString());
    }
}

    
}
