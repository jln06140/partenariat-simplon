<?php
/*
Plugin Name: simplon_plugin
Author: Jean-Luc
*/

function ShortcodeSimplon() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire simplon.co - une entreprise de
    l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
    des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'ShortcodeSimplon');

?>
