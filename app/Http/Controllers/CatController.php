<?php namespace Furbook\Http\Controllers;

use Furbook\Cat;
use Furbook\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Input;

class CatController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cats = Cat::all();

		return view('cats.index')->with('cats', $cats);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cats.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$cat = Cat::create(Input::all());

		return redirect('cats/'.$cat->id)
			->withSuccess('Cat has been created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Cat  $cat
	 * @return Response
	 */
	public function show(Cat $cat)
	{
		return view('cats.show')->with('cat', $cat);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Cat  $cat
	 * @return Response
	 */
	public function edit(Cat $cat)
	{
		return view('cats.edit')->with('cat', $cat);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Cat  $cat
	 * @return Response
	 */
	public function update(Cat $cat)
	{
		$cat->update(Input::all());

		return redirect('cats/'.$cat->id)
			->withSuccess('Cat has been updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Cat  $cat
	 * @return Response
	 */
	public function destroy(Cat $cat)
	{
		$cat->delete();

		return redirect('cats')
			->withSuccess('Cat has been deleted.');
	}

}
