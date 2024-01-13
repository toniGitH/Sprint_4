
<header class="flex items-center justify-center w-full fixed top-0 z-50 bg-gray-900 text-white p-4 text-center mt-auto border-b-2 border-white">
    <div class="grid grid-cols-12 w-full">
        <h1 class="col-span-3 w-full text-xl flex items-center select-none">FOOTBALL MANAGER</h1>
        <h2 class="col-span-6 w-full text-4xl select-none">GESTIÓN DE EQUIPOS</h2>
        <div class="col-span-3 w-full teamNav flex justify-around items-center text-white">
            <a href="{{route('home')}}"><button class="bg-slate-500 hover:bg-white hover:text-black py-1 px-2 rounded">Home</button></a>
            <a href="{{route('teams.create')}}"><button class="bg-slate-500 hover:bg-white hover:text-black py-1 px-2 rounded">Crear Equipo</button></a>
            <a href="{{route('teams.index')}}"><button class="bg-slate-500 hover:bg-white hover:text-black py-1 px-2 rounded">Ver Equipos</button></a>
        </div>
    </div>
</header>