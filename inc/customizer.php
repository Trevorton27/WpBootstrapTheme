<?php

function wpbtstrp4_customizer( $wp_customize ) {
    //Copyright info
    $wp_customize-> add_section( 'sec-copyright', array(
        'title' => 'Copyright',
        'description' => 'Please, type your copyright info here.',
        'priority' => 105,
    ),);
    $wp_customize-> add_setting( 'set_copyright', array(
        'type' => 'theme_mod',
        'default' => 'Copyright All Hail The Grand Banana',
        'sanitize_callback' => 'esc_attr',
    ),);
    $wp_customize-> add_control( 'ctrl_copyright', array(
        'label' => 'Copyright Information',
        'description' => 'Please type your copyright information here',
        'section'=> 'sec_copyright',
        'settings' => 'set_copyright',
        'type'=> 'text',
    ),);
}

add_action( 'customize_register', 'wpbtstrp4_customizer');