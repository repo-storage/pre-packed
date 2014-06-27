<?php

/**
 * Pcio Theme switcher
 *
 * @package Pico
 * @subpackage TODO
 * @since version TODO
 * @author TODO Shawn Sandy
 * @link TODO http://www.shawnsandy.com
 * @license http://opensource.org/licenses/MIT
 */
class Theme_Switch {

    private $active_themes = null,
            $base_url,
            $theme = null;

    public function __construct() {
        if (!isset($_SESSION))
            session_start();
    }

    public function plugins_loaded() {

    }

    public function request_url(&$url) {

        if (preg_match('/switch/i', $url)):

            $paths = explode('/', $url);
            if (isset($paths[1])):
                $this->theme = $paths[1];
                if (!isset($_SESSION['theme']) or empty($_SESSION['theme']))
                    $_SESSION['theme'] = $this->theme;
            endif;
            //reset the url to home
            $url = '';
        endif;   
    }

    public function config_loaded(&$settings) {

        // delete session
        if ($this->theme === 'close'):
            unset($_SESSION['theme']);
            header("Location:  {$settings['base_url']}");
            exit();
        endif;

        // change the theme setting
        if (isset($_SESSION["theme"])):
            $theme = THEMES_DIR . $_SESSION['theme'] . '/index.html';
            if (file_exists($theme)):
                $settings['theme'] = $_SESSION['theme'];
            endif;
        endif;

        //get theme list
        if (isset($settings['theme-list'])):
            $this->active_themes = $settings['theme_list'];
        endif;
    }

    public function before_render(&$twig_vars, &$twig) {

        if (isset($_SESSION['theme']))
            $twig_vars['preview_theme'] = $_SESSION['theme'];
    }

    public function after_render(&$output) {
        $directory = THEMES_DIR;
    }

}
