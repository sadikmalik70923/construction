@extends('projects.project-detail')

@php
$title = 'The Community Sports Arena';
$subtitle = 'A landmark mixed-use development at Dubai Sports City, combining modern architecture with advanced engineering.';
$heroImage = asset('images/projects/2024-10-09.webp');
$mainImage = asset('images/projects/2024-10-09.webp');

$description = "The Community Sports Arena by Globecon Construction redefines modern vertical living and commercial design within Dubai Sports City. 
With four basements, ground, and twenty-four upper floors, this tower demonstrates engineering precision and premium design standards. 
Developed for A6 Properties Limited, and supervised by Barajeel Engineering Consultants, the project highlights Globecon’s ability to manage complex, high-rise developments while ensuring aesthetic excellence and structural sustainability.";

$highlights = [
  'Location: Dubai Sports City',
  'Configuration: 4B + G + 24F + Roof',
  'Plot No: 682135',
  'Client: A6 Properties Limited',
  'Consultant: Barajeel Engineering Consultants'
];

$gallery = [
  'images/projects/2024-10-09.webp',
  'images/projects/unnamed (1).webp',
  'images/projects/unnamed (2).webp',
  'images/projects/unnamed (3).webp'
];
@endphp
