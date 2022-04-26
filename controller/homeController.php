<?php

class homeController extends Controller {

    public function index() {
        $dados = [];
        $I = new Importar();
        if (isset($_FILES['arquivo'])) {
            $arquivo = $_FILES['arquivo'];
            $extencao = strchr($arquivo['name'], '.');
            if ($extencao = '.xlsx') {
                if ($xlsx = SimpleXLSX::parse($arquivo['tmp_name'])) {
                    //$dados['ret'] = $I->importeEB($xlsx);
                    $dados['ret'] = $I->importeEB_Infracao($xlsx);
                } else {
                    echo SimpleXLSX::parseError();
                }
            }
        }
        $this->loadTemplate('home', $dados);
    }

}
