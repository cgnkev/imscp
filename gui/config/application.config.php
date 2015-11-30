<?php
/**
 * i-MSCP - internet Multi Server Control Panel
 * Copyright (C) 2010-2015 by Laurent Declercq <l.declercq@nuxwin.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

// Service manager configuration file
return [
	// This should be an array of module namespaces used in the application.
	'modules' => [
		'iMSCP\Core',
		'iMSCP\ApsStandard'
	],

	// These are various options for the listeners attached to the ModuleManager
	'module_listener_options' => [
		// This should be an array of paths in which modules reside. If a string key is provided, the listener will
		// consider that a module namespace, the value of that key the specific path to that module's Module class.
		'module_paths' => [
			'./module',
			'/var/cache/imscp/packages/vendor',
		],

		// An array of paths from which to glob configuration files after modules are loaded. These effectively override
		// configuration provided by modules themselves. Paths may use GLOB_BRACE notation.
		'config_glob_paths' => [
			'config/autoload/{{,*.}global,{,*.}local}.php',
		],

		// Whether or not to enable a configuration cache. If enabled, the merged configuration will be cached and used
		// in subsequent requests.
		'config_cache_enabled' => false,

		// The key used to create the configuration cache file name.
		//'config_cache_key' => $stringKey,

		// Whether or not to enable a module class map cache. If enabled, creates a module class map cache which will be
		// used by in future requests, to reduce the autoloading process.
		'module_map_cache_enabled' => false,

		// The key used to create the class map cache file name.
		//'module_map_cache_key' => $stringKey,

		// The path in which to cache merged configuration.
		'cache_dir' => 'data/cache',

		// Whether or not to enable modules dependency checking.
		// Enabled by default, prevents usage of modules that depend on other modules
		// that weren't loaded.
		'check_dependencies' => true,
	],

	// Used to create an own service manager. May contain one or more child arrays.
	//'service_listener_options' => [
	//	[
	//		'service_manager' => $stringServiceManagerName,
	//		'config_key' => $stringConfigKey,
	//		'interface' => $stringOptionalInterface,
	//		'method' => $stringRequiredMethodName,
	//	],
	//],

	// Initial configuration with which to seed the ServiceManager.Should be compatible with Zend\ServiceManager\Config.
	'service_manager' => [
		/*
		'invokables' => [
			'ApsStandardListener' => 'iMSCP\ApsStandard\Listener\ApsStandardListener'
		],
		*/

		/*
		'abstract_factories' => [
			// Abstract factory for APS standard controllers
			'iMSCP\ApsStandard\Controller\ApsControllerAbstractFactory',

			// Abstract factory for APS standard services
			'iMSCP\ApsStandard\Service\ApsServiceAbstractFactory'
		],
		*/
	],

	// Listener aggregates
	'listeners' => [
		//'ApsStandardListener'
	]
];
