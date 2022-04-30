<?php

namespace App\View\Components;

use App\Models\Genre;
use Illuminate\View\Component;

class GenreDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.genre-dropdown', [
            'genres' => Genre::all(),
            'currentGenre' => Genre::firstWhere('slug', request('genre'))
        ]);
    }
}
