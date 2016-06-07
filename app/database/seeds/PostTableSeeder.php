<?php 

class PostTableSeeder extends Seeder
{
	public function run()
	{
		$post = new Post();
		$post->title = "Hello World";
		$post->body  = "";
		$post->user_id = User::first()->id;
		$post->save();
	
		$post1 = new Post();
		$post1->title = "";
		$post1->body  = "";
		$post1->user_id = User::first()->id;
		$post1->save();	
	}
}

?>