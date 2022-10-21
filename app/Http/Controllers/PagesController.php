<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function about() {
        $names = ['Karim', 'Lars', 'Junbo', 'Dennis']; // indexed array
        $grades = [
            'php' => 7.9,
            'C#'  => 5.6,
            'HTML' => 9.8,
            'javascript' => 4.7
        ]; // associative array


        // string, int, boolean, array, double
        $me = [
            'name' => 'Fedde van Gils',
            'age'  => 37,
            'occupation' => 'teacher',
            'hobbies' => ['making music', 'running', 'Judo', 'Brazilian Jiu Jitsu'],
            'money' => 123.45,
            'isRich' => false
        ];

        return view('about', [
            'me' => $me,
            'names' => $names,
            'grades' => $grades
        ]);
    }

}
