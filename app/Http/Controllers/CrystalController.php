<?php defined('SYSPATH') or die('No direct access allowed.');
// this is not in the correct directory? Figure out where this should go

namespace App\Http\Controllers;

class CrystalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->crystals = array();

    }

    public function loadCrystals() {
        // Searches /crystals directory for crystals to load
    }

    //
}
