<form method="get" id="searchform" class="search" action="<?php echo home_url(); ?>/">
	<input type="text" class="search" onfocus="if (this.value == '在小裤裤里找找看...') {this.value = '';}" onblur="if (this.value == '') {this.value = '在小裤裤里找找看...';}" value="在小裤裤里找找看..." name="s" id="s" />
	<input type="image" class="search-button" id="searchsubmit" src="<?php echo get_template_directory_uri(); ?>/images/search.png" />
    <div class="clear"></div>
</form>