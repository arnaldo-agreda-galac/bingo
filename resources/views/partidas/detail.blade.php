<x-layout4>
    <div class="flex flex-col items-center relative w-96 h-auto rounded-2xl overflow-hidden shadow-lg bg-white border border-solid border-gray-300">
        <div class="text-lg font-medium">Partida: {{ $partida->nombre }}</div>

    </div>
    <div class="flex flex-col items-center relative w-80 h-auto rounded-2xl overflow-hidden shadow-lg bg-white border border-solid border-gray-300">
        <section class="flex relative w-full h-1/5 overflow-hidden px-2 pt-2 justify-between">
            <x-char-header-item>B</x-char-header-item>
            <x-char-header-item>I</x-char-header-item>
            <x-char-header-item>N</x-char-header-item>
            <x-char-header-item>G</x-char-header-item>
            <x-char-header-item>O</x-char-header-item>
        </section>
        <hr class="h-1 w-full mt-1 border-solid border-gray-200">

        @foreach ($numeros as $fila)
        <section class="flex relative w-full px-2 justify-between mb-1">
            @foreach ($fila as $clave => $valor)
            <x-numero :number="$clave" :marcar="$valor" onclick="setBall({{$clave}},{{($valor?1:0)}});" />
            @endforeach
        </section>
        @endforeach

    </div>
    <form id="set_resultados" method="post" action="{{route('resultados.set')}}">
        @csrf
        <input type="hidden" name="partida" id="partida" value="{{$partida->id}}" />
        <input type="hidden" name="numero" id="numero" />
        <input type="hidden" name="accion" id="accion" />
    </form>
    <script>
        function setBall(numero, accion){
            $("#numero").val(numero);
            $("#accion").val(accion);
            var formulario = $("#set_resultados");
            formulario.submit();
        }
    </script>
</x-layout4>
