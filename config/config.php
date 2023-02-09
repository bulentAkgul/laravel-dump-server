<?php

return [
    /*
     * The host to use when listening for debug server connections.
     */
    'host' => env('DUMP_SERVER_HOST', 'tcp://127.0.0.1:9912'),

    /*
     * When this is true, dump file will be refreshed on each test run.
     */
    'clear_all' => true,
];
