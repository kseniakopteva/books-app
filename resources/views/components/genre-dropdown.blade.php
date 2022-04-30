 <x-dropdown>
     <x-slot name="trigger">
         <button class="py-2 pl-3 pr-9 text-sm font-semibold shadow-sm w-full sm:w-32 text-left flex sm:inline-flex">

             {{ isset($currentGenre) ? ucwords($currentGenre->name) : 'Genres' }}

             <x-icon class="absolute pointer-events-none" name="down-arrow" style="right: 12px;"></x-icon>

         </button>
     </x-slot>


     <x-dropdown-item href="/?{{ http_build_query(request()->except('genre', 'page')) }}" :active="request()->routeIs('home')">All</x-dropdown-item>

     @foreach ($genres as $genre)
     <x-dropdown-item href="/?genre={{ $genre->slug }}&{{ http_build_query(request()->except('genre', 'page')) }}" :active='request()->is("genres/{$genre->slug}")'>
         {{ ucwords($genre->name) }}
     </x-dropdown-item>

     @endforeach
 </x-dropdown>
