<?php
// Template Name: my custom 
// Enqueue custom styles

get_header(); // Include your header template

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        // The WordPress Loop
        while (have_posts()) :
            the_post();

            // Output the title of the page
            echo '<h1>' . get_the_title() . '</h1>';

            // Output the content of the page
            the_content();

        endwhile;
        ?>

    </main>
</div>

<?php
get_footer(); // Include your footer template
?>

?>