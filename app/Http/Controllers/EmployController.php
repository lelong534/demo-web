<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jobs;
use App\Candidates;
use Carbon\Carbon;
use DB;
use App\Http\Requests\RequestPostCV;

/**
 * 
 */
class EmployController extends Controller
{
	public function grid(Request $req) {
		if (!$req->has('name') && !$req->has('address')) {
			$jobs = DB::table('jobs')->paginate(6);
			foreach ($jobs as $job) {
				$job->expired = Carbon::parse($job->expired)->format('d/m/Y');
			}
			return view('employ', ['jobs' => $jobs]);
		}			
		else {
			$jobs = DB::table('jobs')->where('name', 'like', '%'.$req->name.'%')
				->where('address', $req->address)
				->paginate(6);
			$name = $req->name;
			$address = $req->address;
			foreach ($jobs as $job) {
				$job->expired = Carbon::parse($job->expired)->format('d/m/Y');
			}

			return view('employ', ['jobs' => $jobs, 'name' => $name, 'address' => $address]);
		}
		
	}

	public function getDetail(Request $req) {
		$relate_jobs = Jobs::all()->random(3);
		$job = Jobs::where('id', $req->id)->first();
		$job->expired = Carbon::parse($job->expired)->format('d/m/Y');

		foreach ($relate_jobs as $relate_job) {
			$relate_job->expired = Carbon::parse($relate_job->expired)->format('d/m/Y');
		}

		return view('employ_detail', compact('job', 'relate_jobs'));
	}

	public function postCV(RequestPostCV $req) {
		
		if(!$req->validate()) {
			return back()->withErrors($validate)->withInput();
		}

		$candidate = new Candidates();
		$candidate->name = $req->name;
		$candidate->email = $req->email;
		$candidate->phone = $req->phone;
		$candidate->invitation = $req->invitation;

		//upload file
		$file = $req->cv;
		$file->move('upload', $file->getClientOriginalName());
		$candidate->cv = $file->getClientOriginalName();

		$candidate->save();

		return back();
	}
}
?>