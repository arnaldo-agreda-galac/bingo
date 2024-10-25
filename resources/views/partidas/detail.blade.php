<x-layout4>
    <div class="mb-2">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="min-w-0 flex-1">
              <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">{{ $partida->nombre }}</h2>
              <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                <div class="mt-2 flex items-center text-sm text-gray-500">
                  <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M6 3.75A2.75 2.75 0 0 1 8.75 1h2.5A2.75 2.75 0 0 1 14 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 0 1 6 4.193V3.75Zm6.5 0v.325a41.622 41.622 0 0 0-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25ZM10 10a1 1 0 0 0-1 1v.01a1 1 0 0 0 1 1h.01a1 1 0 0 0 1-1V11a1 1 0 0 0-1-1H10Z" clip-rule="evenodd" />
                    <path d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 0 1-9.274 0C3.985 17.585 3 16.402 3 15.055Z" />
                  </svg>
                  {{ $partida->estado }}
                </div>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                  <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path d="M10.75 10.818v2.614A3.13 3.13 0 0 0 11.888 13c.482-.315.612-.648.612-.875 0-.227-.13-.56-.612-.875a3.13 3.13 0 0 0-1.138-.432ZM8.33 8.62c.053.055.115.11.184.164.208.16.46.284.736.363V6.603a2.45 2.45 0 0 0-.35.13c-.14.065-.27.143-.386.233-.377.292-.514.627-.514.909 0 .184.058.39.202.592.037.051.08.102.128.152Z" />
                    <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-6a.75.75 0 0 1 .75.75v.316a3.78 3.78 0 0 1 1.653.713c.426.33.744.74.925 1.2a.75.75 0 0 1-1.395.55 1.35 1.35 0 0 0-.447-.563 2.187 2.187 0 0 0-.736-.363V9.3c.698.093 1.383.32 1.959.696.787.514 1.29 1.27 1.29 2.13 0 .86-.504 1.616-1.29 2.13-.576.377-1.261.603-1.96.696v.299a.75.75 0 1 1-1.5 0v-.3c-.697-.092-1.382-.318-1.958-.695-.482-.315-.857-.717-1.078-1.188a.75.75 0 1 1 1.359-.636c.08.173.245.376.54.569.313.205.706.353 1.138.432v-2.748a3.782 3.782 0 0 1-1.653-.713C6.9 9.433 6.5 8.681 6.5 7.875c0-.805.4-1.558 1.097-2.096a3.78 3.78 0 0 1 1.653-.713V4.75A.75.75 0 0 1 10 4Z" clip-rule="evenodd" />
                  </svg>
                  Costo $: {{ $partida->costo_carton }}
                </div>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                  <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" />
                  </svg>
                  Fecha: {{ $partida->fecha }}
                </div>
              </div>
            </div>
            <div class="mt-5 flex lg:ml-4 lg:mt-0">
              <span class="hidden sm:block">
                <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                  <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path d="m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z" />
                  </svg>
                  Editar
                </button>
              </span>
            </div>
          </div>
        <hr class="border border-solid border-gray-100 w-full">
    </div>
    <div class="flex flex-col items-center relative w-full md:w-8/12 h-auto rounded-2xl overflow-hidden shadow-lg bg-white border border-solid border-gray-300 pb-2">
        <section class="flex relative w-full h-1/5 overflow-hidden px-2 pt-2 justify-between">
        @for ($i=1 ; $i<=100 ; $i++)
            <x-carton-accion :numero="$i" />
            @if ($i % 10 == 0 && $i != 100)
                </section>
                <section class="flex relative w-full h-1/5 overflow-hidden px-2 pt-2 justify-between">
            @endif
            @endfor
        </section>
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
    <button>Abrir</button>
    <div id="modal-container" class="fixed inset-0 z-20">
        <div class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="modal-bg-container fixed inset-0 bg-gray-700 bg-opacity-75">
            </div>
            <div class="modal-space-container"></div>
            <div class="modal-container inline-block align-bottom bg-white rounded-md text-left overflow-hidden shadow-xl transition-all sm:my-8 sm:align-middle sm:max-w-lg w-full">
                <div class="modal-wrapper bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb:4">
                    <div class="modal-wrapper-flex sm:flex sm:items-start">
                        <div class="modal-icon mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"></div>
                        <div class="modal-content text-center mt-3 sm:mt-0 sm:ml-4 sm:text-left"></div>
                    </div>
                </div>
                <div class="modal-actions">
                    <button>Cancelar</button>
                    <button>Enviar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setBall(numero, accion){
            $("#numero").val(numero);
            $("#accion").val(accion);
            var formulario = $("#set_resultados");
            formulario.submit();
        }
    </script>
</x-layout4>
{{-- https://www.youtube.com/watch?v=Y7y2DIeKqlI --}}
