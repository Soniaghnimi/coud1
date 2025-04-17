<?php /**
* The header for our theme
*
* This is the template that displays all of the header section
*
* @package Astral
* @since 0.1
*/
/* 
* Functions hooked into astral_action_doctype action
*
* @hooked astral_doctype
*/
do_action( 'astral_action_doctype' );
?>
<head>
<?php 
    /* 
    * Functions hooked into astral_head_section action
    *
    * @hooked astral_head
    */
    do_action( 'astral_head_section' );
    wp_head();
?>
<!-- Charger Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- CSS personnalisé directement dans header.php -->
<style>
/* Fixer la largeur de la barre de recherche */
.search-bar-container {
    flex-grow: 0 !important;
    width: 300px !important;
    padding: 0 10px;
}

.search-form {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 20px;
    width: 100%;
}

.search-form input[type="search"] {
    background-color: transparent;
    color: #000;
    border: none;
    padding: 8px;
    font-size: 14px;
    width: 100%;
}

.search-form i {
    color: #000;
    font-size: 20px;
    padding-left: 10px;
    cursor: pointer;
}
</style>

</head>

<?php $astral_layout = get_theme_mod( 'astral_layout' ); ?>
<body <?php if($astral_layout==2) { body_class('boxed'); } else body_class(); ?>>

<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'astral' ); ?></a>

<header id="site-header" style="width: 100%; padding: 10px 0;">
    <div class="logo-container" style="display: flex; align-items: center; gap: 30px; width: 100%; justify-content: space-between;">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="http://localhost/wordpress/wp-content/uploads/2025/04/logo-removebg-preview-1.png" alt="Logo" style="max-height: 80px;">
        </a>

        <!-- Barre de recherche -->
        <div class="search-bar-container">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: flex; align-items: center;">
                <i class="fas fa-search" onclick="this.closest('form').submit();" style="font-size: 20px; color: #000; padding-left: 10px; cursor: pointer;"></i>
                <input type="search" class="search-field" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" title="Search for:" style="padding: 8px; font-size: 14px; border: none; background-color: transparent; color: #000;">
            </form>
        </div>

        <!-- Icônes panier, profil et favoris -->
        <div class="header-icons" style="display: flex; gap: 20px; align-items: center;">
            <!-- Panier -->
            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart-icon">
                <i class="fas fa-shopping-cart" style="font-size: 30px; color: #fff;"></i>
            </a>
            <!-- Profil -->
            <a href="<?php echo esc_url( wp_login_url() ); ?>" class="profile-icon">
                <i class="fas fa-user" style="font-size: 30px; color: #fff;"></i>
            </a>
            <!-- Favoris (Cœur) -->
            <a href="<?php echo esc_url( get_permalink( get_option( 'yith_wcwl_wishlist_page_id' ) ) ); ?>" class="favorites-icon">
                <i class="fas fa-heart" style="font-size: 30px; color: #fff;"></i>
            </a>
        </div>
    </div>
</header>

<?php
do_action( 'astral_body_start' );
do_action( 'astral_top_menus' );
?>
