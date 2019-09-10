<?php

namespace backend\widgets;

use dmstr\widgets\Menu;
use yii\base\Widget;

class ApplicationMenu extends Widget
{
    public $env = 'prod'; // dev|prod
    public $domain_url;

    public function init()
    {
        parent::init();
        $this->domain_url = $this->domain_url ?: getenv('DOMAIN_URL');
    }

    public function run()
    {
        // Vars
        $user = \Yii::$app->user;
        $canCreateIppRetail = $user->can('IppRetail.Create');
        $urls = $this->getMenuUrl();

        // Generate Widget
        echo Menu::widget([
            'options'=>['class'=>'sidebar-menu'],
            'items'=>[
                ['label'=>'MAIN NAVIGATION', 'options'=>['class'=>'header']],
                ['label'=>'Intranet Home', 'icon'=>'home', 'url'=>'http://intranet.'.$this->domain_url],
                ['label'=>'Dashboard', 'icon'=>'dashboard', 'url'=>['/']],
                [
                    'label'=>'Proposal',
                    'icon'=>'book',
                    'url'=>'#',
                    'items'=>[
                        ['label'=>'Create Proposal Reguler', 'icon'=>'plus-square', 'url'=>$urls['proposal'][1], 'visible'=>$user->can('Proposal.Create')],
                        ['label'=>'List Proposal', 'icon'=>'list', 'url'=>$urls['proposal'][2]],
                        ['label'=>'List Proposal Reguler', 'icon'=>'list', 'url'=>$urls['proposal'][3], 'visible'=>$user->can('Proposal.Reguler')],
                        // ['label'=>'Repository Proposal', 'icon'=>'list', 'url'=>$urls['proposal'][4]],
                    ],
                    'visible'=>$user->can('Menu.Proposal'),
                ],
                [
                    'label'=>'Orders (IPP)',
                    'icon'=>'shopping-cart',
                    'url'=>'#',
                    'items'=>[
                        ['label'=>'Create IPP', 'icon'=>'plus-square', 'url'=>$urls['order'][1], 'visible'=>$user->can('Ipp.Create')],
                        // ['label'=>'Create IPP RKAT', 'icon'=>'plus-square', 'url'=>$urls['order'][2], 'visible'=>$user->can('Admin PDG')],
                        // ['label'=>'My IPP', 'icon'=>'list', 'url'=>$urls['order'][3], 'visible'=>$user->can('jagoan')],
                        ['label'=>'List IPP', 'icon'=>'list', 'url'=>$urls['order'][4], 'visible'=>$user->can('Ipp.Index')],
                    ],
                    'visible'=>$user->can('Menu.Ipp'),
                ],
                [
                    'label'=>'Project (PMP)',
                    'icon'=>'cubes',
                    'url'=>'#',
                    'items'=>[
                        // ['label'=>'Create PMP', 'icon'=>'plus-square', 'url'=>$urls['project'][1], 'visible'=>$user->can('jagoan')],
                        // ['label'=>'My PMP', 'icon'=>'list', 'url'=>$urls['project'][2], 'visible'=>$user->can('Menu.Project.MyProject')],
                        ['label'=>'List PMP', 'icon'=>'list', 'url'=>$urls['project'][3], 'visible'=>$user->can('Project.Fep.Index')],
                        ['label'=>'Monitoring SPK', 'icon'=>'list', 'url'=>$urls['project'][5], 'visible'=>$user->can('Project.Spk.Monitoring')],
                    ],
                    'visible'=>$user->can('Menu.Project'),
                ],
                [
                    'label'=>'Finance',
                    'icon'=>'database',
                    'url'=>'#',
                    'items'=>[
                        [
                            'label'=>'Create IPP Retail',
                            'icon'=>'plus-square',
                            'url'=>$urls['finance'][1],
                            'visible'=>$canCreateIppRetail
                        ],
                        ['label'=>'List IPP Retail', 'icon'=>'list', 'url'=>$urls['finance'][2], 'visible'=>$user->can('IppRetail.Index')],
                        ['label'=>'List Donation', 'icon'=>'list', 'url'=>$urls['finance'][3], 'visible'=>$user->can('Donation.Index')],
                        // ['label'=>'Import Donation', 'icon'=>'cog', 'url'=>$urls['finance'][6], 'visible'=>$user->can('Admin Keu')],
                        ['label'=>'List AR', 'icon'=>'list', 'url'=>$urls['finance'][5], 'visible'=>$user->can('Receivable.Index')],
                    ],
                    'visible'=>$user->can('Menu.Finance'),
                ],
                [
                    'label'=>'Partnership',
                    'icon'=>'users',
                    'url'=>'#',
                    'items'=>[
                        ['label'=>'List Mitra', 'icon'=>'list', 'url'=>$urls['partner'][1]],
                        // ['label'=>'List CPM', 'icon'=>'list', 'url'=>$urls['partner'][2]],
                        // ['label'=>'Join CPM', 'icon'=>'plus-square', 'url'=>$urls['partner'][3]],
                    ],
                    'visible'=>$user->can('Menu.Partnership'),
                ],
                [
                    'label'=>'Payroll Fasil',
                    'icon'=>'money',
                    'url'=>'#',
                    'items'=>[
                        ['label'=>'THP Fasil', 'icon'=>'list-alt', 'url'=>$urls['payroll'][1]],
                        ['label'=>'Payroll', 'icon'=>'paypal', 'url'=>$urls['payroll'][2]],
                        ['label'=>'Pencairan Payroll', 'icon'=>'credit-card-alt', 'url'=>$urls['payroll'][3]],
                    ],
                    'visible'=>$user->can('HRD'),
                ],
                [
                    'label'=>'Fasilitator',
                    'icon'=>'newspaper-o',
                    'url'=>'#',
                    'items'=>[
                        ['label'=>'List Quick Report', 'icon'=>'list', 'url'=>$urls['fasil'][2]],
                        ['label'=>'List Progress Report', 'icon'=>'list', 'url'=>$urls['fasil'][3]],
                        ['label'=>'List Final Report', 'icon'=>'list', 'url'=>$urls['fasil'][4]],
                        ['label'=>'List Berita Aktifitas', 'icon'=>'list', 'url'=>$urls['fasil'][5]],
                        ['label'=>'List Cerita Humanis', 'icon'=>'list', 'url'=>$urls['fasil'][6]],
                        ['label'=>'List PM (Detail)', 'icon'=>'list', 'url'=>$urls['fasil'][7]],
                        ['label'=>'List PM (Agregat)', 'icon'=>'list', 'url'=>$urls['fasil'][8]],
                    ],
                    'visible'=>$user->can('Menu.Fasil'),
                ],
                [
                    'label'=>'Kafalah',
                    'icon'=>'credit-card',
                    'url'=>$urls['payroll'][4],
                    'visible'=>$user->can('Fasil'),
                ],
                [
                    'label'=>'Reporting',
                    'icon'=>'file-pdf-o',
                    'items'=>[
                        [
                            'label'=>'Rekap Keuangan',
                            'icon'=>'pie-chart',
                            'url'=>$urls['report'][1],
                            'visible'=>$user->can('Admin Keu'),
                        ],
                        [
                            'label'=>'Rekap Per Project',
                            'icon'=>'cubes',
                            'url'=>$urls['report'][2],
                            'visible'=>$user->can('Admin Keu'),
                        ],
                    ],
                ],
                /*[
                    'label'=>'Ramadhan',
                    'icon'=>'line-chart',
                    'url'=>'#',
                    'items'=>[
                        ['label'=>'Dashboard', 'icon'=>'map', 'url'=>$urls['ramadhan'][1]],
                        [
                            'label'=>'Input Summary',
                            'icon'=>'plus-square',
                            'url'=>$urls['ramadhan'][2],
                            'visible'=>($user->identity->branch_id != 1)
                        ],
                        ['label'=>'List Summary', 'icon'=>'list', 'url'=>$urls['ramadhan'][3]],
                        [
                            'label'=>'Laporan Ramadhan',
                            'icon'=>'bar-chart',
                            'url'=>$urls['ramadhan'][4],
                            'visible'=>$user->can('Project.Summary.Report')
                        ],
                    ],
                    'visible'=>$user->can('Menu.Admin'),
                ],*/
                [
                    'label'=>'Setting',
                    'icon'=>'gears',
                    'url'=>'#',
                    'visible'=>$user->can('/setting/*'),
                    'items'=>[
                        [
                            'label'=>'Gii',
                            'icon'=>'file-code-o',
                            'url'=>['/gii'],
                            'visible'=>$user->can('jagoan'),
                        ],
                        [
                            'label'=>'Program',
                            'icon'=>'clipboard',
                            'url'=>['/setting/program'],
                            'visible'=>$user->can('/setting/program/index'),
                        ],
                        [
                            'label'=>'Link Daf Product',
                            'icon'=>'code-fork',
                            'url'=>['/setting/program-daf'],
                            'visible'=>$user->can('Admin Keu'),
                        ],
                        [
                            'label'=>'Posisi Team Project',
                            'icon'=>'user-circle-o',
                            'url'=>['/setting/project-position'],
                        ],
                        [
                            'label'=>'Tipe Infrastruktur',
                            'icon'=>'list',
                            'url'=>['/setting/infrastructure-type'],
                        ],
                        [
                            'label'=>'SLA Infrastruktur',
                            'icon'=>'list',
                            'url'=>['/setting/infrastructure-sla'],
                        ],
                    ],
                ],
                [
                    'label'=>'Otorisasi',
                    'icon'=>'unlock-alt',
                    'url'=>'#',
                    'visible'=>$user->can('jagoan'),
                    'items'=>[
                        [
                            'label'=>'Assignment',
                            'icon'=>'users',
                            'url'=>['/admin/assignment'],
                        ],
                        [
                            'label'=>'Role',
                            'icon'=>'user',
                            'url'=>['/admin/role'],
                        ],
                        [
                            'label'=>'Permission',
                            'icon'=>'tasks',
                            'url'=>['/admin/permission'],
                        ],
                        [
                            'label'=>'Route',
                            'icon'=>'link',
                            'url'=>['/admin/route'],
                        ],
                        [
                            'label'=>'Rule',
                            'icon'=>'map-o',
                            'url'=>['/admin/rule'],
                        ],
                    ],
                ]
            ],
        ]);
    }

