@extends('projects.project-detail')

@php
$title = 'Private Villas';
$subtitle = 'Exclusive luxury residences built with precision, craftsmanship, and timeless design.';
$heroImage = asset('images/projects/WhatsApp-Image-2023-03-07-at-13.24.42.jpeg');
$mainImage = asset('images/projects/WhatsApp-Image-2023-03-07-at-13.24.42.jpeg');

$description = "The Private Villas project represents Globecon Construction’s dedication to luxurious living and architectural excellence. 
Situated in Al Tawar First (Qasis), each villa combines elegant design with functional layouts, premium materials, and refined detailing. 
The project features G + 1F + R configurations, providing spacious, light-filled environments designed for modern family life. 
With AL Musheer Engineering Consultant overseeing the design and Mr. Esmaeil Hassan as the client, the development stands as a testament to bespoke quality and sophistication.";

$highlights = [
  'Location: Al Tawar First (Qasis)',
  'Configuration: G + 1F + R',
  'Plot No: 2260182',
  'Client: Mr. Esmaeil Hassan',
  'Consultant: AL Musheer Engineering Consultant'
];

$gallery = [
  'images/projects/WhatsApp-Image-2023-03-07-at-13.24.42.jpeg',
  'images/projects/799514119-400x300.jpeg',
  'images/projects/f325d675098935.5c43328aa3755.jpg',
  'images/projects/691205137-400x300.jpeg'
];
@endphp
