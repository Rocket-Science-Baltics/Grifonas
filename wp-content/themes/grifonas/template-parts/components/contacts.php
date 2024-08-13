<?php
$lang = get_bloginfo('language');
$template_title = 'contacts';

if ($lang === 'lt-LT') {
    $template_title = 'kontaktai';
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
$content_section = $args['section_content'];
$contacts_section = $content_section['section_contacts'];
$partners_section = $content_section['section_partners'];

$title = $section_title['section_title'];
$content_title = $section_title['section_content_title'];
?>
<section id="<?php echo $template_title; ?>" class="pt-[57px] pb-[82px] bg-<?php echo $background_color; ?>">
    <div class="container">
        <div class="flex flex-col justify-center items-center">
            <div>
                <?php echo strtoupper($title); ?>
            </div>
            <div>
                <?php echo $content_title; ?>
            </div>
        </div>
        <div class="section-content mt-[55px] mb-[49px]">
            <div class="flex justify-between flex-wrap">
                <?php foreach ($contacts_section as $contact_section): ?>
                    <div class="flex flex-col gap-x-[9px] gap-y-[9px]">
                        <div class="contact-title text-<?php echo $contact_section['contact']['contact_title_text_color']; ?>">
                            <?php echo strtoupper($contact_section['contact']['contact_title']); ?>
                        </div>
                        <div class="contact-action-link w-fit">
                            <?php echo '<a href="' . $contact_section['contact']['contact_link']['url'] . '" class="' . $contact_section['contact']['contact_link_text_color'] . '">' . $contact_section['contact']['contact_link']['title'] . '</a>'; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="w-full">
            <?php echo $content_section['map']['google_maps']; ?>
        </div>
        <div class="w-full">
            <div class="flex justify-center mt-[49px] mb-[48px]">
                <?php echo $partners_section['section_partners_title']; ?>
            </div>
            <div class="flex flex-wrap justify-between gap-[20px]">
                <?php foreach ($partners_section['partners'] as $partner): ?>
                    <?php echo wp_get_attachment_image($partner['partner_logo']['ID'], 'full', '', ['class' => 'max-w-[263px] max-h-[105px] rounded-[16px] object-cover']) ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

