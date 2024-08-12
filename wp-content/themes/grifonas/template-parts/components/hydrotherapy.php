<?php
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

$title = $section_title['section_title'];
$content_title = $section_title['section_content_title'];
$image_id = $paragraph_section['image']['ID'];
?>
<section id="hydrotherapy" class="pb-[44px] bg-<?php echo $background_color; ?>">
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
                    <div class="flex flex-col gap-[10px] <?php echo $index % 2 ? 'max-w-[734px]' : 'max-w-[357px]'; ?>">
                        <?php
                        $item_image_id = $list_item['list_paragraph']['paragraph_logo']['ID'];
                        $item_paragraph = $list_item['list_paragraph']['paragraph'];
                        $item_additional_paragraph_enabled = $list_item['list_paragraph']['enable_additional_paragraph'];

                        echo '<div class="w-fit">' . wp_get_attachment_image($item_image_id, 'full', '') . '</div>';
                        echo $item_paragraph;

                        if ($item_additional_paragraph_enabled) {
                            $item_additional_paragraph_image_id = $list_item['list_paragraph']['additional_paragraph_logo']['ID'];
                            $item_additional_paragraph = $list_item['list_paragraph']['additional_paragraph'];
                            $item_additional_paragraph_bg = $list_item['list_paragraph']['additional_paragraph_background'];
                            $item_additional_paragraph_tx = $list_item['list_paragraph']['additional_paragraph_text_color'];

                            echo '<div class="flex gap-[19px] items-start bg-' . $item_additional_paragraph_bg . ' text-' . $item_additional_paragraph_tx . ' mt-7 p-[18px] rounded-[8px]">' . wp_get_attachment_image($item_additional_paragraph_image_id, 'full', '') .  $item_additional_paragraph . '</div>';
                        }
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
