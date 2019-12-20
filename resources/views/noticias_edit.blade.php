@extends('layouts.app')

@section('conteudo')
    {{-- apresentação do formulário --}}
<form action="/atualizar_noticia/{{$noticia->id_noticia}}" method="POST">
    
        {{-- crsf --}}
        {{ csrf_field() }}

        <h3> Editar Notícia </h3>

        <div class="form-group pt-5">
            <label class="text-primary" for=""> Título: </label>
            <input class="form-control" type="text" id="titulo" name="text_titulo" 
        autocomplete="off" value="{{ $noticia->titulo}}" required>
        </div>

        <div class="form-group pt-2 ">
            <label class="text-primary" for=""> Texto: </label>
            <textarea class="form-control" name="text_texto" id="texto" 
            required cols="30"  rows="10"> {{ $noticia->texto}} </textarea>
        </div>

        <div class="form-group pt-2 ">
            <label class="text-primary" for=""> Autor: </label>
            <input class="form-control" type="text" id="autor" name="text_autor" 
            autocomplete="off" value="{{ $noticia->autor }}" required>
        </div>

        {{-- visibilidade da notícia --}}

        @if ($noticia->visivel == 1)
        <div class="form-group text-center pt-3">
            <input type="checkbox" name="checkbox_visivel" checked> Notícia Visível
        </div>
        @else
        <div class="form-group text-center pt-3">
            <input type="checkbox" name="checkbox_visivel"> Notícia Visível
        </div>
        @endif

        

        {{-- submit --}}
        <div class="text-center pt-5 pb-5">
            <button class="btn btn-primary " role="submit"> Atualizar </button>
        </div>
    </form>

@endsection