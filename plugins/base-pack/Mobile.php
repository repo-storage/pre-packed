<?php

/**
 * TODO Example hooks for a Pico plugin
 *
 * @package Prepacked
 * @subpackage Mobile
 * @since version TODO
 * @author TODO Shawn Sandy
 * @link TODO http://www.shawnsandy.com
 * @license http://opensource.org/licenses/MIT
 */
class Mobile {

    public function __construct() {

    }

    public function plugins_loaded() {

    }

    public function request_url(&$url) {

    }

    public function before_load_content(&$file) {

    }

    public function after_load_content(&$file, &$content) {

    }

    public function before_404_load_content(&$file) {

    }

    public function after_404_load_content(&$file, &$content) {

    }

    public function config_loaded(&$settings) {

    }

    public function before_read_file_meta(&$headers) {

    }

    public function file_meta(&$meta) {
        //var_dump($meta);
    }

    public function content_parsed(&$content) {

    }

    public function get_page_data(&$data, $page_meta) {

        //var_dump($page_meta);
    }

    public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page) {

    }

    public function before_twig_register() {

    }

    public function before_render(&$twig_vars, &$twig) {

    }

    public function after_render(&$output) {

    }

}
