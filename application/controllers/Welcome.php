<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
    	parent::__construct();
    	$this->load->database();
		  $this->load->helper('url');
    	$this->load->model('bases_model');
    	$this->load->library('grocery_CRUD');
      $this->load->library('form_validation');
    }
	public function index()
	{
		$data["title"]='BioLaguna';
		$this->load->view('header',$data);
		$this->load->view('nav');
		$data["parque"]=$this->bases_model->getParque();
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
  public function contacto()
  {
    $data["title"]='Contacto';
    $this->load->view('header',$data);
    $this->load->view('nav');
    $data["parque"]=$this->bases_model->getParque();
    $this->load->view('contacto',$data);
    $this->load->view('footer');
  }
	public function administrador()
	{
		$data["title"]='Administrador';
		$this->load->view('header',$data);
		$this->load->view('navAdministrador');
		$this->load->view('administrador');
		$this->load->view('footer');
	}
	public function login()
	{
		$data["title"]='Iniciar sesión';
		$mensaje["error"]='';
		$this->load->view('header',$data);
		$this->load->view('nav');
		$this->load->view('login',$mensaje);
		$this->load->view('footer');
	}
  public function avisoPrivacidad()
  {
    $data["title"]='Aviso de Privacidad';
    $this->load->view('header',$data);
    $this->load->view('nav');
    $data["parque"]=$this->bases_model->getParque();
    $this->load->view('avisoPrivacidad',$data);
    $this->load->view('footer');
  }
	public function flora()
	{
		$data["title"]='Flora';
		$this->load->view('header',$data);
		$this->load->view('navFlora');
		$data["flora"]=$this->bases_model->getFlora();
    $data["comentario"]='';
		$this->load->view('flora',$data);
		$this->load->view('footer');
	}
	public function fauna()
	{
		$data["title"]='Fauna';
		$this->load->view('header',$data);
		$this->load->view('navFauna');
		$data["fauna"]=$this->bases_model->getFauna();
    $data["comentario"]='';
		$this->load->view('fauna',$data);
		$this->load->view('footer');
	}
	public function foro()
	{
		$data["title"]='Foro';
		$this->load->view('header',$data);
		$this->load->view('nav');
		$data["comentario"]=$this->bases_model->getComentario();
		$this->load->view('foro',$data);
		$this->load->view('footer');
	}

	public function insertarComentario(){
		if (empty($_POST['nom_usu'])) {
			$comentario=$this->input->post('comentario',TRUE);
			$nom_usu='Anónimo';
		}else{
			$nom_usu=$this->input->post('nom_usu',TRUE);
			$comentario=$this->input->post('comentario',TRUE);
		}
    if ($_FILES['img']['name'] != null) {
      $nombreImg=$_FILES['img']['name'];
      move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/files/'.$nombreImg);
    }else{
      $nombreImg=null;
    }
		$data['data'] = array(
            'nombre_usuario'=> $nom_usu,
            'comentario'=> $comentario,
            'nombreImg'=> $nombreImg);
        $this->bases_model->insertar_comentario($data['data']);
        echo'<script type="text/javascript">
        alert("¡Haz hecho un comentario en el foro!.");
        </script>';
        redirect('\Welcome\foro','refresh');
	}
  public function buscar_fauna(){
    $orden=$this->input->post('orden');
    $band=FALSE;
    $sentencia='';
    if(empty($_POST['nomCien'])!=TRUE){
      $nomCien=$this->input->post('nomCien');
      $sentencia .=" where nombreCientifico LIKE '%".$nomCien."%' ";
      $band=TRUE;
    }
    if(empty($_POST['nomCom'])!=TRUE){
      $nomCom=$this->input->post('nomCom');
      if ($band==TRUE) {
        $sentencia .=" and nombreComun LIKE '%".$nomCom."%' ";
      }else{
        $sentencia .=" where nombreComun LIKE '%".$nomCom."%' ";
      }
    }
    if(empty($_POST['clase'])!=TRUE){
      $clase=$this->input->post('clase');
      if($band ==TRUE){
        $sentencia .=" and clase LIKE '%".$clase."%' ";
      }else{
        $sentencia .=" Where clase LIKE '%".$clase."%' ";
      } 
    }
    if($orden=='1'){
      $sentencia .=" order by nombreComun ";
    } 
    if($orden=='2'){
      $sentencia .=" order by nombreComun desc";
    }
    $data["title"]='Fauna';
    $this->load->view('header',$data);
    $this->load->view('navFauna');
    $data["fauna"]=$this->bases_model->buscar_Fauna($sentencia);
    $data["comentario"]='Los resultados de la búsqueda son ';
    $this->load->view('fauna',$data);
    $this->load->view('footer');
  }
  public function buscar_flora(){
    $orden=$this->input->post('orden');
    $band=FALSE;
    $sentencia='';
    if(empty($_POST['nomCien'])!=TRUE){
      $nomCien=$this->input->post('nomCien');
      $sentencia .=" where nombreCientifico LIKE '%".$nomCien."%' ";
      $band=TRUE;
    }
    if(empty($_POST['nomCom'])!=TRUE){
      $nomCom=$this->input->post('nomCom');
      if ($band==TRUE) {
        $sentencia .=" and nombreComun LIKE '%".$nomCom."%' ";
      }else{
        $sentencia .=" where nombreComun LIKE '%".$nomCom."%' ";
      }
    }
    if(empty($_POST['clase'])!=TRUE){
      $clase=$this->input->post('clase');
      if($band ==TRUE){
        $sentencia .=" and clase LIKE '%".$clase."%' ";
      }else{
        $sentencia .=" Where clase LIKE '%".$clase."%' ";
      } 
    }
    if($orden=='1'){
      $sentencia .=" order by nombreComun ";
    } 
    if($orden=='2'){
      $sentencia .=" order by nombreComun desc";
    }
    $data["title"]='Flora';
    $this->load->view('header',$data);
    $this->load->view('navFlora');
    $data["flora"]=$this->bases_model->buscar_Flora($sentencia);
    $data["comentario"]='Los resultados de la búsqueda son ';
    $this->load->view('flora',$data);
    $this->load->view('footer');
  }
	public function cerrar_sesion()
	{
		$datasession = array('nombre' => '');
        $this->session->unset_userdata($datasession);
        $this->session->sess_destroy();
        redirect('', 'refresh');
	}
	public function validaLogin(){
	    $this->form_validation->set_rules('login','login','trim|required');
	    $this->form_validation->set_rules('pwd','pwd','trim|required');
	    $this->form_validation->set_rules('g-recaptcha-response','recaptcha validation','trim|required|callback_validate_captcha');
	    if ($this->form_validation->run() != FALSE){
		    $login=$this->input->post('login',TRUE);
	        $password=$this->input->post('pwd',TRUE);
	        $dataA = array(
	               'usuario'=> $login,
	               'password'=>$password
	               );
	        $dataA["usuario"]=$this->bases_model->validaLogin($dataA);
	      	if ($dataA["usuario"]==FALSE){
	        	$data["title"]='Iniciar sesión';
			   	$this->load->view('header',$data);
			   	$this->load->view('nav');
			   	$data["error"]='El usuario o la contraseña son incorrectas*';
			    $this->load->view('login',$data);
			    $this->load->view('footer');
	      	}
	      	else{
	        	if($dataA["usuario"]!=FALSE){
	          		foreach($dataA["usuario"]->result() as $row){
	          			$datasession = array(
	          				'idUsuario' => $row->idUsuario,
				            'nombre'=> $row->nombre,
				            'apellidoP'=> $row->apellidoP,
				            'apellidoM'  => $row->apellidoM,
				            'telefono'  => $row->telefono,
				            'correo'=> $row->correo,
				            'idParque'  => $row->idParque,
				        );
	          		}
	         		$this->session->set_userdata($datasession);
	        		redirect('/Welcome/administrador/', 'location');
	        	}   
	       }
	   }
	   else{
	   	$data["title"]='Iniciar sesión';
  		$this->load->view('header',$data);
  		$this->load->view('nav');
  		$data["error"]='No selecciono la opción del catpcha*';
  		$this->load->view('login',$data);
  		$this->load->view('footer');
	   }
  	}
  	public function parqueGC($output = null){
  		$data["title"]='Parque';
		  $this->load->view('headerAdm',$data);
      $this->load->view('datos.php',(array)$output,$data);
    }
    public function especieGC($output = null){
  		$data["title"]='Especie';
		  $this->load->view('headerAdm',$data);
      $this->load->view('datos.php',(array)$output,$data);
    }
    public function floraGC($output = null){
  		$data["title"]='Flora';
		  $this->load->view('headerAdm',$data);
      $this->load->view('datos.php',(array)$output,$data);
    }
    public function faunaGC($output = null){
  		$data["title"]='Fauna';
		  $this->load->view('headerAdm',$data);
      $this->load->view('datos.php',(array)$output,$data);
    }
    public function foroGC($output = null){
  		$data["title"]='Foro';
		  $this->load->view('headerAdm',$data);
      $this->load->view('datos.php',(array)$output,$data);
    }
    
  	public function parque_adm(){
  		try{
      		$crud = new grocery_CRUD();
      		$crud->set_language('spanish');
      		$crud->set_table('parque');
      		$crud->columns('idParque','nombre','direccion','costo','horario','descripcion','pimg1','pimg2','pimg3');
      		$crud->required_fields('nombre','direccion','costo','horario','reglamento','descripcion','pimg1','pimg2','pimg3','correo','telefono');
      		$crud->display_as('idParque','ID');
      		$crud->display_as('nombre','Nombre');
      		$crud->display_as('direccion','Dirección');
      		$crud->display_as('costo','Costo');
      		$crud->display_as('horario','Horario');
      		$crud->display_as('pimg1','Imagen 1');
      		$crud->display_as('pimg2','Imagen 2');
      		$crud->display_as('pimg3','Imagen 3');
      		$crud->set_field_upload('pimg1','assets/uploads/files');
      		$crud->set_field_upload('pimg2','assets/uploads/files');
      		$crud->set_field_upload('pimg3','assets/uploads/files');
      		$crud -> unset_add ( ) ;
      		$crud -> unset_delete ( ) ;
      		$crud -> unset_clone ( ) ;
      		$output = $crud->render();
      		$this->parqueGC($output);
    	}catch(Exception $e){
      		show_error($e->getMessage().' --- '.$e->getTraceAsString());
    	}
    }

    function especie_check($str){
      $num_row = $this->db->where('nombre_especie', $str)->get('Especie')->num_rows();
      if($num_row > 0){
        $this->form_validation->set_message('especie_check', 'La especie con ese nombre ya existe');
        return FALSE;
      }
      else{
        return TRUE;
      }
    }   
    public function especie_adm(){
  		try{
      		$crud = new grocery_CRUD();
      		$crud->set_language('spanish');
      		$crud->set_table('especie');
      		$crud->columns('idEspecie','nombre_especie');
      		$crud->required_fields('nombre_especie','idParque');
      		$crud->display_as('idEspecie','ID');
      		$crud->display_as('nombre_especie','Nombre especie');
      		$crud->display_as('idParque','Parque');
      		$crud->set_relation('idParque','parque','nombre');
          $crud->set_rules('nombre_especie', 'Nombre especie', 'callback_especie_check'); 
      		$crud -> unset_clone ( ) ;
      		$output = $crud->render();
      		$this->especieGC($output);
    	}catch(Exception $e){
      		show_error($e->getMessage().' --- '.$e->getTraceAsString());
    	}
    }
    function flora_check($str){
      $num_row = $this->db->where('nombreCientifico', $str)->get('Flora')->num_rows();
      if($num_row > 0){
        $this->form_validation->set_message('flora_check', 'La especie de flora con ese nombre ya existe');
        return FALSE;
        
      }
      else{
        return TRUE;
      }
    } 
    public function flora_adm(){
  		try{
      		$crud = new grocery_CRUD();
      		$crud->set_language('spanish');
      		$crud->set_table('flora');
      		$crud->columns('idFlora','nombreCientifico' , 'nombreComun' , 'clase','orden','familia' , 'cuidado' , 'img1' , 'img2' , 'img3');
      		$crud->required_fields('nombreCientifico' , 'nombreComun' , 'clase' , 'orden', 'familia','cuidado','img1','idEspecie');
      		$crud->display_as('idFlora','ID');
      		$crud->display_as('nombreCientifico','Nombre científico');
      		$crud->display_as('nombreComun','Nombre común');
      		$crud->display_as('clase','Clase');
      		$crud->display_as('cuidado','Cuidado');
      		$crud->display_as('orden','Orden');
          $crud->display_as('familia','Familia');
      		$crud->display_as('img1','Imagen 1');
      		$crud->display_as('img2','Imagen 2');
      		$crud->display_as('img3','Imagen 3');
      		$crud->display_as('idEspecie','Especie');
      		$crud->set_field_upload('img1','assets/uploads/files');
      		$crud->set_field_upload('img2','assets/uploads/files');
      		$crud->set_field_upload('img3','assets/uploads/files');
      		$crud->set_relation('idEspecie','especie','nombre_especie');
          $crud->set_rules('nombreCientifico', 'Nombre científico', 'callback_flora_check'); 
      		$crud -> unset_clone ( ) ;
      		$output = $crud->render();
      		$this->floraGC($output);
    	}catch(Exception $e){
      		show_error($e->getMessage().' --- '.$e->getTraceAsString());
    	}
    }
    function fauna_check($str){
      $num_row = $this->db->where('nombreCientifico', $str)->get('Fauna')->num_rows();
      if($num_row > 0){
        $this->form_validation->set_message('fauna_check', 'La especie de fauna con ese nombre ya existe');
        return FALSE;
        
      }
      else{
        return TRUE;
      }
    } 
    public function fauna_adm(){
  		try{
      		$crud = new grocery_CRUD();
      		$crud->set_language('spanish');
      		$crud->set_table('fauna');
      		$crud->columns('idFauna','nombreCientifico' , 'nombreComun','clase' , 'cuidado' , 'cantidad' , 'img1' , 'img2' , 'img3','idEspecie');
      		$crud->required_fields('clase','nombreCientifico' , 'nombreComun' , 'dieta' , 'reproduccion', 'tamaño', 'alimentacion','longevidad', 'periodoIncubacion', 'cuidado' , 'cantidad', 'cantidad' , 'img1','idEspecie');
      		$crud->display_as('idFauna','ID');
      		$crud->display_as('clase','Clase');
      		$crud->display_as('nombreCientifico','Nombre científico');
      		$crud->display_as('nombreComun','Nombre común');
      		$crud->display_as('dieta','Dieta');
      		$crud->display_as('reproduccion','Reproducción');
      		$crud->display_as('tamaño','Tamaño (apróx)');
      		$crud->display_as('longevidad','Longevidad');
          $crud->display_as('alimentacion','Alimentación');
      		$crud->display_as('periodoIncubacion','Periodo de incubación');		
      		$crud->display_as('cantidad','Cantidad (apróx)');
      		$crud->display_as('cuidado','Cuidado');
      		$crud->display_as('img1','Imagen 1');
      		$crud->display_as('img2','Imagen 2');
      		$crud->display_as('img3','Imagen 3');
      		$crud->display_as('idEspecie','Especie');
      		$crud->set_field_upload('img1','assets/uploads/files');
      		$crud->set_field_upload('img2','assets/uploads/files');
      		$crud->set_field_upload('img3','assets/uploads/files');
      		$crud->set_relation('idEspecie','especie','nombre_especie');
          $crud->set_rules('cantidad','Cantidad','integer');
          $crud->set_rules('nombreCientifico', 'Nombre científico', 'callback_fauna_check'); 
      		$crud -> unset_clone ( ) ;
      		$output = $crud->render();
      		$this->faunaGC($output);
    	}catch(Exception $e){
      		show_error($e->getMessage().' --- '.$e->getTraceAsString());
    	}
    }
    public function foro_adm(){
  		try{
      		$crud = new grocery_CRUD();
      		$crud->set_language('spanish');
      		$crud->set_table('comentario');
      		$crud->columns('idComentario' , 'nombre_usuario' , 'fecha' , 'descripcion','img');
      		$crud->display_as('idComentario','ID');
      		$crud->display_as('nombre_usuario','Nombre del usuario');
      		$crud->display_as('fecha','Fecha');
      		$crud->display_as('descripcion','Comentario');
          $crud->display_as('img','Imagen');
          $crud->set_field_upload('img','assets/uploads/files');
      		$crud -> unset_clone ( ) ;
      		$crud -> unset_add ( ) ;
      		$crud -> unset_edit ( ) ;
      		$output = $crud->render();
      		$this->foroGC($output);
    	}catch(Exception $e){
      		show_error($e->getMessage().' --- '.$e->getTraceAsString());
    	}
    }

    public function correo(){
      $name=$this->input->post('name');
      echo'<script type="text/javascript">
        alert("¡Hola '.$name.', te responderemos lo antes posible!");
        </script>';
      redirect('\Welcome\contacto','refresh');
      /*$to=$this->input->post('email');
      $subject=$this->input->post('subject');
      $message=$this->input->post('message');
      $messageAux="Mi nombre es: ".$name." ".$message ;
      $from= 'lulu201108591@gmail.com';
      $headers = "From:" . $from;
      mail($to, $subject, $messageAux, $headers);*/
    }
    public function validate_captcha(){
	    $captcha=$this->input->post('g-recaptcha-response');
	    $response=@file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lcx7TAUAAAAAOqusOB9xnvf_mbmR31Ha_491FOS & response=".$captcha."& remoteip=".$_SERVER['REMOTE_ADDR']);
	    if ($response.'success'==FALSE)
	      return FALSE;
	    else
	      return TRUE;
    }
}
