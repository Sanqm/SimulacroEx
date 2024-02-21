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
    
    function getFiltros( string  $username ):?array{
        $query = self::SELEC_FROM ."where username=:username";
        $stmt=$this->pdo->prepare($query);
        $stmt->execute([$username]);
        if($row = $stmt->execute){
            return $row;
        }else{
            return null;
        }
    }
    
}
