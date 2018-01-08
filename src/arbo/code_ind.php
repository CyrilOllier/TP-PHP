<?php
 if ($action == "index")
		// exemple URL : http://SITE
		{
			$view_path = constant("SITE_PATH") . "/src/vue/article.php";
			require_once constant("SITE_PATH") . "/src/vue/page.php";
		}
	else
		{
			$view_path = constant("SITE_PATH") . "/src/vue/error.php";
			require_once constant("SITE_PATH") . "/src/vue/page.php";
		}