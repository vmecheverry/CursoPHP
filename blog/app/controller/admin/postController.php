<?php 
namespace App\Controllers\Admin;

class PostController
{
	
	public function getIndex()
	{
		//admin/post or admin/post/index
		global $pdo;
		$query=$pdo->prepare('select * from blog_posts order by id desc');
		$query->execute();
		$blogPosts=$query->fetchAll(\PDO::FETCH_ASSOC);
		return render('../views/admin/posts.php',['blogPosts'=>$blogPosts]);
	}

	public function getCreate()
	{
		//admin/post/create
		return render('../views/admin/insert-post.php');
	}

	public function postCreate()
	{
		//admin/post/create
		global $pdo;	
		$sql='INSERT INTO blog_posts (title,content) values(:title,:content)';
		$result=false;
	    $query=$pdo->prepare($sql);
	    $result=$query->execute([
	        'title'=>$_POST['title'],
	        'content'=>$_POST['content']
	    ]);
	    return render('../views/admin/insert-post.php',['result'=>$result]);
	}
}
 ?>