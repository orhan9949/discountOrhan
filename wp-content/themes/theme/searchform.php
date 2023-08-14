<div class="header__search">
    <form role="search" method="get" id="searchformheader" action="<?php echo home_url( '/' ) ?>" style="position:relative;">
        <div class="header__search-form">
    <!--		<input type="text" id="search" value="--><?php //echo get_search_query(); ?><!--" name="s" placeholder="Search deals" >-->
            <input type="text" id="search" value="<?php echo get_search_query() ?>" name="s" placeholder="Search deals" />
            <div class="header__search_spinner">
            </div>
            <span class="action__search">
                <svg viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.16667 16.5C12.8486 16.5 15.8333 13.5152 15.8333 9.83329C15.8333 6.15139 12.8486 3.16663 9.16667 3.16663C5.48477 3.16663 2.5 6.15139 2.5 9.83329C2.5 13.5152 5.48477 16.5 9.16667 16.5Z" stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.5 18.1666L13.875 14.5416" stroke="#A3A3A3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <span class="action__search__img" style="opacity: 0;">

                <input
                        type="image"
                        alt="Search"
                        src="<?php bloginfo( 'template_url' ); ?>/images/search.svg"
                />
            </span>
        </div>
<!--        <div class="header__search-result">-->
<!--            <div class="header__search-title">Result</div>-->
<!--            <div class="header__search-list" >-->
<!--                Searching...-->
<!--            </div>-->
<!--        </div>-->
    </form>
</div>