@extends('projects.project-detail')

@php
$title = 'Pearlshire - Bond Enclave';
$subtitle = 'A premium commercial development representing next-generation architectural craftsmanship.';
$heroImage = asset('images/projects/Front View.jpg');
$mainImage = asset('images/projects/Front View.jpg');

$description = "
Pearlshire – Bond Enclave is a landmark commercial development crafted with precision and vision by Globecon Construction LLC. 
Designed to reflect modern commercial needs, the project combines structural excellence, energy-efficient planning, 
and contemporary aesthetics. 

From its clean facade lines to its highly functional internal planning, every detail of Pearlshire Bond Enclave is engineered 
to enhance business experience, improve operational flow, and deliver long-term sustainability.
";

$highlights = [
  'Premium Commercial Development',
  'Modern & Sustainable Architecture',
  'High-End Facade and Structural Finishing',
  'Efficient Spatial Planning',
  'Delivered with Quality & Precision'
];

$gallery = [
  'images/projects/Front View.jpg',
  'images/projects/Perspective 02.jpg',
  'images/projects/Rear View.jpg',
  'images/projects/Perspective 01.jpg',
  'images/projects/Deck View.jpg'
];
@endphp
