<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Cache::remember('atcon_projects', now()->addDays(1), function () {
            try {
                $response = Http::get('https://atcon.co/projects/');
                
                if ($response->successful()) {
                    $html = $response->body();
                    $dom = new \DOMDocument();
                    @$dom->loadHTML($html);
                    
                    $xpath = new \DOMXPath($dom);
                    $projectNodes = $xpath->query("//div[contains(@class, 'project-item')]");
                    
                    $projects = [];
                    
                    foreach ($projectNodes as $node) {
                        $titleNode = $xpath->query(".//h3[contains(@class, 'project-title')]", $node)->item(0);
                        $imageNode = $xpath->query(".//img", $node)->item(0);
                        $linkNode = $xpath->query(".//a[contains(@class, 'project-link')]", $node)->item(0);
                        $categoryNode = $xpath->query(".//div[contains(@class, 'project-category')]", $node)->item(0);
                        
                        $project = [
                            'title' => $titleNode ? trim($titleNode->nodeValue) : 'Untitled Project',
                            'image' => $imageNode ? $imageNode->getAttribute('src') : null,
                            'link' => $linkNode ? 'https://atcon.co' . $linkNode->getAttribute('href') : '#',
                            'category' => $categoryNode ? trim($categoryNode->nodeValue) : 'Uncategorized',
                        ];
                        
                        if ($project['image'] && !filter_var($project['image'], FILTER_VALIDATE_URL)) {
                            $project['image'] = 'https://atcon.co' . $project['image'];
                        }
                        
                        $projects[] = $project;
                    }
                    
                    return $projects;
                }
            } catch (\Exception $e) {
                \Log::error('Failed to fetch projects: ' . $e->getMessage());
            }
            
            return [];
        });

        // If no projects found, use sample data
        if (empty($projects)) {
            $projects = $this->getSampleProjects();
        }

        return view('projects', compact('projects'));
    }
    
    private function getSampleProjects()
    {
        return [
            [
                'title' => 'Residential Complex',
                'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'link' => '#',
                'category' => 'Residential'
            ],
            [
                'title' => 'Office Building',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'link' => '#',
                'category' => 'Commercial'
            ],
            [
                'title' => 'Shopping Mall',
                'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'link' => '#',
                'category' => 'Commercial'
            ],
            [
                'title' => 'Bridge Construction',
                'image' => 'https://images.unsplash.com/photo-1479839672679-a46483aa0b3a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'link' => '#',
                'category' => 'Infrastructure'
            ],
            [
                'title' => 'Luxury Villa',
                'image' => 'https://images.unsplash.com/photo-1613490493576-7fde63acd811?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'link' => '#',
                'category' => 'Residential'
            ],
            [
                'title' => 'Hotel & Resort',
                'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'link' => '#',
                'category' => 'Hospitality'
            ]
        ];
    }
}
