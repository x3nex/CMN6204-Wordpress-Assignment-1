<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo get_bloginfo( 'name' ); ?> ~ <?php echo get_bloginfo( 'description' ); ?> </title>
</head>
<body>

<nav id="main-menu">
    <?php wp_nav_menu(['theme_location' => 'main'])  ?>
</nav>


