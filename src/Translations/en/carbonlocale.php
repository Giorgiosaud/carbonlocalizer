<?php

// This file should be located at your lang directory (app/lang/es?)

return array(

    'past'     =>  array(
        'second' => ':delta second ago| :delta seconds ago',
        'minute' => ' :delta minute ago|:delta minutes ago',
        'hour'   => ':delta hour ago| :delta hours ago',
        'day'    => '{1} yesterday|{2} before yesterday|[3,Inf] :delta days ago',
        'week'   => '{1} last week|[2,Inf] :delta weeks ago',
        'month'  => '{1} last month|[2,Inf] :delta months ago',
        'year'   => 'last year|:delta years ago',
    ),

    'future' => array(
        'second' => 'in :delta second|in :delta seconds',
        'minute' => 'in :delta minute|in :delta minutes',
        'hour'   => 'in :delta hour|in :delta hours',
        'day'    => '{1} tomorrow|{2} after tomorrow|[3,Inf] in :delta days',
        'week'   => '{1} next week|[2,Inf] in :delta weeks',
        'month'  => '{1} next month|[2,Inf] in :delta months',
        'year'   => 'next year|in :delta years',
    )
);