<div class="o-logo-lockup">
    <?php if (has_custom_logo()) :
        the_custom_logo();
    else : ?>
        <svg width="58" height="47" viewBox="0 0 58 47" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.05 47H16.05C16.3348 43.7619 17.8224 40.748 20.2196 38.5524C22.6167 36.3569 25.7494 35.1391 29 35.1391C32.2506 35.1391 35.3833 36.3569 37.7804 38.5524C40.1776 40.748 41.6652 43.7619 41.95 47H58V41H46.62C45.4065 37.9458 43.4216 35.2586 40.8591 33.2009C38.2966 31.1432 35.2442 29.7854 32 29.26V22H37C40.9782 22 44.7936 20.4196 47.6066 17.6066C50.4197 14.7936 52 10.9782 52 7V0H41C38.6713 0 36.3746 0.542176 34.2918 1.58359C32.209 2.62501 30.3972 4.13706 29 6C27.6028 4.13706 25.791 2.62501 23.7082 1.58359C21.6254 0.542176 19.3287 0 17 0H6V7C6 10.9782 7.58035 14.7936 10.3934 17.6066C13.2064 20.4196 17.0218 22 21 22H26V29.26C22.7558 29.7854 19.7034 31.1432 17.1409 33.2009C14.5784 35.2586 12.5935 37.9458 11.38 41H0V47H13.05ZM32 15C32 12.6131 32.9482 10.3239 34.636 8.63604C36.3239 6.94821 38.6131 6 41 6H46V7C46 9.38695 45.0518 11.6761 43.364 13.364C41.6761 15.0518 39.3869 16 37 16H32V15ZM21 16C18.6131 16 16.3239 15.0518 14.636 13.364C12.9482 11.6761 12 9.38695 12 7V6H17C19.3869 6 21.6761 6.94821 23.364 8.63604C25.0518 10.3239 26 12.6131 26 15V16H21Z" fill="black"/>
        </svg>
    <?php endif; ?>
    <div class="o-logo-lockup__title">
        <span class="o-header__site-name">
            <?php echo get_bloginfo( 'name' ); ?>
        </span>
        <a class="o-logo-lockup__link" href="<?php echo home_url(); ?>">
            <span class="visually-hidden">Back to homepage</span>
        </a>
    </div>
</div>