<div @class(['w-14 h-14 rounded-xl shadow-xl font-medium place-content-center text-center border border-solid cursor-pointer',
    'bg-red-300 border-red-500' => $es_libre,
    'bg-blue-300 border-blue-500' => $marcado,
    'bg-zinc-100 border-gray-300' => (!$es_libre && !$marcado),
    ]) {{ $attributes }}>{{ $numero }}</div>
