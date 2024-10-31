<?php

namespace MaintenancePage\Front;


class Front
{

    public function __construct()
    {
        add_action('template_redirect', [$this, 'showMaintenancePage'], 20);
    }


    public function showMaintenancePage()
    {
        if ( !current_user_can('administrator') ) {
            include( \MaintenancePage::pluginPath() . 'views/pages/maintenance.php' );
            exit();
        }
    }
}