<div class="flex flex-col items-center relative w-80 h-96 rounded-2xl overflow-hidden shadow-lg bg-white border border-solid border-gray-300">
    <section class="flex relative w-full h-1/5 overflow-hidden px-2 pt-2 justify-between">
        <div class="w-14 h-14 bg-gray-400 rounded-xl shadow-lg text-xl font-medium place-content-center text-center">B</div>
        <div class="w-14 h-14 bg-gray-400 rounded-xl shadow-lg text-xl font-medium place-content-center text-center">I</div>
        <div class="w-14 h-14 bg-gray-400 rounded-xl shadow-lg text-xl font-medium place-content-center text-center">N</div>
        <div class="w-14 h-14 bg-gray-400 rounded-xl shadow-lg text-xl font-medium place-content-center text-center">G</div>
        <div class="w-14 h-14 bg-gray-400 rounded-xl shadow-lg text-xl font-medium place-content-center text-center">O</div>
    </section>
    <span class="absolute text-sm font-medium z-10 top-14 bg-orange-300 rounded-md px-1">{{ $identificador }}</span>
    <section class="flex relative w-full px-2 justify-between mb-1">
        <x-numero :number="$numeros['b0']" />
        <x-numero :number="$numeros['i0']" />
        <x-numero :number="$numeros['n0']" />
        <x-numero :number="$numeros['g0']" />
        <x-numero :number="$numeros['o0']" />
    </section>
    <section class="flex relative w-full px-2 justify-between mb-1">
        <x-numero :number="$numeros['b1']" />
        <x-numero :number="$numeros['i1']" />
        <x-numero :number="$numeros['n1']" />
        <x-numero :number="$numeros['g1']" />
        <x-numero :number="$numeros['o1']" />
    </section>
    <section class="flex relative w-full px-2 justify-between mb-1">
        <x-numero :number="$numeros['b2']" />
        <x-numero :number="$numeros['i2']" />
        <x-numero :number="$numeros['n2']" />
        <x-numero :number="$numeros['g2']" />
        <x-numero :number="$numeros['o2']" />
    </section>
    <section class="flex relative w-full px-2 justify-between mb-1">
        <x-numero :number="$numeros['b3']" />
        <x-numero :number="$numeros['i3']" />
        <x-numero :number="$numeros['n3']" />
        <x-numero :number="$numeros['g3']" />
        <x-numero :number="$numeros['o3']" />
    </section>
    <section class="flex relative w-full px-2 justify-between mb-1">
        <x-numero :number="$numeros['b4']" />
        <x-numero :number="$numeros['i4']" />
        <x-numero :number="$numeros['n4']" />
        <x-numero :number="$numeros['g4']" />
        <x-numero :number="$numeros['o4']" />
    </section>
</div>
