<?php
$copyright = get_field('content_left', 'options');
$privacyPage = get_field('content_right', 'options');
?>
        </div>
    </div>
    <footer class="bg-aliceBlueGR border-t border-blueGR py-5">
        <div class="container">
            <div class="flex justify-between max-sm:flex-col items-center w-full px-2.5">
                <div class="text-brownGR"><?php echo $copyright; ?></div>
                <div class="max-sm:order-3"><a href="https://rocketscience.lt" class="text-brownGR">Made by Rocket Science Baltics</a></div>
                <div><a href="<?php echo $privacyPage; ?>" class="text-brownGR"><?php pll_e('Privatumo politika'); ?></a></div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>

</html>