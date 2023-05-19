<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $arguments = [
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
            [
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem magnam tempora vel.'
            ],
        ];
        return view('index', ['arguments' => $arguments]);
    }
}
