<?php
/**
 * Template Name: Single Scroll Page
 * Description: A simple single-scroll WordPress theme with a header and a placeholder for a banner image.
 */

get_header(); ?>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        text-align: center;
        background-color: #f4f4f4;
    }
    .header {
        background-color: #ff4081;
        color: white;
        padding: 20px;
    }
    .banner {
        width: 100%;
        height: 400px;
        background-color: #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: #555;
    }
    .content {
        padding: 40px;
        max-width: 800px;
        margin: 0 auto;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }
    .footer {
        margin-top: 20px;
        padding: 10px;
        font-size: 0.9rem;
        color: #555;
    }
</style>

<div class="header">
    <h1>Welcome to My WordPress Theme</h1>
</div>

<div class="banner">
    Banner Image Placeholder
</div>

<div class="content">
    <p>This is a simple single-scroll page theme for WordPress. Customize it as needed.</p>
</div>

<div class="footer">
    <p>&copy; <?php echo date('Y'); ?> My WordPress Theme. All rights reserved.</p>
</div>

<?php get_footer(); ?>
