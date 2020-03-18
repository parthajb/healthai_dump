<?php

    /*
     *    === Define the Path ===
    */
    defined('CRYPTIBIT_IPANEL_PATH') ||
        define( 'CRYPTIBIT_IPANEL_PATH' , get_template_directory() . '/ipanel/' );

    /*
     *    === Define the Version of iPanel ===
    */
    define( 'IPANEL_VERSION' , '1.1' );



    /*
     *    === Define the Classes Path ===
    */
    if ( defined('CRYPTIBIT_IPANEL_PATH') ) {
        define( 'IPANEL_CLASSES_PATH' , CRYPTIBIT_IPANEL_PATH . 'classes/' );
    } else {
        define( 'IPANEL_CLASSES_PATH' , get_template_directory() . '/ipanel/classes/' );
    }

    function cryptibit_iPanelLoad(){
        require_once IPANEL_CLASSES_PATH . 'ipanel.class.php';
		if( file_exists(CRYPTIBIT_IPANEL_PATH . 'options.php') )
			require_once CRYPTIBIT_IPANEL_PATH . 'options.php';
    }

    if ( defined('CRYPTIBIT_IPANEL_PLUGIN_USAGE') ) {
        if ( CRYPTIBIT_IPANEL_PLUGIN_USAGE === true ) {
            add_action('plugins_loaded', 'cryptibit_iPanelLoad');
        } else {
            add_action('init', 'cryptibit_iPanelLoad');
        }
    } else {
        add_action('init', 'cryptibit_iPanelLoad');
    }
