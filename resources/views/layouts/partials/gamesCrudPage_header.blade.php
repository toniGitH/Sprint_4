
{{-- <header class="flex items-center justify-center w-full fixed top-0 z-50 bg-gray-900 text-white p-4 text-center mt-auto border-b-2 border-white">
    <h1 class="text-white text-2xl sm:text-4xl">K.I.S.S. LEAGUE</h1>
</header> --}}

<header class="flex items-center justify-center w-full fixed top-0 z-50 bg-gray-900 text-white p-4 text-center mt-auto border-b-2 border-white">
    <div class="grid grid-cols-1 flex-col sm:flex-row sm:grid-cols-12 w-full items-center">
        <h2 class="w-full flex justify-center items-center select-none text-lg sm:col-span-2 sm:text-sm md:col-span-2 md:justify-start lg:col-span-3 lg:text-xl">K.I.S.S. LEAGUE</h2>
        <h1 class="w-full select-none text-3xl items-center sm:col-span-3 sm:text-2xl md:col-span-5 md:text-3xl lg:col-span-5 lg:text-4xl">GESTIÓN DE PARTIDOS</h1>
        <div class="w-full flex justify-center items-center gap-x-2 text-white mt-4 sm:mt-0 sm:col-span-7 md:col-span-5 lg:col-span-4 ">
            <a href="{{route('home')}}"><button class="bg-slate-500 hover:bg-white hover:text-black py-1 px-2 rounded">Home</button></a>
            <a href="{{route('games.create')}}"><button class="bg-slate-500 hover:bg-white hover:text-black py-1 px-2 rounded">Crear Partido</button></a>
            <a href="{{route('games.index')}}"><button class="bg-slate-500 hover:bg-white hover:text-black py-1 px-2 rounded">Ver Partidos</button></a>
        </div>
    </div>
</header>