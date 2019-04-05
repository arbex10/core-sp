<?php

use Illuminate\Database\Seeder;
use App\Perfil;

class PerfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfil = new Perfil();
        $perfil->nome = "Admin";
        $perfil->descricao = "Possui controle total do sistema";
        $perfil->save();

        $perfil = new Perfil();
        $perfil->nome = "Editor";
        $perfil->descricao = "Pode gerenciar o conteúdo do portal";
        $perfil->save();

        $perfil = new Perfil();
        $perfil->nome = "Jurídico";
        $perfil->descricao = "Pode gerenciar processos administrativos do portal";
        $perfil->save();
    }
}
