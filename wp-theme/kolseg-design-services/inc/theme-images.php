<?php
if (!defined('ABSPATH')) {
    exit;
}

function kolseg_get_theme_image_catalog() {
    return array(
        'kolseg_navigation_images' => array(
            'title' => __('Navigation Preview Images', 'kolseg-design-services'),
            'priority' => 31,
            'images' => array(
                'kolseg_nav_media_image' => array(
                    'label' => __('Services Menu Media Preview', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-photo-cover.jpg',
                ),
                'kolseg_nav_production_image' => array(
                    'label' => __('Services Menu Production Preview', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-audio-main.jpg',
                ),
                'kolseg_nav_build_image' => array(
                    'label' => __('Services Menu Build Preview', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-design-main.jpg',
                ),
            ),
        ),
        'kolseg_home_images' => array(
            'title' => __('Homepage Images', 'kolseg-design-services'),
            'priority' => 32,
            'images' => array(
                'kolseg_hero_bg' => array(
                    'label' => __('Hero Background', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-events-main.jpg',
                ),
                'kolseg_hero_main_card' => array(
                    'label' => __('Hero Main Feature', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-events-alt-1.jpg',
                ),
                'kolseg_hero_photo_card' => array(
                    'label' => __('Hero Media Card', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-photo-main.jpg',
                ),
                'kolseg_hero_light_card' => array(
                    'label' => __('Hero Lighting Card', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-lighting-main.jpg',
                ),
            ),
        ),
        'kolseg_service_images' => array(
            'title' => __('Service & Portfolio Images', 'kolseg-design-services'),
            'priority' => 33,
            'images' => array(
                'kolseg_media_primary_image' => array(
                    'label' => __('Photography Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-photo-main.jpg',
                ),
                'kolseg_media_secondary_image' => array(
                    'label' => __('Photography Secondary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-photo-alt-1.jpg',
                ),
                'kolseg_media_detail_image' => array(
                    'label' => __('Photography Detail', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-photo-alt-2.jpg',
                ),
                'kolseg_media_cover_image' => array(
                    'label' => __('Photography Cover', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-photo-cover.jpg',
                ),
                'kolseg_podcast_primary_image' => array(
                    'label' => __('Podcast Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-podcast-main.jpg',
                ),
                'kolseg_podcast_secondary_image' => array(
                    'label' => __('Podcast Secondary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-podcast-alt-1.jpg',
                ),
                'kolseg_agency_primary_image' => array(
                    'label' => __('Agency / Brand Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-brand-building.jpg',
                ),
                'kolseg_sound_primary_image' => array(
                    'label' => __('Sound / PA Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-sound-main.jpg',
                ),
                'kolseg_sound_secondary_image' => array(
                    'label' => __('Sound / PA Secondary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-sound-alt-2.jpg',
                ),
                'kolseg_lighting_primary_image' => array(
                    'label' => __('Lighting Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-lighting-main.jpg',
                ),
                'kolseg_lighting_secondary_image' => array(
                    'label' => __('Lighting Secondary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-lighting-alt-1.jpg',
                ),
                'kolseg_audio_primary_image' => array(
                    'label' => __('Audio Production Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-audio-main.jpg',
                ),
                'kolseg_audio_secondary_image' => array(
                    'label' => __('Audio Production Secondary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-audio-alt-1.jpg',
                ),
                'kolseg_design_primary_image' => array(
                    'label' => __('Design / Fabrication Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-design-main.jpg',
                ),
                'kolseg_design_secondary_image' => array(
                    'label' => __('Design / Fabrication Secondary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-design-alt-1.jpg',
                ),
                'kolseg_design_detail_image' => array(
                    'label' => __('Design / Fabrication Detail', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-design-alt-2.jpg',
                ),
                'kolseg_events_primary_image' => array(
                    'label' => __('Events Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-events-main.jpg',
                ),
                'kolseg_events_secondary_image' => array(
                    'label' => __('Events Secondary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-events-alt-1.jpg',
                ),
                'kolseg_events_detail_image' => array(
                    'label' => __('Events Detail', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-events-alt-2.jpg',
                ),
                'kolseg_contracts_primary_image' => array(
                    'label' => __('Contracts / Rentals Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-contracts-main.jpg',
                ),
                'kolseg_technical_primary_image' => array(
                    'label' => __('Technical Support Primary', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-technical-main.jpg',
                ),
            ),
        ),
        'kolseg_brand_images' => array(
            'title' => __('Brand Story Images', 'kolseg-design-services'),
            'priority' => 34,
            'images' => array(
                'kolseg_about_story_image' => array(
                    'label' => __('About Story Image', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-events-alt-2.jpg',
                ),
                'kolseg_contact_cta_image' => array(
                    'label' => __('Contact CTA Background', 'kolseg-design-services'),
                    'fallback' => 'services-drive/service-photo-cover.jpg',
                ),
            ),
        ),
    );
}

function kolseg_get_theme_image_setting_map() {
    static $settings = null;

    if (null !== $settings) {
        return $settings;
    }

    $settings = array();
    foreach (kolseg_get_theme_image_catalog() as $group) {
        if (empty($group['images']) || !is_array($group['images'])) {
            continue;
        }

        foreach ($group['images'] as $setting => $image) {
            $settings[$setting] = $image;
        }
    }

    return $settings;
}

function kolseg_get_theme_image_meta($setting) {
    $settings = kolseg_get_theme_image_setting_map();
    if (!isset($settings[$setting])) {
        return array();
    }

    return $settings[$setting];
}

function kolseg_get_theme_image_fallback($setting, $fallback = '') {
    $meta = kolseg_get_theme_image_meta($setting);
    $fallback_path = !empty($fallback) ? $fallback : (!empty($meta['fallback']) ? $meta['fallback'] : '');

    if (empty($fallback_path)) {
        return '';
    }

    return trailingslashit(get_template_directory_uri()) . 'assets/images/' . ltrim($fallback_path, '/');
}

function kolseg_replace_theme_image_tokens($content) {
    return preg_replace_callback(
        '/\{\{kolseg_image:([a-z0-9_\-]+)(?:\|([^}]+))?\}\}/i',
        static function ($matches) {
            $setting = sanitize_key($matches[1]);
            $fallback = isset($matches[2]) ? sanitize_text_field(trim($matches[2])) : '';

            return esc_url(kolseg_get_theme_image($setting, $fallback));
        },
        $content
    );
}
