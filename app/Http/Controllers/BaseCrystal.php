<?php defined('SYSPATH') or die('No direct access allowed.');
// todo: this is not in the correct directory? Figure out where this should go


class BaseCrystal extends Controller {
    public function __contstruct() {
        $this->crystals = array();
    }

    public function loadCrystals() {
        // Searches /crystals directory for crystals to load
    }
}
