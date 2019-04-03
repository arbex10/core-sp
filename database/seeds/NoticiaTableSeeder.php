<?php

use Illuminate\Database\Seeder;
use App\Noticia;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $noticia = new Noticia();
        $noticia->titulo = "Conexão Seccionais: Veja como foi o primeiro encontro";
        $noticia->slug = "conexao-seccionais-veja-como-foi-o-primeiro-encontro";
        $noticia->img = "/imagens/noticia-01.png";
        $noticia->conteudo = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Pellentesque suscipit nulla ac pulvinar vestibulum. Ut pellentesque nunc est, sit amet feugiat mi dictum ullamcorper. Praesent lobortis, dolor sit amet posuere volutpat, justo arcu gravida magna, volutpat mattis dolor mauris in lacus.</p><p>Cras ultricies pellentesque quam in ultricies. Ut semper neque non vehicula lacinia. Proin porttitor nunc ultricies tortor lacinia consequat. In ornare condimentum vestibulum. Mauris id dui quis leo volutpat interdum.</p><p>Fusce viverra elit mauris, in malesuada libero tincidunt eu. Ut sit amet ultricies libero. Duis in justo lacus.</p><p>Aliquam dolor leo, efficitur non justo eget, consequat tincidunt risus. Sed iaculis sagittis sodales. Phasellus sodales, justo sit amet ornare lobortis, sapien leo facilisis dui, a bibendum lacus tellus et velit. Nulla eu ornare ante.</p>";
        $noticia->idusuario = 1;
        $noticia->save();

        $noticia = new Noticia();
        $noticia->titulo = "Conexão Seccionais: Veja as datas dos próximos encontros";
        $noticia->slug = "conexao-seccionais-veja-as-datas-dos-proximos-encontros";
        $noticia->img = "/imagens/noticia-02.png";
        $noticia->conteudo = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Pellentesque suscipit nulla ac pulvinar vestibulum. Ut pellentesque nunc est, sit amet feugiat mi dictum ullamcorper. Praesent lobortis, dolor sit amet posuere volutpat, justo arcu gravida magna, volutpat mattis dolor mauris in lacus.</p><p>Cras ultricies pellentesque quam in ultricies. Ut semper neque non vehicula lacinia. Proin porttitor nunc ultricies tortor lacinia consequat. In ornare condimentum vestibulum. Mauris id dui quis leo volutpat interdum.</p><p>Fusce viverra elit mauris, in malesuada libero tincidunt eu. Ut sit amet ultricies libero. Duis in justo lacus.</p><p>Aliquam dolor leo, efficitur non justo eget, consequat tincidunt risus. Sed iaculis sagittis sodales. Phasellus sodales, justo sit amet ornare lobortis, sapien leo facilisis dui, a bibendum lacus tellus et velit. Nulla eu ornare ante.</p>";
        $noticia->idusuario = 1;
        $noticia->save();

        $noticia = new Noticia();
        $noticia->titulo = "Conexão Seccionais chega em Presidente Prudente";
        $noticia->slug = "conexao-seccionais-chega-em-presidente-prudente";
        $noticia->img = "/imagens/noticia-03.jpg";
        $noticia->conteudo = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Pellentesque suscipit nulla ac pulvinar vestibulum. Ut pellentesque nunc est, sit amet feugiat mi dictum ullamcorper. Praesent lobortis, dolor sit amet posuere volutpat, justo arcu gravida magna, volutpat mattis dolor mauris in lacus.</p><p>Cras ultricies pellentesque quam in ultricies. Ut semper neque non vehicula lacinia. Proin porttitor nunc ultricies tortor lacinia consequat. In ornare condimentum vestibulum. Mauris id dui quis leo volutpat interdum.</p><p>Fusce viverra elit mauris, in malesuada libero tincidunt eu. Ut sit amet ultricies libero. Duis in justo lacus.</p><p>Aliquam dolor leo, efficitur non justo eget, consequat tincidunt risus. Sed iaculis sagittis sodales. Phasellus sodales, justo sit amet ornare lobortis, sapien leo facilisis dui, a bibendum lacus tellus et velit. Nulla eu ornare ante.</p>";
        $noticia->idusuario = 1;
        $noticia->save();
    }
}