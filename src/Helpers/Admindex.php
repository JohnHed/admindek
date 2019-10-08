<?php



function menu()
{
    return [
        [
            'text' => 'Quadros',
            'icon' => 'fa fa-folder',
            'url' => 'projeto.index',

        ],
        [
            'text' => 'Frequência',
            'icon' => 'far fa-calendar-alt',
            'url' => 'frequencia.index',

        ],
        // [
        //     'text' => 'Empresas',
        //     'icon' => 'fa fa-building',
        //     'can' => 'gestao-de-empresas',
        //     'url' => '',
        //     'submenu' => [
        //         [
        //             'text' => 'Gerenciar',
        //             'url' => '/painel/empresas',
        //             'can' => 'ver-usuarios',
        //             'slug' => 'empresas'
        //         ],
        //         [
        //             'text' => 'Departamentos',
        //             'url' => '/painel/empresas/departamentos',
        //             'icon' => 'fa fa-lock',
        //             'can' => 'gestao-funcoes',
        //             'slug' => 'funcoes'
        //         ]
        //     ],
        // ],

    ];
}
