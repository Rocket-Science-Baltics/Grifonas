<?php
$section_data = get_section_options($args);

$section_options = $args['section_options'];

$section_id = $section_options['section_id'] ?? '';
$section_classes = $section_options['section_classes'] ?? '';
$section_height_class = $section_options['section_height_class'] ?? 'h-auto';
$background_style = $section_options['background_style'] ?? '';
$background_class = $section_options['background_class'] ?? '';
$background_color = $section_options['background_colour'] ?? '';

$top_heading = $args['heading']['top_heading'];
$heading = $args['heading'];
$button = $args['button']['button_link'];
$image = $args['image'];
$button_options = $args['button'];

$logo_id = $top_heading['logo']['value']['ID'];
$text = $top_heading['text'];
$heading_text = $heading['heading'];
$description = $heading['description'];
$button_title = $button['title'];
$button_url = $button['url'];
$image_id = $image['ID'];

$background_color = $section_options['background_colour'];
$button_background_color = $button_options['button_background'];
$button_text_color = $button_options['button_text_color'];
$button_rounded = $button_options['button_style'];
?>
<section id="landing-banner" class="bg-aliceBlueGR">
    <div class="relative banner-clip-path pt-[145px] pb-[151px] bg-<?php echo $background_color; ?>">
        <div class="container">
            <div class="flex flex-row">
                <div class="w-1/2">
                    <div class="flex gap-[13px] mb-[23px]">
                        <?php echo wp_get_attachment_image($logo_id, 'full', ''); ?>
                        <?php echo $text; ?>
                    </div>
                    <div class="mb-[19px]">
                        <?php echo $heading_text; ?>
                    </div>
                    <div class="mb-[24px]">
                        <?php echo $description; ?>
                    </div>
                    <div class="">
                        <a href="<?php echo $button_url; ?>" class="inline-block bg-<?php echo $button_background_color; ?> text-<?php echo $button_text_color; ?> <?php echo ($button_rounded) ? 'rounded-[8px]' : ''; ?> py-[15px] px-12">
                            <?php echo $button_title; ?>
                        </a>
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="absolute w-1/2 right-0 top-0 h-full bg-[url('http://grifonas.rsdev.lt/wp-content/uploads/2024/08/717199f8e3291381ec0bdfb1e287576b.webp')] bg-cover bg-no-repeat bg-banner-image-position"></div>
                </div>
            </div>
        </div>
    </div>
</section>

