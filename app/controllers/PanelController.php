<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/06/14
 * Time: 04:01 PM
 */

class PanelController extends BaseController {

    public function panelhome()
    {
        return View::make('/Panel/panel');
    }

    public function panelcontactos()
    {
        return View::make('/Panel/panelcontactos');
    }


} 