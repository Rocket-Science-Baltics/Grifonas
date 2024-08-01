<?php

$instagram = get_field('instagram_link', 'options');
$linkedin = get_field('linkedin_link', 'options');
$twitter = get_field('twitter_link', 'options');
$facebook = get_field('facebook_link', 'options');

?>

<ul class="social-list flex mt-2 gap-4 justify-center md:justify-start" itemscope itemtype="http://schema.org/Organization">
	<?php if($instagram == ""): ?>
	<?php else: ?>
		<li>
			<a href="<?php echo $instagram; ?>" target="_blank" itemprop="sameAs" class="icon">
				<?php echo file_get_contents(get_template_directory() . '/dist/img/social-icons/instagram.svg') ?>
			</a>
		</li>
	<?php endif; ?>
    <?php if($linkedin == ""): ?>
	<?php else: ?>
		<li>
			<a href="<?php echo $linkedin; ?>" target="_blank" itemprop="sameAs" class="icon">
                <?php echo file_get_contents(get_template_directory() . '/dist/img/social-icons/linkedin.svg') ?>
			</a>
		</li>
	<?php endif; ?>
	<?php if($twitter == ""): ?>
	<?php else: ?>
		<li>
			<a href="<?php echo $twitter; ?>" target="_blank" itemprop="sameAs" class="icon">
                <?php echo file_get_contents(get_template_directory() . '/dist/img/social-icons/twitter.svg') ?>
			</a>
		</li>
	<?php endif; ?>
	<?php if($facebook == ""): ?>
	<?php else: ?>
		<li>
			<a href="<?php echo $facebook; ?>" target="_blank" itemprop="sameAs" class="icon">
                <?php echo file_get_contents(get_template_directory() . '/dist/img/social-icons/facebook.svg') ?>
			</a>
		</li>
	<?php endif; ?>
</ul>
