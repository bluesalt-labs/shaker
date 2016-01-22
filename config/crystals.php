<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
    // This list of installed crystals will be populated automatically. Here's how I'm thinking this should work:
    //  There should be a Crystals page within the application (simliar to the plugins page in WordPress)
    //  When that page loads, it will check the `/crystals` directory for plugins ()
    'installed'    => array(
        'bluesalt-labs/example-crystal' => array(
            "version"   => '0.1',
        ),
    ),
);
