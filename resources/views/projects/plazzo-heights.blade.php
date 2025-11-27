@extends('projects.project-detail')

@php
$title = 'Plazzo Heights';
$subtitle = 'A modern residential landmark redefining luxury living in Jumeirah Village Circle, Dubai.';
$heroImage = asset('images/projects/Plazzo_16.webp');
$mainImage = asset('images/projects/unnamed (1).webp');

$description = "The Plazzo Heights development by Globecon Construction is a premium residential complex located in the heart of Jumeirah Village Circle (JVC), Dubai. 
Featuring B + G + P + 5 Floors + Roof, the project blends modern architecture with contemporary comfort and sustainable design. 
With Renaissance Engineering Consultants leading the design vision, and clients M/s Yasir Iqbal & Ayoob Esoof, Plazzo Heights showcases Globecon’s commitment to excellence, precision, and urban sophistication.";

$highlights = [
  'Location: Jumeirah Village Circle, Dubai',
  'Configuration: B + G + P + 5 Floors + Roof',
  'Built Up Area: 140,000 sq.ft.',
  'Plot No: JVC10CMRA006',
  'Client: M/s Yasir Iqbal & Ayoob Esoof',
  'Consultant: Renaissance Engineering Consultants'
];

$gallery = [
  'images/projects/Plazzo_16.webp',
  'images/projects/Plazzo_46.webp',
  'images/projects/unnamed (2).webp',
  'images/projects/unnamed (1).webp'
];
@endphp
