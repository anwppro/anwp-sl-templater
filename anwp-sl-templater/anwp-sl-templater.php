<?php
/**
 * Plugin Name: AnWP SL Templater
 * Plugin URI:  https://anwppro.userecho.com/communities/1-football-leagues
 * Description: Helper plugin to override templates for AnWP Sports Leagues.
 * Version:     0.1.0
 * Author:      Andrei Strekozov <anwppro>
 * Author URI:  https://anwp.pro
 * License:     GPLv2+
 * Requires PHP: 7.4
 * Text Domain: anwp-sl-templater
 *
 * @package AnWP_SL_Templater
 */

/**
 * Copyright (c) 2025 Andrei Strekozov <anwppro>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

add_filter( 'sl_template_paths', 'anwp_sl_templater_add_path' );

function anwp_sl_templater_add_path( $file_paths ) {

	$file_paths[0] = plugin_dir_path( __FILE__ ) . 'templates/';

	return $file_paths;
}
