@extends('projects.project-detail')

@php
$title = 'The Central Downtown Arjan';
$subtitle = 'A visionary mixed-use development combining residential towers and a luxury mall — redefining urban living in Dubai.';
$heroImage = asset('images/projects/the-central-number-1.jpg');
$mainImage = asset('images/projects/6.jpg');

$description = "The Central Downtown Arjan is an iconic multi-tower development by Globecon Construction, strategically located in Al Barsha South Third (Arjan – Dubai). 
This ambitious project includes four high-rise towers integrated with a luxury retail mall, offering an exceptional blend of living, leisure, and lifestyle. 
With over 2.1 million square feet of built-up area, the development exemplifies Globecon’s excellence in delivering large-scale urban infrastructure that balances design sophistication with construction efficiency. 
Commissioned by Aqua Skyline Investment Limited and guided by Chawla Architectural & Consulting Engineers, this project sets a new benchmark in contemporary urban architecture.";

$highlights = [
  'Location: Al Barsha South Third (Arjan - Dubai)',
  'Configuration: 4 Towers + Mall',
  'Built-Up Area: 2,126,529.8 Sqft',
  'Plot No: 6731296',
  'Client: Aqua Skyline Investment Limited',
  'Consultant: Chawla Architectural & Consulting Engineers'
];

$gallery = [
  'images/projects/6.jpg',
  'images/projects/the-central-number-1.jpg',
  'images/projects/unnamed (1).webp',
  'images/projects/unnamed (2).webp',
  'images/projects/unnamed (3).webp',
  'images/projects/unnamed.webp'
];
@endphp
