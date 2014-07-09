<?php
add_filter('show_admin_bar', '__return_false');
function makari_customize_register($wp_customize)
{
    $wp_customize->add_setting('sidebar_featured_enabled', array(
        'default' => true,
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('sidebar_featured_text', array(
        'default' => '喵',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_section('sidebar', array(
        'title' => '侧边栏',
        'priority' => 1,
    ));
    $wp_customize->add_control('sidebar_featured_enabled', array(
        'label' => '启用提醒方块',
        'section' => 'sidebar',
        'settings' => 'sidebar_featured_enabled',
        'type' => 'checkbox'
    ));
    $wp_customize->add_control('sidebar_featured_text', array(
        'label' => '提醒方块文字(禁用时无效)',
        'section' => 'sidebar',
        'settings' => 'sidebar_featured_text',
        'type' => 'text'
    ));
}

function makari_customizer_live_preview(){
    wp_enqueue_script(
        'makari-customizer',
        get_template_directory_uri().'/js/customizer.js',
        array( 'jquery','customize-preview' ),
        '',
        true
    );
}

function makari_customize_css()
{
    ?>
    <style type="text/css">
        .nav-hot{
            display:<?php echo get_theme_mod('sidebar_featured_enabled')?'block':'none';?>
        }
    </style>
<?php
}
add_action( 'wp_head', 'makari_customize_css');
add_action('customize_register', 'makari_customize_register');
add_action( 'customize_preview_init', 'makari_customizer_live_preview' );