<?php 
// require '_header.php';
if(class_exists('USER')){

}else{
	class USER{
		private $db;
		public function __construct($db){
			if (!isset($_SESSION)) {
		session_start();
				}
	
			if (!isset($_SESSION['user'])) {
	
				$_SESSION['user']=array();	
			}
	$this->DB=$db;

	}
	
	public function con($id){
	
		$_SESSION['user'][$id]= $id;	
		$connexion=$this->DB->prepare('SELECT * FROM auth_etudiant_view WHERE id=:id');
	 $connexion->execute(array(
	'id' => $id
	));
	$con=$connexion->fetchAll(PDO::FETCH_OBJ);
	foreach ($con as $user ) {
	
		$_SESSION['user']['id']= $user->id;
		$_SESSION['user']['noms']= $user->noms;
		$_SESSION['user']['promotion']= $user->id_promotion;
		$_SESSION['user']['option']= $user->id_options;
	}
	return true;
	
	
	}
	
	 public function decon($id){
		unset($_SESSION['user']);
		session_destroy();
		header('location:login.php');
	
	}
	
	
	}
}

 


 ?>