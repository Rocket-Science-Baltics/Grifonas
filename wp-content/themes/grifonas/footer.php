<?php
$copyright = get_field('content_left', 'options');
$privacyPage = get_field('content_right', 'options');
?>
        </div>
    </div>
    <footer class="bg-white border-t border-black py-5">
        <div class="container">
            <div class="flex justify-between items-center w-full px-2.5">
                <div><?php echo $copyright; ?></div>
                <div><a href="<?php echo $privacyPage; ?>"><?php echo __('Privatumo politika', 'theme'); ?></a></div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>

</html>