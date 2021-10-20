<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        // Vendas
        [
            'section' => 'Vendas',
        ],
        [
            'title' => 'Controle',
            'desc' => '',
            'icon' => 'media/svg/icons/Shopping/Sort3.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Ordens de Serviço',
                    'page' => 'layout/themes/aside-light'
                ],
                [
                    'title' => 'Frente de Caixa Online',
                    'page' => 'layout/themes/header-dark'
                ],
                [
                    'title' => 'Contratos',
                    'page' => 'layout/themes/header-dark'
                ],
                [
                    'title' => 'Vendas e Orçamentos',
                    'page' => 'layout/themes/header-dark'
                ],
                [
                    'title' => 'Parcelas a Receber',
                    'page' => 'layout/themes/header-dark'
                ],
                [
                    'title' => 'Notas Fiscais de Produtos',
                    'page' => 'layout/themes/header-dark'
                ],
                [
                    'title' => 'Notas Fiscais de Serviço',
                    'page' => 'layout/themes/header-dark'
                ],
                [
                    'title' => 'Notas Fiscais de Consumidor',
                    'page' => 'layout/themes/header-dark'
                ]
            ]
        ],
        [
            'title' => 'Cadastros',
            'desc' => '',
            'icon' => 'media/svg/icons/Shopping/Settings.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Clientes',
                    'page' => 'layout/subheader/toolbar'
                ],
                [
                    'title' => 'Produtos',
                    'page' => 'layout/subheader/actions'
                ],
                [
                    'title' => 'Serviços',
                    'page' => 'layout/subheader/tabbed'
                ],
                [
                    'title' => 'Transportadoras',
                    'page' => 'layout/subheader/classic'
                ],
                [
                    'title' => 'Estoque',
                    'page' => 'layout/subheader/none'
                ]
            ]
        ],

        // Compras
        [
            'section' => 'Compras',
        ],
        [
            'title' => 'Controle',
            'desc' => '',
            'icon' => 'media/svg/icons/Shopping/Cart1.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Compras',
                    'page' => 'layout/themes/aside-light'
                ],
                [
                    'title' => 'Parcelas a Pagar',
                    'page' => 'layout/themes/header-dark'
                ],
                [
                    'title' => 'Notas de Compra',
                    'page' => 'layout/themes/header-dark'
                ]
            ]
        ],
        [
            'title' => 'Cadastros',
            'desc' => '',
            'icon' => 'media/svg/icons/Shopping/Settings.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Fornecedores',
                    'page' => 'layout/subheader/toolbar'
                ],
                [
                    'title' => 'Produtos',
                    'page' => 'layout/subheader/actions'
                ],
                [
                    'title' => 'Serviços',
                    'page' => 'layout/subheader/tabbed'
                ],
                [
                    'title' => 'Transportadoras',
                    'page' => 'layout/subheader/classic'
                ],
                [
                    'title' => 'Estoque',
                    'page' => 'layout/subheader/none'
                ]
            ]
        ],

        // Financeiro
        [
            'section' => 'Financeiro',
        ],
        [
            'title' => 'Movimentações',
            'desc' => '',
            'icon' => 'media/svg/icons/Shopping/Money.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Contas',
                    'page' => 'layout/themes/aside-light'
                ],
                [
                    'title' => 'Extrato',
                    'page' => 'layout/themes/header-dark'
                ],
                [
                    'title' => 'Contas a Pagar',
                    'page' => 'layout/themes/header-dark'
                ],
                [
                    'title' => 'Contas a Receber',
                    'page' => 'layout/themes/header-dark'
                ]
            ]
        ],
        [
            'title' => 'Cadastros',
            'desc' => '',
            'icon' => 'media/svg/icons/Shopping/Settings.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Categorias',
                    'page' => 'layout/subheader/toolbar'
                ]
            ]
        ],
            // Financeiro
            [
                'section' => 'Relatórios',
            ],
            [
                'title' => 'Financeiro',
                'desc' => '',
                'icon' => 'media/svg/icons/Shopping/Money.svg',
                'bullet' => 'dot',
                'root' => true,
                'submenu' => [
                    [
                        'title' => 'Fluxo de Caixa Diario',
                        'page' => 'layout/themes/aside-light'
                    ],
                    [
                        'title' => 'Fluxo de Caixa Mensal',
                        'page' => 'layout/themes/header-dark'
                    ],
                    [
                        'title' => 'DRE Gerencial',
                        'page' => 'layout/themes/header-dark'
                    ],
                    [
                        'title' => 'Posição de Contas',
                        'page' => 'layout/themes/header-dark'
                    ],
                    [
                        'title' => 'Análise de pagamentos',
                        'page' => 'layout/themes/header-dark'
                    ],
                    [
                        'title' => 'Análise de recebimentos',
                        'page' => 'layout/themes/header-dark'
                    ],
                    [
                        'title' => 'Outros relatorios',
                        'page' => 'layout/themes/header-dark'
                    ]
                ]
            ],
            [
                'title' => 'Fiscal',
                'desc' => '',
                'icon' => 'media/svg/icons/Shopping/Sale2.svg',
                'bullet' => 'dot',
                'root' => true,
                'submenu' => [
                    [
                        'title' => 'Integração Fiscal',
                        'page' => 'layout/subheader/toolbar'
                    ]
                ]
            ],
            [
                'title' => 'Vendas',
                'desc' => '',
                'icon' => 'media/svg/icons/Shopping/Sort3.svg',
                'bullet' => 'dot',
                'root' => true,
                'submenu' => [
                    [
                        'title' => 'Vendas por Cliente',
                        'page' => 'layout/subheader/toolbar'
                    ],
                    [
                        'title' => 'Vendas por vendedor',
                        'page' => 'layout/subheader/toolbar'
                    ],
                    [
                        'title' => 'Mais vendidos',
                        'page' => 'layout/subheader/toolbar'
                    ],
                    [
                        'title' => 'Itens por cliente',
                        'page' => 'layout/subheader/toolbar'
                    ],
                    [
                        'title' => 'Clientes',
                        'page' => 'layout/subheader/toolbar'
                    ]
                ]
            ],
            [
                'title' => 'Estoque',
                'desc' => '',
                'icon' => 'media/svg/icons/Shopping/Cart1.svg',
                'bullet' => 'dot',
                'root' => true,
                'submenu' => [
                    [
                        'title' => 'Giro de Estoque',
                        'page' => 'layout/subheader/toolbar'
                    ]
                ]
            ]
    ]
];
