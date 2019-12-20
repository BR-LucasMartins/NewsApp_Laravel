<div class="row">

    {{-- titulo --}}
    <div class="col-md-6 ">
    <strong> {{$noticia->titulo}}</strong>
    </div>


    {{-- autor --}}
    <div class="col-md-3 text-right">
        <strong> {{$noticia->autor}}</strong>
    </div>

    {{-- icones --}}
    <div class="col-md-3 text-right">

        {{-- visibilidade --}}

        @if ($noticia->visivel == 1)
    <a href="colocar_invisivel/{{$noticia->id_noticia}}"> <span class="ls-ico-eye pl-2"></span></a>
        @else
        <a href="colocar_visivel/{{$noticia->id_noticia}}"> <span class="ls-ico-eye-blocked pl-2"></span></a>
        @endif


        

        {{-- editar --}}
    <a href="/editar_noticia/{{$noticia->id_noticia}}"> <span class="ls-ico-pencil pl-2"></span></a>

        {{-- excluir --}}
        <a href="remover_noticia/{{$noticia->id_noticia}}"> <span class="ls-ico-remove pl-2"></span></a>
        
    </div>

</div>