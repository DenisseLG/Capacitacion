<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};
use Str;

class Category extends Model
{	
	use SoftDeletes;   //trait signfica que vas a usar metodos que inteeatuan con tu clase 

    protected $table="categories";  //porque va relacionado a la tabla categories
    protected $connection="pgsql";

    protected $fillable=['name','description'];  //fillable cuando extraesobjeto de base de datos te muestra los campos seleccionados... el hidden los campos que selecciones no muestra


    public static function boot(){

    	static::creating(function($model){

    		$model->slug=Str::slug($model->name);
    		$model->created_user=1;
    		$model->update_user=1;
    	});

    	static::updating(function($model){

    		$model->update_user=1;
    	});

    	parent::boot();
    }


    public function  getNameAttribute($value){   //assesort que sirve para formatear los valores infierentes de como vengan desde latabla

    	return Str::upper($value);

    } //assesort metodo get


    public function  setNameAttribute($value){   

    	$this->attributes['name']=Str::upper($value);   //mutator lleva a la base segun el formato definido desde la funcion   
    }

}



