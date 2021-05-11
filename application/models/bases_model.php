<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bases_model extends CI_Model {

  function __construct(){
    parent::__construct();
  }

	public function validaLogin($data)
  {
    $cadena="select *  from usuario where idUsuario='".$data['usuario']."' and contrasena=SHA1('".$data['password']."') and idParque=1";
    $query = $this->db->query($cadena);
      if ($query->num_rows() > 0)
        return $query;
      else
        return FALSE;
  }
  public function getParque(){
    $cadena="Select * FROM parque ";
    $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
           return $query;
        else
         return FALSE;
  }
  public function getFlora(){
    $cadena="Select idFlora , nombreCientifico , nombreComun , clase, orden, familia , cuidado , img1 , img2 , img3, nombre_especie FROM flora AS fa INNER JOIN especie AS es ON fa.idEspecie = es.idEspecie INNER JOIN parque AS pa ON pa.idParque = es.idParque";
    $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
           return $query;
        else
         return FALSE;
  }
  public function getFauna(){
    $cadena="Select idFauna, nombreCientifico, nombreComun, clase, alimentacion, dieta, reproduccion, tamaño, longevidad, periodoIncubacion, cuidado, cantidad, img1, img2, img3, nombre_especie FROM fauna AS fa INNER JOIN especie AS es ON fa.idEspecie = es.idEspecie INNER JOIN parque AS pa ON pa.idParque = es.idParque";
    $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
           return $query;
        else
         return FALSE;
  }
  public function buscar_Fauna($sentencia){
    $cadena='call buscar(1,"'.$sentencia.'")';
    $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
           return $query;
        else
         return FALSE;
  }
  public function buscar_Flora($sentencia){
    $cadena='call buscar(2,"'.$sentencia.'")';
    $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
           return $query;
        else
         return FALSE;
  }
  public function getComentario(){
    $cadena="Select nombre_usuario, DATE_FORMAT(fecha,'%d/%m/%Y') as fecha, descripcion, img FROM comentario Where idParque=1 order by idComentario desc";
    $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
           return $query;
        else
         return FALSE;
  }

  public function insertar_comentario($data){
    $cadena="insert into comentario(nombre_usuario,fecha,descripcion,img,idParque) 
             values('".$data['nombre_usuario']."',now(),'".$data['comentario']."','".$data['nombreImg']."',1);";
    $query = $this->db->query($cadena);
  }
}
  
