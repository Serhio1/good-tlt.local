<div class="search-box clearfix">
    <form method="get" id="search-form" class="search-form clearfix" action="<?php echo esc_url( home_url() ); ?>">                            
        <input type="text" onBlur="if ('' === this.value)
                    this.value = this.defaultValue;" onFocus="if (this.defaultValue === this.value)
                    this.value = '';" value="<?php if (is_search()) echo esc_attr(get_search_query());
                    else _e('Поиск', kopa_get_domain()); ?>..." name="s" class="search-text" maxlength="20">
        <input type="submit" value="" name="" class="search-submit">
    </form><!-- search-form -->   
</div><!--end:search-box-->