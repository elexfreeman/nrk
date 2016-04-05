<?php
/**
 * Created by PhpStorm.
 * User: cod_llo
 * Date: 11.03.16
 * Time: 17:11
 */

/*Модель для поиска по базе*/
class Nrk_model extends CI_Model {

    public function __construct()
    {

        $this->load->database();
    }

}