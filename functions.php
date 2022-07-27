<?php
    function check_requirements() {
        $values = array();
        if (version_compare(PHP_VERSION, '5.6.0')>=0) {
            $values['PHP Version > 5.0.0'] = 'true';
        }else {
            $values['PHP Version'] = 'false';
        }
        if (function_exists('curl_version') && extension_loaded('curl')) {
            $values['Curl Enabled'] = 'true';
        }else {
            $values['Curl Enabled'] = 'false';
        }
        if (function_exists('json_encode') && extension_loaded('json')) {
            $values['JSON Enabled'] = 'true';
        }else {
            $values['JSON Enabled'] = 'false';
        }
        if (function_exists('mcrypt_encrypt') && extension_loaded('mcrypt')) {
            $values['MCRYPT Enabled'] = 'true';
        }else {
            $values['MCRYPT Enabled'] = 'false';
        }
        if (extension_loaded('mbstring')) {
            $values['MBSTRING Enabled'] = 'true';
        }else {
            $values['MBSTRING Enabled'] = 'false';
        }
        $path = stream_resolve_include_path('System.php');
        if ($path !== false) {
            require_once($path);
            if (class_exists('System') === true) {
                $values['isPear Enabled'] = 'true';
            }else {
                $values['isPear Enabled'] = 'false';
            }
        }else {
            $values['isPear Enabled'] = 'false';
        }
        if (is_writable(__DIR__)) {
            $values['isWritable'] = 'true';
        }else {
            $values['isWritable'] = 'false';
        }
        if (function_exists('gd_info') && extension_loaded('gd')) {
            $values['gd Enabled'] = 'true';
        }else {
            $values['gd Enabled'] = 'false';
        }
        if (function_exists('bcpowmod') && extension_loaded('bcmath')) {
            $values['bcmath Enabled'] = 'true';
        }else {
            $values['bcmath Enabled'] = 'false';
        }
        if (function_exists('mysqli_connect') && extension_loaded('mysqli'))  {
            $values['MySQL Enabled'] = 'true';
        }else {
            $values['MySQl Enabled'] = 'false';
        }
        if (extension_loaded('PDO')) {
            $values['PDO Enabled'] = 'true';
        }else {
            $values['PDO Enabled'] = 'false';
        }
        if ( extension_loaded('sockets')) {
            $values['Sockets Enabled'] = 'true';
        }else {
            $values['Sockets Enabled'] = 'false';
        }
        return $values;
    }

    function create_config_file($data) {
        if (!file_exists('config.php')) {
            $create_file  = fopen("config.php", "w");
                $params = "<?php \n";
                $params .= "    /** \n";
                $params .= "    * app info \n";
                $params .= "    */ \n";
                $params .= "    define('ROOT', '{$data['root_directory']}'); \n";
                $params .= "    define('APP_NAME' , '{$data['app_name']}'); \n";
                $params .= "    define('APP_DESC', '{$data['app_desc']}'); \n";
                $params .= "    /** \n";
                $params .= "    * database config fill thε credentials for the database for local or live server \n";
                $params .= "    */ \n";
                $params .= "    define('DB_HOST', '{$data['db_host']}'); \n";
                $params .= "    define('DB_USER', '{$data['db_user']}'); \n";
                $params .= "    define('DB_PASS', '{$data['db_pass']}'); \n";
                $params .= "    define('DB_NAME', '{$data['db_name']}'); \n";
                $params .= "    define('DB_DRIVER', 'mysql');";
                fwrite($create_file, $params);
            fclose($create_file);
        }else{
            echo "already exists";
        }
    }