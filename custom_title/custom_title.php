<?php

/**
 * Custom Title
 *
 * Super basic plugin to add custom prefix and suffix to your page titles.
 * You can already add a basic bit of text to your titles using
 * $rcmail_config['product_name'] but this way allows you to put usernames
 * and other more dynamic stuff in there.
 *
 * Enable the plugin in config/main.inc.php and add your desired prefix
 * and suffix to the plugin's config file.
 *
 * @version 1.0
 * @author Jonas Courteau
 * @website http://github.com/jcourteau/roundcube-custom_title
 * 
 * This work is licensed under the Creative Commons Attribution-Share
 * Alike 2.5 Canada License. To view a copy of this license, visit
 * http://creativecommons.org/licenses/by-sa/2.5/ca/ or send a letter
 * to Creative Commons, 171 Second Street, Suite 300, San Francisco,
 * California, 94105, USA.
 */

class custom_title extends rcube_plugin {
    function init() {
        $this->add_hook('render_page', array($this, 'page_title'));
    }

    function page_title($content) {
		$content['content'] = str_replace('Roundcube','', $content['content']);
		return $content;
    }
}
