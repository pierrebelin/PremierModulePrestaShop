<?php

class PremierModule extends Module
{
    public function __construct()
    {
        $this->name = 'premiermodule';
        $this->tab = 'analytics_stats';
        $this->version = '1.0';
        $this->author = 'Pierre Belin';
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Premier Module');
        $this->description = $this->l('Description du module');
    }

    public function install()
    {
        if (parent::install()) {
            return true;
        }

        return false;
    }

    public function uninstall()
    {
        if (parent::uninstall()) {
            return true;
        }

        return false;
    }
}
