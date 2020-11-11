<?php

namespace paskuale75\datatables;

use Yii;
use yii\base\Components;

class DataTablesLanguage
{

    public static function run()
    {
        $language =
            [
                'sEmptyTable'   => Yii::t('dtable', 'sEmptyTable'), //'Nessun dato presente nella tabella',
                'sInfo'         => Yii::t('dtable', 'sInfo'), //'Vista da _START_ a _END_ di _TOTAL_ elementi',
                'sInfoEmpty'    => Yii::t('dtable', 'sInfoEmpty'), //'Vista da 0 a 0 di 0 elementi',
                'sInfoFiltered' => Yii::t('dtable', 'sInfoFiltered'), //'(filtrati da _MAX_ elementi totali)',
                'sInfoThousands' => Yii::t('dtable', 'sInfoThousands'), //'.',
                'sLengthMenu'    => Yii::t('dtable', 'sLengthMenu'), //'Visualizza _MENU_ elementi',
                'sLoadingRecords' => Yii::t('dtable', 'sLoadingRecords'), //'Caricamento...',
                'sProcessing'    => Yii::t('dtable', 'sProcessing'), //'Elaborazione...',
                'sSearch'        => Yii::t('dtable', 'sSearch'), //'Cerca:',
                'sZeroRecords'   => Yii::t('dtable', 'sZeroRecords'), //'La ricerca non ha portato alcun risultato.',
                'oPaginate' => [
                    'sFirst'    => Yii::t('dtable', 'sFirst'), //'Inizio',
                    'sPrevious' => Yii::t('dtable', 'sPrevious'), //'Precedente',
                    'sNext'     => Yii::t('dtable', 'sNext'), //'Successivo',
                    'sLast'     => Yii::t('dtable', 'sLast'), //'Fine',
                ],
                'oAria' => [
                    'sSortAscending'    => Yii::t('dtable', 'sSortAscending'), //': attiva per ordinare la colonna in ordine crescente',
                    'sSortDescending'   => Yii::t('dtable', 'sSortDescending'), //': attiva per ordinare la colonna in ordine decrescente',
                ]
            ];

        return $language;
    }
}
