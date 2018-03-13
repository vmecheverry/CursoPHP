<?php  
namespace App\Controllers;

class IndexController{

	public function getIndex(){
		global $pdo;
		$query=$pdo->prepare('select * from blog_posts order by id desc');
		$query->execute();
		$blogPosts=$query->fetchAll(\PDO::FETCH_ASSOC);
		return render('../views/index.php',['blogPosts'=>$blogPosts]);
	}

	
}
?>
