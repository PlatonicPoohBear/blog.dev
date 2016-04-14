<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(1);

		return View::make('posts.index', ['posts' => $posts]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
	        Session::flash('errorMessage', 'Failure');

	        return Redirect::action('PostsController@create')->withInput()->withErrors($validator);
	    } else {
	        $post = new Post();
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			Session::flash('successMessage', 'Success');


			return Redirect::action('PostsController@index');
	    }

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('posts.show', ['post' => Post::find($id)]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = [ 'post' => Post::find($id)];
        
        return View::make('posts.edit')->with($post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		$post = Post::find($id);

		if ($validator->fails()) {
	        Session::flash('errorMessage', 'Failure');

	        return Redirect::action('PostsController@edit', $post->id)->withInput()->withErrors($validator);

	    } else {
        
        	$post->title = Input::get('title');
        	$post->body = Input::get('body');
 		
        	$post->save();

        	Session::flash('successMessage', 'Success');

			return Redirect::action('PostsController@show', $post->id);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'Delete a specific post';
	}


}
