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
                <h2>Posts</h2>
            </div>
        </div>
        <div class="row">
            <p>
                <a  class="btn btn-primary" href="<?php echo BASE_URL; ?>admin/posts/create"">New Post</a>
            </p>
            
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php 
                    foreach ($blogPosts as $blogPost) {
                        echo '<tr>';
                        echo '<td>'.$blogPost['title'].'</td>';
                        echo '<td>Edit</td>';
                        echo '<td>Delete</td>';
                        echo '</tr>';
                    }
                    ?>
                    

                </table>
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

