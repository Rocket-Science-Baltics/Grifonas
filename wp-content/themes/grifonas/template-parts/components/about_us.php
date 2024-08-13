<?php
$lang = get_bloginfo('language');
$template_title = 'about-us';

if ($lang === 'lt-LT') {
    $template_title = 'apie-mus';
}

$section_data = get_section_options($args);

$section_options = $args['section_options'];

$section_id = $section_options['section_id'] ?? '';
$section_classes = $section_options['section_classes'] ?? '';
$section_height_class = $section_options['section_height_class'] ?? 'h-auto';
$background_style = $section_options['background_style'] ?? '';
$background_class = $section_options['background_class'] ?? '';
$background_color = $section_options['background_colour'] ?? '';

$section_title = $args['section_title'];
$content_sections = $args['section_content'];

$title = $section_title['section_title'];
$content_title = $section_title['section_content_title'];
?>
<section id="<?php echo $template_title; ?>" class="pb-16 bg-<?php echo $background_color; ?>">
    <div class="container">
        <div class="flex flex-col justify-center items-center mb-[38px]">
            <div>
                <?php echo strtoupper($title); ?>
            </div>
            <div>
                <?php echo $content_title; ?>
            </div>
        </div>
        <div class="section-content grid grid-cols-2 gap-x-[22px]">
            <div class="flex flex-col gap-[16px]">
                <?php foreach ($content_sections['content_left'] as $section): ?>
                    <?php echo $section['section_paragraph']['paragraph']; ?>
                <?php endforeach; ?>
            </div>
            <div class="flex flex-col gap-[16px]">
                <?php foreach ($content_sections['content_right'] as $section): ?>
                    <?php echo $section['section_paragraph']['paragraph']; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
