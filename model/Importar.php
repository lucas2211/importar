<?php

class Importar extends Model {

    public function importeEB($xlsx) {
        $array = $xlsx->rows();
        unset($array[0]);
        foreach ($array as $item) {
            $contrato = $item[0];
            $codigo = $item[1];
            $maquina = $item[2];
            $permicao = $item[3];
            $faixa = $item[4];
            $pesado = $item[5];
            $descr = $item[8];
            $numero_cliente = $item[9];
            $municipio = $item[10];
            $uf = $item[11];
            $lat = $item[12];
            $fabricante = $item[13];
            if ($item[14] == 'SIM') {
                $ativa = 1;
            } else {
                $ativa = 0;
            }
            if ($item[15] == 'SIM') {
                $producao = 1;
            } else {
                $producao = 0;
            }
            if ($item[17] == 'SIM') {
                $ocr = 1;
            } else {
                $ocr = 0;
            }
            $data = 'NOW()';
            $select = sprintf("INSERT INTO cad_local_go SET contrato = '%s',cod_local = '%s',maquina_pai = '%s',vel_permit = '%s',faixa = '%s',vel_pesado = '%s',
            descr = '%s',numero_cliente = '%s',municipio = '%s',uf = '%s',latlng = '%s',fabricante = '%s',ativa = '%s',producao = '%s',lg_ocr = '%s',
            data_inclusao = %s,data_alteracao = %s",
                    $contrato, $codigo, $maquina, $permicao, $faixa, $pesado, $descr, $numero_cliente, $municipio, $uf, $lat, $fabricante, $ativa,
                    $producao, $ocr, $data, $data);

            $this->db->query($select);
        }
        echo "FIM";
    }

    public function importeEB_Infracao($xlsx) {
        $array = $xlsx->rows();
        unset($array[0]);
        foreach ($array as $item) {
            $codigo = $item[1];
            $tipo = 1;
            $select = sprintf("INSERT INTO rlc_infracao_local SET cod_local = '%s',id_tipo_infracao = '%s'", $codigo, $tipo);

            $this->db->query($select);
        }
        echo "FIM";
    }

}
