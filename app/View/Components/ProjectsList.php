<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProjectsList extends Component
{
    public $projects = [
//        [
//            'title' => 'Cadunesc',
//            'image' => 'https://via.placeholder.com/200',
//            'description' => 'Site para o centro academico de direito da universidade do extremo sul catarinense',
//            'url' => 'https://cadunesc.diego-gomes.com.br'
//        ],
        [
            'title' => 'La Luna Art',
            'image' => 'http://lalunart.test/storage/logo.jpg',
            'description' => 'Site para exibir imagens do instagram La Luna Art, um perfil de pinturas a mão feitas como hobby por Nelly Esther.',
            'url' => 'https://lalunart.diego-gomes.com.br'
        ],
//        [
//            'title' => 'Title of Project',
//            'image' => 'https://via.placeholder.com/200',
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aliquam animi asperiores assumenda autem deserunt, doloremque dolorum facilis illo iusto magni molestiae neque nihil qui repudiandae sit ut voluptatum.'
//        ]
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
