<?php

/*******w******** 
    
    Name: Yulin Liu
    Date: 2024/5/19
    Description: Web2 assginment 1

****************/
//associative array that contains various configuration settings
$config = [
//name
    'gallery_name' => 'YulinGallery',
//Categories from Unsplash to display random images
    'unsplash_categories' => ['wallpaper','architecture','design','photography','travel','view'],
//List of local image filenamesx
    'local_images' => ['maarten-deckers','joel-filipe','leo-manjarrez','piasquare'],
//Information about each local image, including the photographer's name and Unsplash profile URL
    'images-info' => [
        'maarten-deckers' => ['Maarten Deckers', 'https://unsplash.com/@maartendeckers'],
        'joel-filipe' => ['Joel Filipe', 'https://unsplash.com/@joelfilip'],
        'leo-manjarrez' => ['Leo Manjarrez', 'https://unsplash.com/@liogo'],
        'pixasquare' => ['Pixasquare', 'https://unsplash.com/@pixasquare']
    ]
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
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <div class="photogallery">
        <h1 class="phototitle"><?php echo $config['gallery_name']; ?></h1>
        <!-- accesses the value associated with the gallery_name key in the $config array -->
        <div class="photolist">
            <?php foreach ($config['unsplash_categories'] as $category) : ?>
                <!-- This is a foreach loop in PHP. It is used to iterate over each element in the array -->
                <div class="photo">
                    <h2><?php echo $category; ?></h2>
                    <!-- outputs the value of the $category variable -->
                    <img src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?> image">
                    <!-- get a random image related to that category.  -->
                </div>
            <?php endforeach; ?>
            <!-- end the loop -->
        </div>
        <h1 class="phototitle"><?php echo count($config['local_images']); ?> Large Images</h1>
                        <!-- returns the number of elements in the array -->
        <div class="photolocal">
            <?php foreach ($config['local_images'] as $image) : ?>
                <!-- a foreach loop in PHP. iterates over each element in the array -->
                <div>
                    <img src="images/<?php echo $image; ?>.jpg" alt="<?php echo $image; ?>">
                    <?php
                    $photographer_info = $config['images-info'][$image];
                    ?>
                    <!-- variable to hold the info. catch from the array  -->
                    <h2><a href="<?php echo $photographer_info[1]; ?>"><?php echo $photographer_info[0]; ?></a></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>