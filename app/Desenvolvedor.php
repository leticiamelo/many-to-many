<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model
{

    //Como a tabela nao esta seguindo o padrao do laravel, abaixo estamos especificando qual tabela se refere a essa model.
    protected $table = 'desenvolvedores';

    //um desenvolvedor tem muitos projetos e um projeto tem muitos desenvolvedores. 
    //exemplo de como retornar os projetos que cada desenvolvedor esta atuando. 
    //"alocações" seria a tabela intermediaria entre desenvolvedores e projetos.
    //pivot seria as colunas que existem na tabela intermediaria

    function projetos() {
        // return $this->belongsToMany("App\Projeto", "alocacoes");
        return $this->belongsToMany("App\Projeto", "alocacoes")->withPivot('horas_semanais');;
    }
}
