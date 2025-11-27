@extends('projects.project-detail')

@php
$title = 'Park Vista';
$subtitle = 'A premium residential development offering elegance, comfort, and sustainability in the heart of Jumeirah Village Circle.';
$heroImage = asset('images/projects/2022-03-15.webp');
$mainImage = asset('images/projects/2022-03-15.webp');

$description = "Park Vista by Globecon Construction stands as a testament to sophisticated urban living within Jumeirah Village Circle, Dubai. 
This B + G + 4 Floors + Roof residential structure provides the perfect balance between modern design and practical functionality. 
With a built-up area of 115,936 sq.ft., the project reflects a seamless blend of comfort, quality, and architectural excellence, designed by Emsquare Engineering Consultants.";

$highlights = [
  'Location: Jumeirah Village Circle, Dubai',
  'Configuration: B + G + 4 Floors + Roof',
  'Built Up Area: 115,936 sq.ft.',
  'Plot No: JVC13GMRP006',
  'Client: Mr. Zeeshan Haroon & Imran Haroon',
  'Consultant: Emsquare Engineering Consultants'
];

$gallery = [
  'images/projects/2022-03-15 (1).webp',
  'images/projects/2022-03-15 (2).webp',
  'images/projects/2022-03-15.webp',
  'images/projects/unnamed (1).webp',
  'images/projects/unnamed.webp'
];
@endphp
