<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('salary', 'like', '%' . request('search') . '%')
            ->orWhere('location', 'like', '%' . request('search') . '%')
            ->orWhere('schedule', 'like', '%' . request('search') . '%')
            ->get();

        return view('results', [
            'jobs' => $jobs,
            'page_heading' => "Search results for " . request('search')
        ]);
    }
}
