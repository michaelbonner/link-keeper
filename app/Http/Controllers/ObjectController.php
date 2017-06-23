<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Object;

class ObjectController extends Controller
{

	public function index()
	{
		$objects = Auth::user()->objects;
		return view('object.index', compact( 'objects' ) );
	}

	public function show( Object $object )
	{
		$links = $object->links->sortBy('comment');
		return view('object.show', compact( 'object', 'links' ) );
	}
}
