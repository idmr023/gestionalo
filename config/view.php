<?php

return [
    'default' => env('VIEW_COMPILED_PATH', realpath(storage_path('framework/views'))),
    'compiled' => realpath(storage_path('framework/views')),
];
