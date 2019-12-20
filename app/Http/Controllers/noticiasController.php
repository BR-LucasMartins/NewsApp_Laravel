<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{
    public function index()
    {
        //vai buscar todas as noticias

        $dados = noticias::all();
        return view('noticias_index', compact('dados'));
    }

    // ================================================= //
    public function create()
    {
        //pagina com formulario para criar nova noticia
        return view('noticias_create');
    }

    // ================================================= //
    public function store(Request $request)
    {
        //inserir niticia na tabela
        // precisamos instanciar uma classe noticias para guradar no banco de dados
        $noticia = new noticias;

        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor= $request->text_autor;

        //visibilidade da noticia
        if(isset($request->checkbox_visivel)){
            $noticia->visivel = 1;
        }
        else{
            $noticia->visivel = 0;
        }
        
        //salvar a noticia
        $noticia->save();

        //header 
        return redirect('/?sucesso');



    }

    // ================================================= //
    public function show($id)
    {
        //
    }

    // ================================================= //
    public function edit($id)
    {
        //alterar dados 
        $noticia = noticias::find($id);
        return view('noticias_edit', compact('noticia'));
    }

    // ================================================= //
    public function update(Request $request, $id)
    {
        //atualizar os dados da noticia no formulario 
        $noticia = noticias::find($id);

        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;


        //visibilidade da noticia
        if(isset($request->checkbox_visivel)){
            $noticia->visivel = 1;
        }
        else{
            $noticia->visivel = 0;
        }
        
        $noticia->save();

        return redirect('/gerir_noticias');

    }

    // ================================================= //
    public function destroy($id)
    {
        //remover dados da tabela
        noticias::destroy($id);
        return redirect('/gerir_noticias');
    }

    // ================================================= //
    public function apresentarTabelaGestao(){

        //carregar todas as noticias e apresentra em formato de tabela p/ gestão
        $noticias = noticias::all();
        return view('noticias_gestao', compact('noticias'));
    }


    // ================================================= //
    public function colocarVisivel($id){

        //torna o status da noticia p/ visivel
        $noticia = noticias::find($id);
        $noticia->visivel = 1;
        $noticia->save();
        return redirect('/gerir_noticias');
    }


    // ================================================= //
    public function colocarInvisivel($id){

        //torna o status da noticia p/ Invisivel
        $noticia = noticias::find($id);
        $noticia->visivel = 0;
        $noticia->save();
        return redirect('/gerir_noticias');
    }
}
