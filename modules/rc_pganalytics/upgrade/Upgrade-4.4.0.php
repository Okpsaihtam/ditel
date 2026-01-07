<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to a trade license awarded by
 * Garamo Online L.T.D.
 *
 * Any use, reproduction, modification or distribution
 * of this source file without the written consent of
 * Garamo Online L.T.D It Is prohibited.
 *
 *  @author    Reaction Code <info@reactioncode.com>
 *  @copyright 2015-2020 Garamo Online L.T.D
 *  @license   Commercial license
 */

function upgrade_module_4_4_0()
{
    $success = true;

    $upgrade_default_values = array(
        'RC_PGANALYTICS_D5' => 5,
        'RC_PGANALYTICS_D6' => 6,
        'RC_PGANALYTICS_D7' => 7,
        'RC_PGANALYTICS_D8' => 8,
    );

    // set default values from new vars
    foreach ($upgrade_default_values as $key => $value) {
        // Set default Products Rate
        if (!Configuration::updateGlobalValue($key, $value)) {
            $success = false;
        }
    }

    // clear all PS cache
    Tools::clearSmartyCache();
    Tools::clearXMLCache();
    Media::clearCache();
    Tools::generateIndex();

    return $success;
}
