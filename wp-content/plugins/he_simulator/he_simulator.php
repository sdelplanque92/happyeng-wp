<?php
/**
 * @package Happy Eng
 */
/*
Plugin Name: Happy Eng / AI Simulator
Plugin URI: https://www.happy-eng.com
Description: Happy Eng demonstration of AI Simulation
Version: 0.1.0
Requires at least: 6.*
Requires PHP: 8.2.*
Author: Sébastien Delplanque - SASU Happy Eng
Author URI: https://www.happy-eng.com
License: None
*/

use HeSimulatorInitController\InitController;

require_once(__DIR__ . '/classes/Autoloader.php');
HeSimulatorAutoloader::register();
$plugin = new InitController();

/**
 * Call for AI Simulator initialization
 *
 * @return void
 */
function he_shortcode_init_ai_simulator() {

}
do_shortcode('he-ai-simulator', 'he_shortcode_init_ai_simulator');