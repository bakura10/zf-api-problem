<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

return array(
    'zf-api-problem' => array(
        /*
        'accept_filter' => $stringOrArray, // Accept types that should allow ApiProblem responses
        'render_error_controllers' => array(), // Array of controller service names that should
                                               // enable the ApiProblem render.error listener
         */
    ),

    'view_manager' => array(
        // Enable this in your application configuration in order to get full
        // exception stack traces in your API-Problem responses.
        'display_exceptions' => false,
    ),
);
