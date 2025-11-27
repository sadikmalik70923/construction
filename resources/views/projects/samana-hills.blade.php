@extends('projects.project-detail')

@php
$title = 'Samana Hills';
$subtitle = 'A modern residential development that blends contemporary design with serene community living in the heart of Arjan, Dubai.';
$heroImage = asset('images/projects/samana out (10).webp');
$mainImage = asset('images/projects/samana out2 (14).webp');

$description = "Samana Hills is an elegant residential project executed by Globecon Construction, located in the dynamic community of Arjan, Dubai. 
The development features a thoughtfully designed low-rise structure comprising G + 5 Floors + Roof, offering a tranquil environment with resort-style amenities. 
With a total built-up area of 123,583 sq.ft., the project focuses on modern aesthetics, energy efficiency, and resident comfort. 
Commissioned by M/s Samana International Real Estate Development and managed by AREC Engineering Consultants, Samana Hills stands as a hallmark of sustainable and modern urban design.";

$highlights = [
  'Location: Arjan, Dubai',
  'Configuration: G + 5 Floors + Roof',
  'Built-Up Area: 123,583 sq.ft.',
  'Plot No: 6731103',
  'Client: M/s Samana International Real Estate Development',
  'Consultant: AREC Engineering Consultants'
];

$gallery = [
  'images/projects/samana out (10).webp',
  'images/projects/samana out2 (14).webp',
  'images/projects/unnamed (1).webp',
  'images/projects/unnamed (2).webp',
  'images/projects/unnamed (3).webp',
  'images/projects/unnamed (4).webp',
  'images/projects/unnamed.webp'
];
@endphp
