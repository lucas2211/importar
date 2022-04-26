<?php

class notfoundController extends Controller {

    public function index() {
        $this->loadTemplate('erro', array());
    }

}
