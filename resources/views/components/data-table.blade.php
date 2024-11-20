<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light text-surface dark:text-white">
            <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                <tr>
                    @if ($verAcciones)
                        <th scope="col" class="px-6 py-4">&nbsp;</th>
                    @endif
                    @foreach ($columnas as $columna)
                        @if ($columna != 'id')
                            <th scope="col" class="px-6 py-4">{{ ucwords($columna) }}</th>
                        @endif
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $registro)
                    <tr class="border-b border-neutral-200 transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-white/10 dark:hover:bg-neutral-600">
                        @if ($verAcciones)
                            <td class="whitespace-nowrap px-6 py-4 font-medium">
                              <button class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown{{$registro['id']}}">Acciones<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                              <!-- Dropdown menu -->
                              <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown{{$registro['id']}}">
                                  <ul class="py-1" aria-labelledby="dropdown">
                                    @if (in_array('ver', $acciones))
                                    <li>
                                      <a href="{{route($modulo.'.detail',$registro['id'])}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Ver</a>
                                    </li>
                                    @endif
                                    @if (in_array('editar', $acciones))
                                    <li>
                                      <a href="{{route($modulo.'.edit',$registro['id'])}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Editar</a>
                                    </li>
                                    @endif
                                    @if (in_array('eliminar', $acciones))
                                    <li>
                                      <a href="{{route($modulo.'.delete',$registro['id'])}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Eliminar</a>
                                    </li>
                                    @endif
                                  </ul>
                              </div>
                                {{-- @if (in_array('ver', $acciones))
                                    <a href="#" class="inline text-center no-underline align-middle cursor-pointer border border-green-500 bg-green-400 px-2 py-1 rounded-md me-1 text-white hover:bg-green-500">Ver</a>
                                @endif
                                @if (in_array('editar', $acciones))
                                    <a href="#" class="inline text-center no-underline align-middle cursor-pointer border border-blue-500 bg-blue-400 px-2 py-1 rounded-md me-1 text-white hover:bg-blue-500">Editar</a>
                                @endif
                                @if (in_array('eliminar', $acciones))
                                    <a href="#" class="inline text-center no-underline align-middle cursor-pointer border border-red-500 bg-red-400 px-2 py-1 rounded-md me-1 text-white hover:bg-red-500">Eliminar</a>
                                @endif --}}
                            </td>
                        @endif
                        @foreach ($columnas as $key_col => $val_col)
                            @if ($key_col != 'id')
                                <td class="whitespace-nowrap px-6 py-4">{{ $registro[$key_col] }}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
          </table>
          <div class="mt-2 w-full text-right">
            <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
              <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <span class="sr-only">Previous</span>
                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                </svg>
              </a>
              <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
              <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-blue-400 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
              <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
              <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
              <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
              <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
              <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
              <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
              <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <span class="sr-only">Next</span>
                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
              </a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
