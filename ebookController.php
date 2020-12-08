<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function info(){
        $title = 'E-Book Sharing Application';
        $description = 'This website application provides e-book sharing that you might need in a book store. 
                        Due to COVID-19, we understand that you might want to get the latest and recent 
                        published book by your favourite publisher. We provide you the service on which book 
                        you would like to read online';
        return view('subviews.about', compact('description', 'title'));
    }

    public function details(){
        $title = 'E-Book Sharing Application';
        $titlebook1 = 'The Last Song';
        $isbnbook1 = '9781600246388';
        $catbook1 = 'Romance';
        $pagesbook1 = '405 pages';
        $titlebook2 = 'The Vampire Diaries: The Fury';
        $isbnbook2 = '9780061059919';
        $catbook2 = 'Paranormal';
        $pagesbook2 = '285 pages';
        $titlebook3 = 'The Book Of Strange New Things';
        $isbnbook3 = '9780553418842';
        $catbook3 = 'Fantasy & Science Fiction';
        $pagesbook3 = '500 pages';
        return view('subviews.list', 
                    compact('title', 'titlebook1', 'isbnbook1', 'catbook1', 'pagesbook1',
                                    'titlebook2', 'isbnbook2', 'catbook2', 'pagesbook2',
                                    'titlebook3', 'isbnbook3', 'catbook3', 'pagesbook3' ));
    }
    public function index(){
        return view('subviews.master');
    }
    public function index1(){
        return view('subviews.nav');
    }
}
