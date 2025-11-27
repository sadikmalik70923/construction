@extends('projects.project-detail')

@php
$title = 'Empire Residence – Jumeirah Village Circle';
$subtitle = 'A statement of luxury and innovation in the heart of JVC, combining elegance, comfort, and sustainability.';
$heroImage = asset('images/projects/2024-09-15.webp');
$mainImage = asset('images/projects/2024-09-15.webp');

$description = "Empire Residence by Globecon Construction redefines luxury living in Jumeirah Village Circle. 
The project reflects architectural precision, modern design, and a focus on premium urban lifestyle. 
With spacious interiors, top-tier amenities, and sustainable materials, Empire Residence stands as a true testament to Globecon’s 
commitment to innovation and timeless construction quality.";

$highlights = [
  'Location: Jumeirah Village Circle, Dubai',
  'Configuration: G + 4P + 15 Floors + Roof',
  'Built Up Area: 200,000 sq.ft',
  'Plot No: JVC17TCP002B',
  'Client: M/s Sohail Admani',
  'Consultant: Model Engineering Consultant',
  'Main Contractor: ATCON Constructions LLC'
];

$gallery = [
  'images/projects/2024-09-15.webp',
  'images/projects/2025-07-17 (1).webp',
  'images/projects/2025-07-17 (2).webp',
  'images/projects/2025-07-17 (3).webp',
  'images/projects/2025-07-17.webp',
  'images/projects/unnamed.webp'
];
@endphp
