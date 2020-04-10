<?php

return [

    'project_id' => env('THENPINGME_PROJECT_ID'),

    'signing_key' => env('THENPINGME_SIGNING_KEY'),

    'queue_ping' => env('THENPINGME_QUEUE_PING', true),

    'collect_git_sha' => env('THENPINGME_COLLECT_GIT_SHA', true),

    'api_url' => env('THENPINGME_API_URL', 'https://thenping.me/api'),

];
