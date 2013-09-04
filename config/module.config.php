<?php

return array(
    'router' => array(
        'routes' => array(
            'contato' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/contato',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Contato',
                        'action'        => 'index',
                    ),
                ),
            ),
            'home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
            ),
            'carrinho' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/carrinho',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Carrinho',
                        'action'        => 'index',
                    ),
                ),
            ),
            'videos' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/videos',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'module' => 'application',
                        'controller'    => 'Videos',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:categoria[/:s1categoria][/:s2categoria]]',
                            'constraints' => array(
                                'module' => 'application',
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'action' => 'index',
                                'categoria' => '',
                                's1categoria' => '',
                                's2categoria' => ''
                            ),
                        ),
                    ),
                ),
            ),
            'calculo' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/calculo',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Calculo',
                        'action'        => 'index',
                    ),
                ),
            ),
            'juroscompostos' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/calculo/juroscompostos',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Calculo',
                        'action'        => 'juroscompostos',
                    ),
                ),
            ),
            'videos-detales' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/videos/detalhes[/:slug]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'module' => 'application',
                        'controller'    => 'Videos',
                        'action'        => 'detalhes',
                    ),
                ),
            ),
            'videos-modal' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/videos/modal[/:slug]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'module' => 'application',
                        'controller'    => 'Videos',
                        'action'        => 'modal',
                    ),
                ),
            ),
            'videos-tag' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/videos/tag[/:slug]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'module' => 'application',
                        'controller'    => 'Videos',
                        'action'        => 'tag',
                    ),
                ),
            ),
            'videos-comentario' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/videos/comentario[/:fkProduto][/:fkComentario]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'module' => 'application',
                        'controller'    => 'Videos',
                        'action'        => 'comentario',
                    ),
                ),
            ),
            'videos-joinha' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/videos/joinha',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'module' => 'application',
                        'controller'    => 'Videos',
                        'action'        => 'joinha',
                    ),
                ),
            ),
            'sitemap' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/sitemap',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Sitemap',
                        'action'        => 'index',
                    ),
                ),
            ),
            'autocadastra' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/autocadastra',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Autocadastravideo',
                        'action'        => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'phpthumb' => 'JVEasyPhpThumbnail\View\Helper\PHPThumb',
        )
    ),
);