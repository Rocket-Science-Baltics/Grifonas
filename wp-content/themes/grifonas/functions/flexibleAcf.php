<?php
function get_section_options($args) {
    // Include section options
    $section_options = json_decode(section_options(), true);

    // Extract the variables from section options
    $section_id = $section_options['section_id'] ?? '';
    $section_classes = $section_options['section_classes'] ?? '';
    $section_height_class = $section_options['section_height'] === 'h-screen' ? 'h-full' : 'h-auto';
    $section_bg_image = $section_options['section_background_image']['url'] ?? '';
    $section_bg_colour = $section_options['section_bg_colour'] ?? '';

    // Prepare background style and class
    $background_style = '';
    $background_class = '';

    if (!empty($section_bg_image)) {
        $background_style = "background-image: url('{$section_bg_image}'); background-size: cover; background-repeat: no-repeat; background-position: center;";
    } elseif (!empty($section_bg_colour)) {
        $background_class = "bg-{$section_bg_colour}";
    }

    return [
        'section_id' => $section_id,
        'section_classes' => $section_classes,
        'section_height_class' => $section_height_class,
        'background_style' => $background_style,
        'background_class' => $background_class,
    ];
}

function section_options() {
    $padding = $args['section_options']['padding_applied'] ?? 'both';
    $size = $args['section_options']['section_padding'] ?? 'large';

    $margin = $args['section_options']['margin_applied'] ?? 'both';
    $m_size = $args['section_options']['section_margin'] ?? 'large';

    $section_id = $args['section_options']['section_id'] ?? '';
    $section_class = $args['section_options']['section_class'] ?? '';
    $section_background_image = $args['section_options']['background_image'] ?? '';
    $section_bg_colour = $args['section_options']['background_colour'] ?? '';
    $full_height = $args['section_options']['full_height_section'] ?? 'no'; // Default to 'no'

// Mapping for padding and margin classes
    $padding_map = [
        'only_top' => 'pt-',
        'only_bottom' => 'pb-',
        'both' => 'py-',
    ];

    $margin_map = [
        'only_top' => 'mt-',
        'only_bottom' => 'mb-',
        'both' => 'my-',
    ];

// Size mapping for different screen sizes
    $size_map = [
        'tiny' => ['8', '4'],  // Desktop, Mobile
        'small' => ['16', '8'],
        'medium' => ['24', '12'],
        'big' => ['32', '16'],
    ];

// Function to build responsive class
// Check if the function isn't already declared
    if (!function_exists('build_responsive_class')) {
        function build_responsive_class($base, $size_key, $map) {
            if (isset($map[$size_key])) {
                [$desktop_size, $mobile_size] = $map[$size_key];
                return $base . $desktop_size . ' max-lg:' . $base . $mobile_size;
            }
            return '';
        }
    }

// Build padding and margin classes using the function
    $section_padding = build_responsive_class($padding_map[$padding] ?? 'py-', $size, $size_map);
    $section_margin = build_responsive_class($margin_map[$margin] ?? 'my-', $m_size, $size_map);


// Height class based on full height option
    $section_height = $full_height === 'yes' ? 'lg:h-screen' : 'h-auto';

// Combine all classes
    $classes = trim("$section_padding $section_margin $section_height $section_class");

// Prepare data for return
    $data = [
        'section_classes' => $classes, // Contains all the classes
        'section_id' => $section_id,
        'section_height' => $section_height,
        'section_background_image' => $section_background_image,
        'section_bg_colour' => $section_bg_colour
    ];

// Return the data as a JSON object
    return json_encode($data);
}