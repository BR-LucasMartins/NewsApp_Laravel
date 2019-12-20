{{-- pagina inical --}}

@extends('layouts.app')

@section('conteudo')

    @if (count($dados) == 0)

        <p class="alert alert-danger text-center"> Nenhum regitro encontrado!</p>

    @else

    {{-- apresenta mensagem de sucesso --}}
    <?php
        if(isset($_GET['sucesso'])){?>
            <p class="alert alert-success text-center"> Noticia salva com sucesso!</p>
        <?php
        }
    ?>
    
    {{-- --}}
    @php
        $total = 0;
    @endphp


    @foreach ($dados as $noticia)

    {{-- condição para não  mostrar noticias invisiveis --}}

        @if ($noticia->visivel == 1)
            {{-- cabeçalho (titulo - autor - hora(update_at)) --}}
            <div class="row bg-info ">
                {{-- titulo --}}
                <div class="col-md-9 text-light">
                <h2> {{ $noticia->titulo }} </h2>
                </div>
                {{-- autor e hora --}}
                <div class="col-md-3 text-right pt-2">
                <span class="ls-ico-pencil"></span> {{ $noticia->autor }}
                <span class="ls-ico-hours"></span> {{ $noticia->updated_at->diffForHumans() }}
                </div>
            </div>
            {{-- body --}}
            <div class="row pb-3">
                <div class="col-md-12 pt-4">
                    {{ $noticia->texto }}
                </div>
            </div>

            {{-- total noticias --}}
            @php
                $total+=1;
            @endphp

        @endif
        
        <hr>
    @endforeach 

    {{-- total noticias --}}
    
        <div class="row pt-5">
            <div class="col-md-12 text-right">
            <h6> N° total de notícias:  <span class="text-success"> {{ $total }} </span></h6>
            </div>
        </div>

    @endif

@endsection