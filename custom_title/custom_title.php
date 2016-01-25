<?php

class custom_title extends rcube_plugin {
    function init() {
        $this->add_hook('render_page', array($this, 'page_title'));
    }

    function page_title($content) {
		$content['content'] = str_replace('Roundcube','', $content['content']);
		return $content;
    }
}

