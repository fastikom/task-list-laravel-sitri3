<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
		public function create()
		{
			$jobs = \App\Job::orderBy('created_at', 'asc')->get();
			return view('tasks.create', compact('jobs'));
		}
		public function store(Request $request)
		{
    		// Validasi data
			$this->validate($request, [
			  'name' => 'required|max:255|min:3',
			]);
		
			// Input data
			\App\Job::create($request->all());
		
			// Jika selesai kita ingin lokasi halamannya dimana.
			return redirect()->back();

		}
		public function delete(Request $request, $id)
		{
			$job = \App\Job::whereId($id)->first();
			$job->delete();
			return redirect()->route('tasks.create');
		}
}

