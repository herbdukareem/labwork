<?php
include_once('file.php')
?>

    <!DOCTYPE HTML>
<html>
<head>


<link rel="stylesheet" href="bootstrap.css">

<link rel="stylesheet" href="bootstrap.min.css">




<link rel="stylesheet" href="dropzone.css">

				
<script type="text/javascript">


$(document).ready(function() {



/**********************  this he function that initiates the tooltip **************
	 ** it allows tooltip to show *****************************************************/
	 	
  	$('[data-toggle="tooltip"]').tooltip();
	
	
	
	
	/********************************* this is the finction for pop over ***********************/
	$('[data-toggle="popover"]').popover();
	
	
});
	

</script>



</head>
<body>


<a data-toggle="modal" href="#myModalCredential" class="btn btn-sm btn-info" >Upload File <i class="fa fa-upload"></i></a>
	
	
	
	
	
	
<!-- modal for upload of credential -->
<div class="modal fade" id="myModalCredential" tabindex="-1" role="dialog" aria-labelledby="myModalLabell" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabell">Upload credentials</h4>
      </div>
      <div class="modal-body">
      
			
		
				 <form action="file.php" method="post" enctype="multipart/form-data" class="dropzone" id="my-awesome-dropzone">
                                <div class="fallback">
                                    <input name="file" type="file"  />
                                    
                                   <input type="submit" id="file-sub" />
                                </div>
                  </form>
                 
               
               
                   
	 </div>
			
     <div class="modal-footer">
                
                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
			  
                
      </div>
               
                  
                  
        
          
               
    </div>
  </div>
</div>

<!------------------------------- credentials  modal ------------------------------------------------------------------->
 

 <script src="jquery-1.10.2.js"></script> 

<!-- <script src="jquery.js"></script> -->

<script src="bootstrap.min.js"></script>
<!-- <script src="bootstrap.js"></script> -->

<script src="dropzone.js"></script>


	
</body>
</html>





 