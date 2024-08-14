<?php
$lang = get_bloginfo('language');
$template_title = 'specialists';

if ($lang === 'lt-LT') {
    $template_title = 'specialistai';
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
$image = $args['image'];
$content_sections = $args['section_content'];

$title = $section_title['section_title'];
$content_title = $section_title['section_content_title'];
$image_id = $image['ID'];
?>
<section id="<?php echo $template_title; ?>" class="pt-[39px] bg-<?php echo $background_color; ?>">
    <div class="container">
        <div class="flex justify-between max-md:flex-col">
            <div class="flex flex-col max-md:flex-row mr-[19px] max-md:mr-0 max-md:justify-between">
                <div class="flex flex-col">
                    <div class="mb-[17px]">
                        <?php echo strtoupper($title); ?>
                    </div>
                    <div class="mb-[119px] max-md:mb-0">
                        <?php echo $content_title; ?>
                    </div>
                </div>
                <div>
                    <?php echo wp_get_attachment_image($image_id, 'full'); ?>
                </div>
            </div>
            <div class="flex gap-x-[19px] max-lg:flex-col">
                <?php foreach ($content_sections as $section): ?>
                    <div class="<?php echo ($section['section_paragraph']['paragraph_width'] !== '-') ? 'max-w-[' . $section['section_paragraph']['paragraph_width'] . '] ' : ''; ?><?php echo $section['section_paragraph']['enable_breakline'] ? 'paragraph-w-breakline ' : ''; ?>section-content max-md:max-w-full mt-[46px] px-[33px] py-[35px] bg-<?php echo $section['section_paragraph']['paragraph_background']; ?> rounded-[8px]">
                        <?php if ($section['section_paragraph']['enable_logo'] && isset($section['section_paragraph']['paragraph_logo']['ID'])): ?>
                            <div class="mb-[18px]">
                                <?php echo wp_get_attachment_image($section['section_paragraph']['paragraph_logo']['ID'], 'full'); ?>
                            </div>
                        <?php endif; ?>
                        <?php echo $section['section_paragraph']['paragraph']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
