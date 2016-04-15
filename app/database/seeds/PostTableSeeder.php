<?php 


class PostTableSeeder extends Seeder
{
	public function run()
	{
		$post = new Post();
		$post->title = 'Hello World!';
		$post->body = 'Test...';
		$post->user_id = User::first()->id;
		$post->save();
	}
}
 ?>