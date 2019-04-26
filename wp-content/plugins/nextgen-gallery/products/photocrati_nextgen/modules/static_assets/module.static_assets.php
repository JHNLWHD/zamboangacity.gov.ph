<?php
class M_Static_Assets extends C_Base_Module
{
    function define($id = 'pope-module',
                    $name = 'Pope Module',
                    $description = '',
                    $version = '',
                    $uri = '',
                    $author = '',
                    $author_uri = '',
                    $context = FALSE)
    {
        parent::define(
            'photocrati-static_assets',
            'Static Assets',
            'Provides a means of finding static assets',
            '3.1.8',
            'https://www.imagely.com',
            'Imagely',
            'https://www.imagely.com'
        );
    }

    static function get_static_url($filename, $module=FALSE)
    {
        $retval = self::get_static_abspath($filename, $module);
        $retval = str_replace(wp_normalize_path(WP_PLUGIN_DIR), WP_PLUGIN_URL, $retval);
        $retval = is_ssl() ? str_replace('http:', 'https:', $retval) : $retval;
        
        return $retval;
    }

    static function get_static_abspath($filename, $module=FALSE)
    {
        static $cache = array();
        $key = $filename.strval($module);
        if (!isset($cache[$key])) {
            $cache[$key] = self::get_computed_static_abspath($filename, $module);
        }
        return $cache[$key];
    }

    static function get_computed_static_abspath($filename, $module=FALSE)
    {
        $retval = '';
        
        if (strpos($filename, '#') !== FALSE) {
            $parts = explode("#", $filename);
            if (count($parts) === 2) {
                $filename   = $parts[1];
                $module     = $parts[0];    
            }
            else $filename = $parts[0];
        }
        $filename = self::trim_preceding_slash($filename);

        if (!$module) die(sprintf(
            "get_static_abspath requires a path and module. Received %s and %s",
            $filename,
            strval($module))
        );

        $module_dir = wp_normalize_path(C_Component_Registry::get_instance()->get_module_dir($module));
        $static_dir = self::trim_preceding_slash(C_NextGen_Settings::get_instance()->mvc_static_dir);

        $override_dir = wp_normalize_path(self::get_static_override_dir($module));
        $override = path_join(
            $override_dir,
            $filename
        );

        if (!@stream_resolve_include_path($override)) {
            $retval = path_join(
                path_join($module_dir, $static_dir),
                $filename
            );
        }

        // Adjust for windows paths
        return wp_normalize_path($retval);
    }

    static function trim_preceding_slash($str)
    {
        return preg_replace("#^/{1,2}#", "", $str, 1);
    }

    /**
     * @param string $module_id
     *
     * @return string $dir
     */
    static function get_static_override_dir($module_id = NULL)
    {
        $dir = path_join(WP_CONTENT_DIR, 'ngg');
        if (!@file_exists($dir))
            wp_mkdir_p($dir);

        $dir = path_join($dir, 'modules');
        if (!@file_exists($dir))
            wp_mkdir_p($dir);

        if ($module_id)
        {
            $dir = path_join($dir, $module_id);
            if (!@file_exists($dir))
                wp_mkdir_p($dir);

            $dir = path_join($dir, 'static');
            if (!@file_exists($dir))
                wp_mkdir_p($dir);
        }

        return $dir;
    }
}

new M_Static_Assets;