<style>
	/*Theme primary and Secondary colors
	bg = background
	fc = font color*/
	.theme-primary-bg{ background-color: <?= $primary_color ?>; }
	.theme-secondary-bg{ background-color: <?= $secondary_color ?>; }
	.theme-primary-fc{ color: <?= $primary_text ?>; }
	.theme-secondary-fc{ color: <?= $secondary_text ?>; }

	.nav-link,
	.nav-link:visited,
	.vertical-top-menu li a,
	.horizontal-top-menu li a,
	.footer-menu li a{
		text-decoration: none;
		color: <?= $secondary_text ?>;
	}

	.nav-link:hover,
	.nav-link:active,
	.vertical-top-menu li a:hover,
	.horizontal-top-menu li a:hover,
	.footer-menu li a:hover{
		text-decoration: none;
		color: <?= $primary_text ?>;
	}

	#footer{
		border-top-width: 1px;
		border-top-style: solid;
		border-top-color: <?= $secondary_color ?>;
	}

	#mobile-menu{
		border-bottom-width: 1px;
		border-bottom-style: solid;
		border-bottom-color: <?= $secondary_color ?>;
	}
</style>