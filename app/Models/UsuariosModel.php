<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Com\Daw2\Models;

/**
 * Description of UsuariosModel
 *
 * @author sandra.queimadelosmachado
 */
class UsuariosModel extends \Com\Daw2\Core\BaseModel {

    const SELEC_FROM = "select * FROM usuario_sistema us join aux_rol ar";

    function getAllUser() {
        $query = self::SELEC_FROM;
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll();
    }
    
//    function (array $filtros ):?array{
//        $condiciones =[];
//        $vars = [];
//       $query= self::SELEC_FROM;
//       
//       
//    }
//    
    
    function getByEmail(array $data):?array{
        $query = self::SELEC_FROM . " where email=?";
        $stmt= $this->pdo->prepare($query);
        $tmt->execute([$data['email']]);
        if($row = $stmt->fetch()){
            return $row;
        }else{
            return null;
        }
        
    }
}
