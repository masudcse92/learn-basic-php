<?php
$post = json_decode(file_get_contents('post.json'));

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-info text-center py-4">Our Blogs</h1>
  
    <div class="row d-flex justify-content-center">
        <?php 
            foreach($post as $posts){
                // echo '<div class="col-4 m-3 border border-primary p-3"> ID: '.$posts->id. 'Title:'.$posts->title. '</div>';
                echo '<div class="col-4 m-3 border border-primary p-3"> <h2 class="text-center"> ID: '.$posts->id. '</h2>'. '<h3 class="text-center text-success">'.$posts->title. '</h3>'.' <p class="text-center">' .$posts->body .'</p>'. '</div>';
                
            }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>