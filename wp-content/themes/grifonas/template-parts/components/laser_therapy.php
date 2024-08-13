<?php
$lang = get_bloginfo('language');
$template_title = 'laser-therapy';

if ($lang === 'lt-LT') {
    $template_title = 'lazerio-terapija';
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
$paragraph_section = $content_section['section_paragraph'];
$list_section = $content_section['section_list'];
$additional_section_message = $content_section['section_additional_message'];

$title = $section_title['section_title'];
$content_title = $section_title['section_content_title'];
$image_id = $paragraph_section['image']['ID'];
$additional_message_image_id = $additional_section_message['paragraph_logo']['ID'];
$additional_message = $additional_section_message['paragraph'];
$additional_message_bg = $additional_section_message['paragraph_background'];
$additional_message_text_color = $additional_section_message['paragraph_text_color'];
?>
<section id="<?php echo $template_title; ?>" class="pt-[39px] pb-[67px] bg-<?php echo $background_color; ?>">
    <div class="container">
        <div class="flex flex-col justify-center items-center">
            <div>
                <?php echo strtoupper($title); ?>
            </div>
            <div>
                <?php echo $content_title; ?>
            </div>
        </div>
        <div class="section-content">
            <div class="section-top flex flex-col gap-8 my-8">
                <div>
                    <?php echo wp_get_attachment_image($image_id, 'full', '', ['class' => 'w-full rounded-[8px]']); ?>
                </div>
                <div class="flex flex-col gap-[32px]">
                    <?php echo $paragraph_section['paragraph_text']['paragraph']; ?>
                </div>
            </div>
            <div class="flex flex-wrap gap-x-[19px] gap-y-[26px]">
                <?php foreach ($list_section as $index => $list_item): ?>
                    <div class="flex flex-col <?php echo ($list_item['list_paragraph']['paragraph_width'] !== '-') ? 'max-w-[' . $list_item['list_paragraph']['paragraph_width'] . ']' : 'w-full'; ?> <?php echo ($list_item['list_paragraph']['is_paragraph_heading']) ? 'mt-[34px] mb-[33px]' : ''; ?> gap-[10px]">
                        <?php
                        $item_is_paragraph_heading = $list_item['list_paragraph']['is_paragraph_heading'];
                        $item_image_id = $list_item['list_paragraph']['paragraph_logo']['ID'];
                        $item_paragraph = $list_item['list_paragraph']['paragraph'];
                        $item_additional_paragraph_enabled = $list_item['list_paragraph']['enable_additional_paragraph'];

                        if ($item_is_paragraph_heading) {
                            $item_paragraph_heading = $list_item['list_paragraph']['paragraph_heading'];

                            echo '<div class="">' . $item_paragraph_heading . '</div>';
                        } else {
                            echo '<div class="w-fit">' . wp_get_attachment_image($item_image_id, 'full', '') . '</div>';
                            echo $item_paragraph;

                            if ($item_additional_paragraph_enabled) {
                                $item_additional_paragraph_image_id = $list_item['list_paragraph']['additional_paragraph_logo']['ID'];
                                $item_additional_paragraph = $list_item['list_paragraph']['additional_paragraph'];
                                $item_additional_paragraph_bg = $list_item['list_paragraph']['additional_paragraph_background'];
                                $item_additional_paragraph_tx = $list_item['list_paragraph']['additional_paragraph_text_color'];

                                echo '<div class="flex gap-[19px] items-start bg-' . $item_additional_paragraph_bg . ' text-' . $item_additional_paragraph_tx . ' mt-7 p-[18px] rounded-[8px]">' . wp_get_attachment_image($item_additional_paragraph_image_id, 'full', '') .  $item_additional_paragraph . '</div>';
                            }
                        }
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (isset($additional_message_image_id) && isset($additional_message)): ?>
                <?php echo '<div class="flex gap-[19px] items-start ' . (($additional_section_message['paragraph_width'] !== '-') ? 'max-w-[' . $additional_section_message['paragraph_width'] . ']' : 'w-full') . ' bg-' . $additional_message_bg . ' text-' . $additional_message_text_color . ' mt-7 p-[18px] rounded-[8px]">' . wp_get_attachment_image($additional_message_image_id, 'full', '') .  $additional_message . '</div>'; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
