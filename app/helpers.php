<?php

/**
 * @Author: feng zhang
 * @Date:   2019-01-24 14:27:37
 * @Last Modified by:   feng zhang
 * @Last Modified time: 2019-01-24 14:35:07
 */
function get_db_config()
{
    if (getenv('IS_IN_HEROKU')) {
        $url = parse_url(getenv('DATABASE_URL'));

        return $db_config = [
            "connection" => "pgsql",
            "host" => $url["host"],
            "database" => substr($url['path'], 1),
            "username" => $url['user'],
            "password" => $url['pass'],
        ];
    } else {
        return $db_config = [
            "connection" => env('DB_CONNECTION', 'mysql'),
            "host" => env('DB_HOST', 'localhost'),
            "database" => env('DB_DATABASE', 'forge'),
            "username" => env('DB_USERNAME', 'forge'),
            "password" => env('DB_PASSWORD', '')
        ];
    }
}
