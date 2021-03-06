<html>
<head>
    <title>Blog</title>
    <!-- Latest compiled and minified CSS -->
   <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog Title</h1>
                <h2>New Post</h2>
            </div>
        </div>
        <div class="row">
            <p>
                <a class="btn btn-default" href="<?php echo BASE_URL;?>admin/posts">Back</a>


            </p>
            <?php 
                if(isset($result) && $result){
                    echo '<div class="alert alert-success">Post Saved!</div>';
                }
                
             ?>
            
        </div>
        <div class="row">
            <div class="col-md-8">
                <form  method="post">
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input type="text" name="title" id="inputTitle" class="form-control">
                    </div>
                    <textarea name="content" id="inputContent" rows="5" class="form-control"></textarea>
                        <br>
                        <input  class="btn btn-primary" type="submit" value="Save" >
                </form>
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

