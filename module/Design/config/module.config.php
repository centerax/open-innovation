<?php
return array(
		
		'router' => array(
				'routes' => array(
						'design' => array(
								'type' => 'Zend\Mvc\Router\Http\Literal',
								'options' => array(
										'route'    => '/design',
										'defaults' => array(
												'controller' => 'Design\Controller\Index',
												'action'     => 'index',
										),
								),
						),
						'design/challenge' => array(
								'type'    => 'segment',
								'options' => array(
										'route'    => '/design/challenge[/][:action][/:id]',
										'defaults' => array(
												'controller' => 'Design\Controller\Challenge',
												'action'     => 'index',
										),
								),
						),
				),
		),
		'controllers' => array(
				'invokables' => array(
						'Design\Controller\Challenge' => 'Design\Controller\ChallengeController',
						'Design\Controller\Index' => 'Design\Controller\IndexController',
				),
		),
		'view_manager' => array(
				'template_path_stack' => array(
						'album' => __DIR__ . '/../view',
				),
		),
);