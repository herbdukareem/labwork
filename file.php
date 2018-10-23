<?php
//file uploads
   if(isset($_FILES)){	
		$con=mysqli_connect('localhost','root','','evs');  

	
       $errors= array();
	   
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      
      $expensions= array("jpeg","jpg","png");
	  
       if(in_array($file_ext,$expensions)=== false){
         $errors[1]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 50000){
         $errors[2]='File size must be exactly 50KB';
      } 
		$sql_statement = "INSERT INTO  images (img_name,user_id,uploaded) VALUES ('$file_name','$user_id','now()')";
					$insert_query = mysqli_query($con,$sql_statement);
						if($insert_query){
    
		if(!empty($file_tmp)){
									
										$sql_get_id = "select MAX(id) from  images";
										$query_get_id = mysqli_query($con,$sql_get_id);
										$get_id_row = mysqli_fetch_row($query_get_id);
										
										$id = $get_id_row[0];
										//$file_name = 'con_'.$user_id .'_'.$id.'.png';
										$now = date('Y-m-d-His'); 
										$file_name=$id.'.'.$file_ext;
										$file_name = $now.$file_name;
										$move_upload = move_uploaded_file($file_tmp,"uploads/".$file_name);
										
												if($move_upload){
													$update_query = mysqli_query($con,"update images set img_name = '$file_name' where id = '$id'");
														
														if($update_query){
														 $msg =  'information is saved successfully';
														}else{ 
														 $msg =  'information not saved';
														}
												
												}
								}else{
									 $msg =  'information is saved successfully';
								}
								}
								if (file_exists($file_tmp)) 
										{
									unlink ( $_SERVER[DOCUMENT_ROOT]."/".$file_tmp );
									clearstatcache();
										}
								//$file_tmp = "/tmp/somefile.txt"; unlink($file_tmp);
								}
	  
		/*//prevent overwritten
		$now = date('Y-m-d-His');
	  
      if(empty($errors)==true){
		 $file_name=$id.'.'.$file_ext;
		 $file_name = $now.$file_name;
         move_uploaded_file($file_tmp,"upload/".$file_name);
        $q=mysqli_query($con,"insert into images (img_name,uploaded)VALUES('',now())"); 
		
		 
      }
      }*/
   ?>
   
   
   
   
  