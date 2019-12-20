@extends('layouts.app');

@section('conteudo')
  
{{-- verifica se ha registros na base de dados --}}
@if (count($noticias) == 0)
<div class="row">
    <div class="col-md-12 text-center">
        <p class="alert alert-danger text-center"> Nenhum regitro encontrado!</p>
    </div>
</div>
    
@else
    @foreach ($noticias as $noticia)
        @include('inc.linha_noticia')
    @endforeach
@endif
    
@endsection
