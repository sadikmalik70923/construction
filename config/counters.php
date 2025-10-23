<?php

return [
    // Plain integers; suffix is handled in the UI
    'projects'  => (int) env('COUNTER_PROJECTS', 250),
    'clients'   => (int) env('COUNTER_CLIENTS', 100),
    'engineers' => (int) env('COUNTER_ENGINEERS', 200),
    'years'     => (int) env('COUNTER_YEARS', 10),
];
