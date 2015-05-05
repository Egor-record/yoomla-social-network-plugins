<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


defined('_JEXEC') or die;

echo "string";
exit();
 $facebook_empty_input == "";

	if ($params->get('facebook-href') == $facebook_empty_input;){

		$facebook_input == "none";

	} else {

		$facebook_input == $params->get('facebook-href');
	}

$google_plus_empty_input == "";

	if ($params -> get('google-href') == $google_plus_empty_input; ) {
			
			$google_plus_input == "none";

		} else {
			$google_plus_input == $params->get('google-href');
		}


$twitter_empty_input == "";

	if ($params -> get('twitter-href') == $twitter_empty_input; ) {
			
			$twitter_input == "none";

		} else {
			$twitter_input == $params->get('twitter-href');
		}

$pinterest_empty_input == "";

	if ($params -> get('pinterest-href') == $pinterest_empty_input; ) {
			
			$pinterest_input == "none";

		} else {
			$pinterest_input == $params->get('pinterest-href');
		}

$linkedin_empty_input == "";

	if ($params -> get('linkedin-href') == $linkedin_empty_input; ) {
			
			$linkedin_input == "none";

		} else {
			$linkedin_input == $params->get('linkedin-href');
		}


$social_links = array();

	$social_links['fa-facebook'] = array(
	"href" => "$facebook_input",
	"icon" => "fa-facebook",
	"title" => "facebook",
	"item" => "item-148",
	"display" => "$facebook_input",
	);

$social_links['fa-google-plus'] = array(
	"href" => "$google_plus_input",
	"icon" => "fa-google-plus",
	"title" => "Google+",
	"item" => "item-149",
	"display" => "$google_plus_input",
	);

	$social_links['fa-twitter'] = array(
	"href" => "$twitter_input",
	"icon" => "fa-twitter",
	"title" => "Twitter",
	"item" => "item-150",
	"display" => "$twitter_input",
	);

	$social_links['fa-pinterest'] = array(
	"href" => "$pinterest_input",
	"icon" => "fa-pinterest",
	"title" => "pinterest",
	"item" => "item-151",
	"display" => "$pinterest_input",
);

	$social_links['fa-linkedin'] = array(
	"href" => "$linkedin_input",
	"icon" => "fa-linkedin",
	"title" =>  "linkedin",
	"item" => "item-152",
	"display" => "$linkedin_input",

	);	



function get_social_media_links($social_link) {
	    $output = '<li class=" ' . $social_link["item"] . ' " firstItem"  style="display: '. $social_link["href"] . ' ;">';
	    $output = $output . '<a class="fa ' . $social_link["icon"] . '" href=" ' . $social_link["href"] . ' hasTooltip custom_hover" title="" data-original-title=" '. $social_link["title"] .' ">';
	    $output = $output . '<span>';
	    $output = $output . '<span>';
	    $output = $output . '<span>';
	    $output = $output . '<span>';
	    $output = $output . '</span>';
	    $output = $output . '<strong>';
	    $output = $output . '</strong>';
	    $output = $output . '</span>';
	    $output = $output . '</span>';
	    $output = $output . '<strong>';
	    $output = $output . '<span>';
	    $output = $output . '<span>';
	    $output = $output . '</span>';
	    $output = $output . '<strong>';
	    $output = $output . '</strong>';
	    $output = $output . '</span>';
	    $output = $output . '</strong>';
	    $output = $output . '</span>';
	    $output = $output . '</a></li>';

	   return $output;

}


 		
?>

<h5 class="visible-first">Мы в социальных сетях</h5>
<div class="mod-menu__social">
  <ul class="menu social">
         <?php 
        foreach($social_links as $social_link) {
        echo get_social_media_links($social_link);
    }
    ?>
	</ul>
</div>

<!--
<?php print_r($params);?>
-->