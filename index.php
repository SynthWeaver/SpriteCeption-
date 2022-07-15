<?php include_once("rules.php"); ?>

<!doctype html> <!-- HTML5 -->
<html lang="en">
<head>
    <!-- Set character encoding for the document -->
    <meta charset="utf-8">

    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <!-- Document Title -->
    <title>Title</title>

    <!-- Meta Description -->
    <meta name="description" content="Description of the page less than 150 characters">

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Screen -->
    <main>
        <!-- Map layer -->
        <div id="map_layer">
            <!-- Floor layer -->
            <img src="img/chunk0.png">

            <!-- Block layer -->

        </div>
        
        <!-- Player layer -->
        <div id="player_container">
            <div id="player"></div>
        </div>        
    </main>
</body>
</html>