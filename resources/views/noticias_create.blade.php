@extends('layouts.app')

@section('conteudo')
    {{-- apresentação do formulário --}}
    <form action="/salvar_noticia" method="POST">
        {{-- crsf --}}
        {{ csrf_field() }}

        <h3> Nova Notícia </h3>

        <div class="form-group pt-5">
            <label class="text-primary" for=""> Título: </label>
            <input class="form-control" type="text" id="titulo" name="text_titulo" 
            autocomplete="off" placeholder="Título" required>
        </div>

        <div class="form-group pt-2 ">
            <label class="text-primary" for=""> Texto: </label>
            <textarea class="form-control" name="text_texto" id="texto" 
            placeholder="Texto da notícia" required cols="30"  rows="10"></textarea>
        </div>

        <div class="form-group pt-2 ">
            <label class="text-primary" for=""> Autor: </label>
            <input class="form-control" type="text" id="autor" name="text_autor" 
            autocomplete="off" placeholder="Autor" required>
        </div>

        {{-- visibilidade da notícia --}}
        <div class="form-group text-center pt-3">
            <input type="checkbox" name="checkbox_visivel" checked> Notícia Visível
        </div>

        {{-- submit --}}
        <div class="text-center pt-5 pb-5">
            <button class="btn btn-primary " role="submit"> Comfirmar </button>
        </div>
    </form>

@endsection