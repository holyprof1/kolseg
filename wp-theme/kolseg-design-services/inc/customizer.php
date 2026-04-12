<?php
function kolseg_customize_register($wp_customize) {
    $wp_customize->add_section(
        'kolseg_home',
        array(
            'title' => __('Homepage Settings', 'kolseg-design-services'),
            'priority' => 30,
        )
    );

    $settings = array(
        'kolseg_hero_title' => 'Full-service design, media, sound, lighting, fabrication, interiors, and event production.',
        'kolseg_hero_text' => 'KOLSEG creates stages, backdrops, pavilions, studio content, portrait work, sound systems, lighting experiences, interiors, and launch-ready environments with the technical ability to deliver the spectacular.',
        'kolseg_phone' => '08054859669',
        'kolseg_whatsapp' => '08025264488',
    );

    foreach ($settings as $key => $default) {
        $wp_customize->add_setting(
            $key,
            array(
                'default' => $default,
                'sanitize_callback' => 'sanitize_text_field',
            )
        );
    }

    $wp_customize->add_control('kolseg_hero_title', array('label' => __('Hero Title', 'kolseg-design-services'), 'section' => 'kolseg_home', 'type' => 'text'));
    $wp_customize->add_control('kolseg_hero_text', array('label' => __('Hero Text', 'kolseg-design-services'), 'section' => 'kolseg_home', 'type' => 'textarea'));
    $wp_customize->add_control('kolseg_phone', array('label' => __('Phone Number', 'kolseg-design-services'), 'section' => 'kolseg_home', 'type' => 'text'));
    $wp_customize->add_control('kolseg_whatsapp', array('label' => __('WhatsApp Number', 'kolseg-design-services'), 'section' => 'kolseg_home', 'type' => 'text'));

    $images = array(
        'kolseg_hero_bg' => array('label' => __('Hero Background', 'kolseg-design-services'), 'fallback' => 'live-studio-main.jpg'),
        'kolseg_hero_main_card' => array('label' => __('Hero Main Studio Image', 'kolseg-design-services'), 'fallback' => 'live-studio-stage.jpg'),
        'kolseg_hero_photo_card' => array('label' => __('Hero Photography Image', 'kolseg-design-services'), 'fallback' => 'photo-hanna-4.jpg'),
        'kolseg_hero_light_card' => array('label' => __('Hero Lighting Image', 'kolseg-design-services'), 'fallback' => 'lighting-stage.jpg'),
    );

    foreach ($images as $setting => $args) {
        $wp_customize->add_setting($setting, array('sanitize_callback' => 'esc_url_raw'));
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                $setting,
                array(
                    'label' => $args['label'],
                    'section' => 'kolseg_home',
                    'settings' => $setting,
                )
            )
        );
    }
}
add_action('customize_register', 'kolseg_customize_register');

