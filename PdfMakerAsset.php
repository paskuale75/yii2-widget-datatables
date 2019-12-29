<?php

namespace paskuale75\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables Buttons Bs4 plugin
 */
class PdfMakerAsset extends AssetBundle
{
    public $sourcePath = '@bower/pdfmake';

    public $js = [
        "build/pdfmake.min.js",
    ];


    public $depends = [
        'yii\web\JqueryAsset',
        'paskuale75\datatables\DataTablesAsset',
    ];
}