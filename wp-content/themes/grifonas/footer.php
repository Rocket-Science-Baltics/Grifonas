<?php
$copyright = get_field('content_left', 'options');
$privacyPage = get_field('content_right', 'options');
?>
        </div>
    </div>
    <footer class="bg-aliceBlueGR border-t border-blueGR py-5">
        <div class="container">
            <div class="flex justify-between items-center w-full px-2.5">
                <div class="text-brownGR"><?php echo $copyright; ?></div>
                <div><a href="<?php echo $privacyPage; ?>" class="text-brownGR"><?php echo __('Privatumo politika', 'theme'); ?></a></div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>

</html>