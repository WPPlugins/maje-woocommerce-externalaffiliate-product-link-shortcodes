<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

$return = <<<EOT
<a href="{$product_url}" {$link_target_prop} {$link_title_prop} {$link_rel_prop}>{$content}</a>
EOT;
