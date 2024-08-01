<?php
	$postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
?>


<ul class="social-list-share !list-none flex flex-row items-center gap-2" itemscope itemtype="http://schema.org/Organization">
	<li>
		<a target="_blank" class="share-button share-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $postUrl; ?>" title="Share on LinkedIn">
        <?php if (is_singular('post')) { ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="max-w-[35px]"  width="43.138" height="43.138" viewBox="0 0 43.138 43.138">
                <path id="linkedin-icon-logo-svgrepo-com" d="M28.594,7.025A21.569,21.569,0,1,0,50.163,28.594,21.569,21.569,0,0,0,28.594,7.025Zm-5.755,32H18.1v-15.3h4.736Zm-2.39-17.3a2.823,2.823,0,1,1,2.8-2.823A2.812,2.812,0,0,1,20.449,21.718Zm20.138,17.3H35.874V30.99c0-2.2-.837-3.432-2.578-3.432-1.9,0-2.886,1.281-2.886,3.432v8.031H25.867v-15.3H30.41v2.061a5.336,5.336,0,0,1,4.61-2.527c3.244,0,5.567,1.981,5.567,6.079Z" transform="translate(-7.025 -7.025)" fill="#6076ff"/>
            </svg>
        <?php } else { ?> 
            <svg xmlns="http://www.w3.org/2000/svg" width="30.055" height="30.236" viewBox="0 0 30.055 30.236">
                <path id="linkedin-share" d="M29.892,2H4.282A2.192,2.192,0,0,0,2.06,4.162V30.074a2.192,2.192,0,0,0,2.222,2.162h25.61a2.192,2.192,0,0,0,2.222-2.162V4.162A2.192,2.192,0,0,0,29.892,2ZM11.176,27.308H6.641V13.7h4.535ZM8.908,11.8h0a2.358,2.358,0,1,1,0-4.717,2.374,2.374,0,1,1,0,4.717ZM27.534,27.308H23v-7.3c0-1.829-.65-3.024-2.3-3.024a2.494,2.494,0,0,0-2.328,1.648,3.024,3.024,0,0,0-.151,1.1v7.559H13.686V13.686h4.535v1.92a4.535,4.535,0,0,1,4.1-2.268c3.024,0,5.216,1.95,5.216,6.138Z" transform="translate(-2.06 -2)" fill="#1994ba"/>
            </svg>
        <?php } ?>
        </a>
    </li>	
    <li>
		<a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"> 
            <?php if (is_singular('post')) { ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="max-w-[35px]"  width="43.138" height="43.138" viewBox="0 0 43.138 43.138">
                    <g id="twitter-svgrepo-com" transform="translate(0 0)">
                        <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="21.569" cy="21.569" rx="21.569" ry="21.569" transform="translate(0 0)" fill="#6076ff"/>
                        <g id="Group_13" data-name="Group 13" transform="translate(9.651 13.083)">
                        <path id="Path_6" data-name="Path 6" d="M50.233,36.446a10.287,10.287,0,0,1-2.961.811A5.17,5.17,0,0,0,49.539,34.4a10.321,10.321,0,0,1-3.274,1.251,5.16,5.16,0,0,0-8.786,4.7,14.635,14.635,0,0,1-10.627-5.387,5.161,5.161,0,0,0,1.6,6.883,5.12,5.12,0,0,1-2.335-.646c0,.022,0,.044,0,.065a5.159,5.159,0,0,0,4.136,5.055,5.176,5.176,0,0,1-2.328.089A5.161,5.161,0,0,0,32.736,50,10.408,10.408,0,0,1,25.1,52.133,14.662,14.662,0,0,0,47.675,39.781c0-.223-.005-.446-.015-.667a10.455,10.455,0,0,0,2.573-2.668Z" transform="translate(-25.103 -34.028)" fill="#04031a"/>
                        </g>
                    </g>
                </svg>
                <?php } else { ?> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="30.055" height="30.236" viewBox="0 0 30.055 30.236">
                        <g id="Group_64" data-name="Group 64" transform="translate(-579.173 -586.646)">
                            <g id="Group_63" data-name="Group 63" transform="translate(105.996)">
                            <g id="Group_61" data-name="Group 61" transform="translate(-1)">
                                <path id="twitter-share" d="M29.892,2H4.282A2.192,2.192,0,0,0,2.06,4.162V30.074a2.192,2.192,0,0,0,2.222,2.162h25.61a2.192,2.192,0,0,0,2.222-2.162V4.162A2.192,2.192,0,0,0,29.892,2ZM11.176,27.308H6.641V13.7h4.535ZM8.908,11.8h0a2.358,2.358,0,1,1,0-4.717,2.374,2.374,0,1,1,0,4.717ZM27.534,27.308H23v-7.3c0-1.829-.65-3.024-2.3-3.024a2.494,2.494,0,0,0-2.328,1.648,3.024,3.024,0,0,0-.151,1.1v7.559H13.686V13.686h4.535v1.92a4.535,4.535,0,0,1,4.1-2.268c3.024,0,5.216,1.95,5.216,6.138Z" transform="translate(472.117 584.646)" fill="#1994ba"/>
                                <rect id="twitter-share-bg" data-name="Rectangle 88" width="24" height="24" transform="translate(477 590)" fill="#1994ba"/>
                            </g>
                            </g>
                            <path id="twitter" d="M23.309,5.928a9.046,9.046,0,0,1-2.514.682,4.4,4.4,0,0,0,1.928-2.419,8.747,8.747,0,0,1-2.781,1.065,4.368,4.368,0,0,0-7.458,3.985,12.4,12.4,0,0,1-9-4.571,4.432,4.432,0,0,0-.586,2.205,4.358,4.358,0,0,0,1.939,3.633,4.315,4.315,0,0,1-1.982-.543v.053a4.368,4.368,0,0,0,3.516,4.262,4.187,4.187,0,0,1-1.172.181,5.221,5.221,0,0,1-.82-.075,4.379,4.379,0,0,0,4.081,3.026,8.758,8.758,0,0,1-5.391,1.875A8.449,8.449,0,0,1,2,19.224,12.327,12.327,0,0,0,8.7,21.2,12.349,12.349,0,0,0,21.178,8.751V8.186a8.982,8.982,0,0,0,2.131-2.259Z" transform="translate(581.546 589.241)" fill="#090b16"/>
                        </g>
                    </svg>
                <?php } ?>
            
        </a>
    </li>
    <li>
        <a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook">
            <?php if (is_singular('post')) { ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="max-w-[35px]" width="43.138" height="43.137" viewBox="0 0 43.138 43.137">
                    <g id="facebook-logo-2019" transform="translate(0 0)">
                        <path id="Path_95" data-name="Path 95" d="M43.138,21.569A21.569,21.569,0,1,0,18.2,42.875V27.8H12.722V21.569H18.2V16.817c0-5.406,3.22-8.392,8.147-8.392a33.169,33.169,0,0,1,4.828.421v5.308h-2.72c-2.679,0-3.515,1.663-3.515,3.368v4.046h5.982L29.965,27.8H24.939V42.875A21.574,21.574,0,0,0,43.138,21.569Z" transform="translate(0 0)" fill="#6076ff"/>
                        <path id="Path_96" data-name="Path 96" d="M319.243,219.378l.956-6.235h-5.982V209.1c0-1.706.836-3.368,3.515-3.368h2.72v-5.308a33.169,33.169,0,0,0-4.828-.421c-4.927,0-8.147,2.986-8.147,8.392v4.752H302v6.235h5.477V234.45a21.8,21.8,0,0,0,6.74,0V219.378Z" transform="translate(-289.278 -191.575)" fill="#04031a"/>
                    </g>
                </svg>
            <?php } else { ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="30.055" height="30.236" viewBox="0 0 30.055 30.236">
                    <g id="Group_138" data-name="Group 138" transform="translate(-602.169 -696.646)">
                        <g id="Group_65" data-name="Group 65" transform="translate(22.996 110)">
                        <g id="Group_63" data-name="Group 63" transform="translate(105.996)">
                            <g id="Group_61" data-name="Group 61" transform="translate(-1)">
                            <path id="facebook-share" d="M29.892,2H4.282A2.192,2.192,0,0,0,2.06,4.162V30.074a2.192,2.192,0,0,0,2.222,2.162h25.61a2.192,2.192,0,0,0,2.222-2.162V4.162A2.192,2.192,0,0,0,29.892,2ZM11.176,27.308H6.641V13.7h4.535ZM8.908,11.8h0a2.358,2.358,0,1,1,0-4.717,2.374,2.374,0,1,1,0,4.717ZM27.534,27.308H23v-7.3c0-1.829-.65-3.024-2.3-3.024a2.494,2.494,0,0,0-2.328,1.648,3.024,3.024,0,0,0-.151,1.1v7.559H13.686V13.686h4.535v1.92a4.535,4.535,0,0,1,4.1-2.268c3.024,0,5.216,1.95,5.216,6.138Z" transform="translate(472.117 584.646)" fill="#1994ba"/>
                            <rect id="facebook-share-bg" data-name="Rectangle 88" width="24" height="24" transform="translate(477 590)" fill="#1994ba"/>
                            </g>
                        </g>
                        </g>
                        <path id="facebook_1_" data-name="facebook (1)" d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z" transform="translate(605.391 699.765)" fill="#090b16"/>
                    </g>
                </svg>
            <?php } ?>
        </a>
    </li>
		
</ul>