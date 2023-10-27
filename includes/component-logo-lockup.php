<div class="o-logo-lockup">
    <div class="o-logo-lockup__logo">
        <?php if (has_custom_logo()) :
            the_custom_logo();
        else : ?>
            <svg class="sapling" width="80" height="78" viewBox="0 0 80 78" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M24.05 62H27.05C27.3348 58.7619 28.8224 55.748 31.2196 53.5524C33.6167 51.3569 36.7494 50.1391 40 50.1391C43.2506 50.1391 46.3833 51.3569 48.7804 53.5524C51.1776 55.748 52.6652 58.7619 52.95 62H69V56H57.62C56.4065 52.9458 54.4216 50.2586 51.8591 48.2009C49.2966 46.1432 46.2442 44.7854 43 44.26V37H48C51.9782 37 55.7936 35.4196 58.6066 32.6066C61.4197 29.7936 63 25.9782 63 22V15H52C49.6713 15 47.3746 15.5422 45.2918 16.5836C43.209 17.625 41.3972 19.1371 40 21C38.6028 19.1371 36.791 17.625 34.7082 16.5836C32.6254 15.5422 30.3287 15 28 15H17V22C17 25.9782 18.5804 29.7936 21.3934 32.6066C24.2064 35.4196 28.0218 37 32 37H37V44.26C33.7558 44.7854 30.7034 46.1432 28.1409 48.2009C25.5784 50.2586 23.5935 52.9458 22.38 56H11V62H24.05ZM43 30C43 27.6131 43.9482 25.3239 45.636 23.636C47.3239 21.9482 49.6131 21 52 21H57V22C57 24.387 56.0518 26.6761 54.364 28.364C52.6761 30.0518 50.3869 31 48 31H43V30ZM32 31C29.6131 31 27.3239 30.0518 25.636 28.364C23.9482 26.6761 23 24.387 23 22V21H28C30.3869 21 32.6761 21.9482 34.364 23.636C36.0518 25.3239 37 27.6131 37 30V31H32Z" fill="black"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M74 6H6V72H74V6ZM0 0V78H80V0H0Z" fill="black"/>
            </svg>
        <?php endif; ?>
    </div>
    <span class="o-logo-lockup__site-name">
        <?php echo get_bloginfo( 'name' ); ?>
    </span>
    <a class="o-logo-lockup__link" href="<?php echo home_url(); ?>">
        <span class="visually-hidden">Back to homepage</span>
    </a>
</div>