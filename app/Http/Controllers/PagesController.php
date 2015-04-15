<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		$lessons = ['my first lesson', 'my second lesson', 'my third lesson'];
		$name = 'John Doe';

		return view('pages.home', ['name' => $name, 'lessons' => $lessons]);
	}
}
