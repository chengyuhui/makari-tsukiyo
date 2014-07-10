<?php
/**
 * Class Makari_Customize
 * Contains methods for customizing the theme customization screen.
 *
 * @package Makari
 * @subpackage Customize
 * @since Makari 1.0
 */
class Makari_Customize {
    /**
     * Hooks into customize_register.
     * We register our settings here.
     *
     * @since Makari 1.0
     * @see add_action('customize_register',$func)
     * @param \WP_Customize_Manager $wp_customize
     */
    public static function register($wp_customize){
        $wp_customize->add_section('sidebar', array(
            'title' => '侧边栏',
            'priority' => 1,
        ));
        $wp_customize->add_setting('sidebar_featured_enabled', array(
            'default' => true,
            'transport' => 'postMessage',
        ));
        $wp_customize->add_setting('sidebar_featured_text', array(
            'default' => '喵',
            'transport' => 'postMessage',
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

    /**
     * Unused.
     *
     * @ignore
     */
    public static function header_output(){

    }

    /**
     * Enqueue the script needed to establish live settings preview.
     *
     * @see add_action('customize_preview_init',$func)
     * @since Makari 1.0
     */
    public static function live_preview(){
        wp_enqueue_script(
            'makari-customizer',
            get_template_directory_uri().'/js/customizer.js',
            array( 'jquery','customize-preview' ),
            '',
            true
        );
    }
}