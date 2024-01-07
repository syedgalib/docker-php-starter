<?php

// A helper function to lookup "env_FILE", "env", then fallback
if ( ! function_exists( 'getenv_docker' ) ) {
	function getenv_docker( $env, $default ) {
		if ( $fileEnv = getenv( $env . '_FILE' ) ) {
			return rtrim( file_get_contents( $fileEnv ), "\r\n" );
		}

		else if ( ( $val = getenv($env) ) !== false ) {
			return $val;
		}

		else {
			return $default;
		}
	}
}

function connect_db() {
    $host     = getenv_docker( 'DB_HOST', 'db' );
    $db_name  = getenv_docker( 'DB_NAME', 'docker' );
    $username = getenv_docker( 'DB_USER', 'root' );
    $password = getenv_docker( 'DB_PASSWORD', 'root' );

    try {
        $connection = new PDO( "mysql:host={$host};dbname={$db_name}", $username, $password );
        $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        echo "Connected successfully";
    } catch( PDOException $e ) {
        echo "Connection failed: " . $e->getMessage();
    }
}

// connect_db();

phpinfo();