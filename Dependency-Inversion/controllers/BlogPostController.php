<?php

class BlogPostController 
{
	function save($data)
	{
		$dbhandle = new SQLite3('Data/MyBlog');

		$query = 'INSERT INTO BlogPosts VALUES("' . $data['title'] . '","' . $data['content'] . '","' . time() . '")"';
		$dbhandle->exec($query);
	}
}

$this->object = new BlogPostController;

$data['title'] = 'First Post Title';
$data['content'] = 'Some cool content';
$data['published_timestamp'] = time();

$this->object->save($data);
