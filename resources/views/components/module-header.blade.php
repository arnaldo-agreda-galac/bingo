<div class="mb-2">
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
          <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">{{ $slot }}</h2>
        </div>
        @isset($acciones)
            <div class="mt-5 flex lg:ml-4 lg:mt-0">
                @foreach ($acciones as $accion)
                    <span class="hidden sm:block ml-1">
                        <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                        <i class="fa {{ ($accion == 'Editar') ? 'fa-edit' : (($accion == 'Crear') ? 'fa-plus' : (($accion == 'Buscar') ? 'fa-search' : 'fa-cogs')) }}"></i>
                        &nbsp;{{$accion}}
                        </button>
                    </span>
                @endforeach
            </div>
        @endisset
      </div>
    <hr class="border border-solid border-gray-100 w-full mt-2">
</div>
