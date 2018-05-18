<?php
    include('connect.php');


    if (isset($_GET['term'])){
        $return_arr = array();

        
        $req = $connect->prepare('SELECT * FROM departement_fr WHERE nom LIKE :term OR code_dep Like :term');
        $search = htmlspecialchars($_GET['term']);
        $req->execute(array('term' => '%'.$search.'%'));
        echo json_encode($req->fetchAll());
    }
    


    
   /*  $echo = null;
    

    if(isset($_POST['search'])&& !empty($_POST['search'])){
        
        $search = htmlspecialchars($_POST['search']);
        
	    $request=$connect->prepare('SELECT * FROM departement_fr WHERE nom  LIKE :valeur"%" OR code_dep Like :valeur');
        
        $request->execute(array('valeur'=>$search)); 
            
        while($data=$request->fetch()){

            $echo = "<li><a href='#'>".$data['code_dep']. '&nbsp;'.$data['nom']."</a></li>";
        }  
								 			
    } */



    /* $searchTerm  = $connect->prepare("SELECT * FROM departement_fr WHERE nom LIKE ?");			
	$searchTerm ->execute();
    $result = $searchTerm ->get_result();
    
	if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
		$depResult[] = $row["nom"];
		}
		echo json_encode($depResult);
    }  */
    





    /* $searchTerm = $_GET['search'];
    
    //get matched data from skills table
    $request = $connect->query("SELECT * FROM departement_fr WHERE nom LIKE '%".$searchTerm."%' ORDER BY nom ASC");
    while ($row = $request->fetch()) {
        $data[] = $row['nom'];
    }
    
    //return json data
    echo json_encode($data); */




?>
