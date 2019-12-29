<?php

namespace paskuale75\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables Select Bs4 plugin
 */
class DataTablesSelectBs4Asset extends AssetBundle
{
    public $sourcePath = '@bower/datatables.net-select-bs4';

    public $js = [
        "js/select.bootstrap4.min.js",
    ];

    public $css = [
        "css/select.bootstrap4.min.css",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'paskuale75\datatables\DataTablesAsset',
        'paskuale75\datatables\DataTablesSelectAsset',
    ];
}