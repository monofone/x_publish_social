<?php
/**
 * Created by JetBrains PhpStorm.
 * User: srohweder
 * Date: 4/4/13
 * Time: 11:00 PM
 * To change this template use File | Settings | File Templates.
 */
$GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default'] = str_replace('stop', 'stop,publish_social', $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_calendar_events']['fields']['publish_social'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_calendar_events']['publish_social'],
        'exclude'                 => true,
        'inputType'               => 'checkbox',
        'eval'                    => array('mandatory'=>false, 'tl_class'=>'w50')
);