<?php
if (empty($args['flexible_content'])) return;
$layout = !empty($args['layout']) ? $args['layout'] : '';

$flexible_content = $args['flexible_content'];

foreach ($flexible_content as $flexible) :
  if ($layout && file_exists(get_template_directory() . '/template-parts/components/' . $layout . '/' . $flexible['acf_fc_layout'] . '.php')) {
    get_template_part('/template-parts/components/' . $layout . '/' . $flexible['acf_fc_layout'], '', $flexible);
  } else {
    get_template_part('/template-parts/components/' . $flexible['acf_fc_layout'] , '', $flexible);
  }
  ?>

<?php
endforeach;
