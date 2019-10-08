<?php

namespace Dashboards\Admindex\Helpers;

//use Entrust;

class Admindex
{

	public static function menu_active($url, $slug, $return)
	{

		$url = end($url);

		if (str_slug($slug) == $url) {
			return $return;
		}
	}

	public static function evento($event)
	{
		if ($event == "created") {
			return "cadastrou";
		} elseif ($event == "updated") {
			return "atualizou";
		} elseif ($event == "deleted") {
			return "deletou";
		} elseif ($event == "restored") {
			return "restaurou";
		}
	}

	public static function verStatus($status)
	{
		if ($status == "ativo") {
			return '<span class="badge-text badge-text-small success">' . $status . '</span>';
		} elseif ($status == "vencido") {
			return '<span class="badge-text badge-text-small danger">' . $status . '</span>';
		} elseif ($status == "cancelado") {
			return '<span class="badge-text badge-text-small secondary">' . $status . '</span>';
		}
	}


	public static function menu()
	{

		if (Entrust::hasRole('root')) {
			return [
				[
					'text' => 'Empresas',
					'icon' => 'fa fa-building',
					'can' => 'gestao-de-empresas',
					'url' => '',
					'submenu' => [
						[
							'text' => 'Gerenciar',
							'url' => '/painel/empresas',
							'can' => 'ver-usuarios',
							'slug' => 'empresas'
						],
						[
							'text' => 'Departamentos',
							'url' => '/painel/empresas/departamentos',
							'icon' => 'fa fa-lock',
							'can' => 'gestao-funcoes',
							'slug' => 'funcoes'
						]
					],
				],
				[
					'text' => 'Usuários',
					'icon' => 'fa fa-user',
					'can' => 'gestao-de-usuarios',
					'url' => '',
					'submenu' => [
						[
							'text' => 'Gerenciar',
							'url' => '/painel/usuarios',
							'icon' => 'fa fa-edit',
							'can' => 'ver-usuarios',
							'slug' => 'usuarios'
						],
						[
							'text' => 'Funções',
							'url' => '/painel/usuarios/funcoes',
							'icon' => 'fa fa-lock',
							'can' => 'gestao-funcoes',
							'slug' => 'funcoes'
						]
					],
				], [
					'text' => 'Configurações',
					'icon' => 'fa fa-wrench',
					'can' => 'configuracoes',
					'url' => '',
					'submenu' => [
						[
							'text' => 'Geral',
							'url' => '/painel/configuracao',
							'icon' => 'fa fa-cogs',
							'slug' => 'configuracao'
						],
						[
							'text' => 'Gerenciar Atualizações',
							'url' => '/painel/configuracao',
							'icon' => 'fa fa-cogs',
							'slug' => 'configuracao'
						],
						[
							'text' => 'Backups',
							'url' => '/painel/backups',
							'icon' => 'fa fa-download',
							'slug' => 'backups'
						],
						[
							'text' => 'Logs de Erros',
							'url' => '/painel/erros',
							'icon' => 'fa fa-bug',
							'slug' => 'erros'
						],
					],
				]

			];
		} else if (Entrust::hasRole('administrador')) {
			return [
				[
					'text' => 'Clientes',
					'icon' => 'fa fa-users',
					'url' => '/painel/clientes',
					'can' => 'gestao-de-clientes',
				],
				[
					'text' => 'Tickets',
					'icon' => 'fa fa-ticket',
					'url' => '/painel/ticket',
					'can' => 'gestao-de-tickets',
				], [
					'text' => 'Mídia',
					'icon' => 'fa fa-file-image-o',
					'can' => 'gestao-de-midias',
					'submenu' => [
						[
							'text' => 'Gerenciar',
							'url' => '/painel/midia',
							'icon' => 'fa fa-edit',
							'slug' => 'midia'

						],
						[
							'text' => 'Lixeira',
							'url' => '/painel/midia/lixeira',
							'icon' => 'fa fa-trash',
							'slug' => 'lixeira'
						],
					],
				],
				[
					'text' => 'Minha Empresas',
					'icon' => 'fa fa-building',
					'can' => 'gestao-de-empresas',
					'url' => '',
					'submenu' => [
						[
							'text' => 'Gerenciar',
							'url' => '/painel/empresas',
							'can' => 'ver-usuarios',
							'slug' => 'empresas'
						],
						[
							'text' => 'Departamentos',
							'url' => '/painel/empresas/departamentos',
							'icon' => 'fa fa-lock',
							'can' => 'gestao-funcoes',
							'slug' => 'funcoes'
						],
						[
							'text' => 'Usuários',
							'url' => '/painel/usuarios',
							'icon' => 'fa fa-edit',
							'can' => 'ver-usuarios',
							'slug' => 'usuarios'
						],
						[
							'text' => 'Funções de Usuários',
							'url' => '/painel/usuarios/funcoes',
							'icon' => 'fa fa-lock',
							'can' => 'gestao-funcoes',
							'slug' => 'funcoes'
						]
					],
				],

			];
		}
	}
}
