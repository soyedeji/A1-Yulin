<?php

/*******w******** 
    
    Name: Yulin Liu
    Date: 2024/5/19
    Description: Web2 assginment 1

****************/

$config = [

    'gallery_name' => 'YulinGallery',
 
    'unsplash_categories' => ['wallpaper','architecture','design','photography','travel','view'],
 
    'local_images' => ['maarten-deckers','joel-filipe','leo-manjarrez','pixasquare'],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Assignment 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
</head>

<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <div class="photogallery">
        <h1 class="phototitle"><?php echo $config['gallery_name']; ?></h1>
        <!-- accesses the value associated with the gallery_name key in the $config array -->
        <div class="photolist">
            <?php foreach ($config['local_images'] as $image) : ?>
                <div class="photo">
                    <h2><?php echo $image; ?></h2>
                    <a href="images/<?php echo $image; ?>.jpg">
                    <!-- create a hyperlink which is full-size image, include the filename from the $image variable -->
                    <img src="images/<?php echo $image; ?>_thumbnail.jpg" alt="<?php echo $image; ?>">
                    <!-- attribute specifies the URL of the image to be displayed, which is the thumbnail image -->
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
    <script>
    // This event listener ensures that the JavaScript code is executed only after the HTML content has been fully loaded
    document.addEventListener("DOMContentLoaded", function(){
        new LuminousGallery(document.querySelectorAll(".photolist a"));
        // This part creates a new instance of the LuminousGallery image gallery, querySelectorAll method , create a selector to return all matching elements. with the class "photolist"
    });
    </script>
</html>