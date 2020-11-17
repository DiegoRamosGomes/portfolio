<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectsList extends Component
{
    public $projects = [
        [
            'title' => 'Cadunesc',
            'image' => 'logo_cadunesc.png',
            'description' => 'Site para o centro academico de direito da universidade do extremo sul catarinense',
            'url' => 'https://cadunesc.com.br'
        ]
    ];
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.projects-list');
    }
}
