<?php

/**
 * A simple page layout plugin for Pico
 *
 * @package Pico
 * @subpackage PrePacked
 * @since version 0.1
 * @author Shawn Sandy
 * @link http://www.shawnsandy.com
 * @license http://opensource.org/licenses/MIT
 */
class Page_Layout {

    private $layout_page = null,
            $layout_name = null,
            $meta_info = array();

    public function request_url(&$url) {
        $name = preg_replace('/\//', '_', $url);
        $this->layout_name = $name . '.html';
    }

    public function config_loaded(&$settings) {
        $find_template_file = THEMES_DIR . $settings['theme'] . '/' . $this->layout_name;
        if (file_exists($find_template_file)):
            $this->layout_page = $this->layout_name;
        endif;
    }

    public function file_meta(&$meta) {

//        layout page -- overide page meta layout template
        if (isset($this->layout_page))
            $meta['layout'] = $this->layout_page;
        
    }

    public function before_render(&$twig_vars, &$twig) {
        if(!isset($twig_vars['base']))
        $twig_vars['base'] = 'base.html';

    }

}
