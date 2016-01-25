<?php

/**
 * Autodomain
 *
 * Provide auto complete domain.
 *
 * @version 1.0.1
 * @author Juan Gomez <jgomez@ideosoft.es>
 */
class autodomain extends rcube_plugin
{
    public function init()
    {
        // include UI scripts
        $this->include_script("js/autodomain.js");
    }

}
