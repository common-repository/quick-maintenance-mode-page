<?php
/**
 * Plugin Name: Quick maintenance mode page
 * Plugin URI:
 * Description: Add an maintenance mode page with a minimum settings
 * Version: 0.0.1
 * Author: Think studio
 * Author URI: https://think.studio/
 */

require __DIR__ . '/vendor/autoload.php';

if ( ! defined( 'QMMP_PLUGIN_FILE' ) ) {
    define( 'QMMP_PLUGIN_FILE', __FILE__ );
}


class MaintenancePage
{
    private static $instance = null;

    public $front;

    private function __construct()
    {
        $this->front = new \MaintenancePage\Front\Front();
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function init()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public static function pluginPath(string $pathWithoutFirstSlash = '') {
        return  plugin_dir_path( QMMP_PLUGIN_FILE ) . $pathWithoutFirstSlash;
    }
    public static function pluginUrl(string $pathWithoutFirstSlash = '') {
        return  plugin_dir_url( QMMP_PLUGIN_FILE ) . $pathWithoutFirstSlash;
    }

}

MaintenancePage::init();
