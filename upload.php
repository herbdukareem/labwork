
<?php
	$con = mysqli_connect('localhost','root','0000','files');
	if(isset($_FILES['images'])){
	$file_name = $_FILES["images"]["name"];
	$file_type = $_FILES["images"]["type"];
	$file_size = ($_FILES["images"]["size"]/ 1024) . " kB<br>";;
	$file_tmp_name=$_FILES['images']['tmp_name'];
	$file_error=$_FILES['images']['error'];
	$per_name="uploads/".$file_name;
	$file_ext=strtolower(end(explode('.',$file_name)));
	$extensions= array("JPEG","JPG","PNG","GIF");
	
  if ($file_name == ""){
	  echo"please select a file"; 
  	  
  }elseif(in_array($file_ext,$extensions)===false){
			$error="extension not allowed, please choose a JPEG,JPG,PNG,GIF file";
		
		}else{
				if(!empty($file_tmp_name)){
				move_uploaded_file($file_tmp_name,$per_name);
				$update = mysqli_query($con,"update images set img_name='$file_name' where id = '$id' ");
									if($update){
			$error='file saved successfully';
				}else{
				$error='file not saved successfully';
				}
		}
		}

 ?>
 	
 
 <!DOCTYPE HTML>
<html>
<head>
<script src="dropzone.js"></script>
<link rel="stylesheet" href="dropzone.css">

<script>
function allowDrop(event)(){
		document.getElementById('dragndropimg')
		var img = document.getElementById("img");
		var formdata = new FormData();
		var file_data = img.files[0];
		formdata.append("upload",file_data);
		var ajax = new XMLHttpRequest();
		ajax.open("POST","upload.php");
		ajax.addEventListener("load,completeHandler,false");
		ajax.send(formdata);
	}
	function completeHandler(event){
		document.getElementById("result").innerHTML = event.target.responseText;
	}
</script>
</head>
	<body>
		<form action="upload.php" method="post" enctype="multipart/form-data">
				<div class="col-sm-10" ondrop="drop(event)" ondragover="allowDrop(event)">
					 <textarea rows="7" draggable="true" ondragstart="drag(event)" class="form-control" id="dragndropimg" name="image"> drag and drop here</textarea>
				</div>
		</form>
	</body>
</html>