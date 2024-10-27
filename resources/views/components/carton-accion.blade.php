<div @class(['h-10 w-20 min-w-16 rounded-xl shadow-xl font-medium place-content-center border border-solid cursor-pointer px-2',
    'bg-red-200 border-red-400 text-red-400' => ($estado == 'por_pagar'),
    'bg-green-300 border-green-500' => ($estado == 'pagado'),
    'bg-zinc-100 border-gray-300' => ($estado == 'disponible'),
    ]) {{ $attributes }}>
    <i @class(['fa',
        'fa-circle-minus text-gray-400' => ($estado == 'disponible'),
        'fa-circle-half-stroke' => ($estado == 'por_pagar'),
        'fa-circle-check text-green-500' => ($estado == 'pagado'),
    ])></i> {{ $numero }}
</div>