    public function getMenuUrl()
    {
        /*$fnGetUrl = function($devUrl, $prodUrl=null, $ready=false) {
            $isDebugOrReady = (getenv('YII_DEBUG') == 1) || $ready;
            return $isDebugOrReady ? [$devUrl] : "http://project.{$this->domain_url}/{$prodUrl}";
        };*/

        return [
            'proposal'=>[
                1=>'/order/proposal/create',
                2=>'/order/proposal',
                3=>'/order/proposal/reguler',
                4=>'/order/repository',
            ],
            'order'=>[
                1=>'/order/ipp/create',
                2=>'/order/ipp/create-rkat',
                3=>'/order/ipp/my',
                4=>'/order/ipp',
            ],
            'project'=>[
                1=>'/project/project/create',
                2=>'/project/project/my',
                3=>'/project',
                4=>'/project/resource',
                5=>'/project/spk/monitoring',
            ],
            'fasil'=>[
                2=>'/fasil/quick',
                3=>'/fasil/progress',
                4=>'/fasil/final',
                5=>'/fasil/news',
                6=>'/fasil/story',
                7=>'/fasil/pm',
                8=>'/fasil/pmagg',
            ],
            'finance'=>[
                1=>'/finance/ipp-retail/create',
                2=>'/finance/ipp-retail',
                3=>'/finance/donation',
                4=>'/finance/donation/summary',
                5=>'/finance/receivable',
                6=>'/finance/import',
            ],
            'partner'=>[
                1=>'/partner/mitra',
                2=>'/partner/cpm',
                3=>'/partner/cpm/join',
            ],
            'report'=>[
                1=>'/report/finance/all',
                2=>'/report/finance/project',
            ],
            'ramadhan'=>[
                1=>'/ramadhan/summary/front',
                2=>'/ramadhan/summary/create',
                3=>'/ramadhan/summary',
                4=>'/ramadhan/summary/report',
            ],
            'payroll'=>[
                1=>'/payroll/fasil/index',
                2=>'/payroll/payroll/index',
                3=>'/payroll/disbursement/index',
                4=>'/payroll/payroll/index-fasil',
            ],
        ];
    }
}
