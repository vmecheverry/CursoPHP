<html>
<head>
    <title>Blog</title>
    <!-- Latest compiled and minified CSS -->
  <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    -->
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog Title</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                
                <?php 
                foreach ($blogPosts as $blogPost ) {
                echo '<div class="blog-post">';
                echo '<h2>'.$blogPost['title'].'</h2>';
                echo '<p>Jan 1, 2020 <a href="">Victor Mario Echeverry</a> </p>';
                echo '<div class="blog-post-image">';
                echo '<img src="images/keyboard.jpg" alt="">';
                echo '</div>';
                echo '<div class="blog-post-content">';
                echo $blogPost['content'];
                echo '</div>';                       
                echo '</div>';
                }
                 ?>
            </div>
            <div class="col-md-4">
                Side Bar
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>This is a Footer <br>
                    <a href="<?php echo BASE_URL; ?>admin"">Admin Panel</a>
                </footer>

            </div>
            
        </div>
    </div>
</body>
</html>

