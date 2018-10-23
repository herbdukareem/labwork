 
   <?php
   $con=mysqli_connect('localhost','root','0000','files');
	$get = mysqli_query($con,"select * from  images where status = '1' order by id desc");
	$get_all = mysqli_num_rows($get);
		if($get_all > 0)
		{
			$image .= '<table class="table table-bordered">';
			$image .= '
					<tr>
						<td>SN</td>
						<td class="text-center">image</td>
					
					</tr>
			';
	
			while($row = mysqli_fetch_array($get)){
				$id  = $row['id'];
				$img_name  = $row['img_name'];
			
					
				
				$image.= '
					<tr>
				
						<td style="width:200px"> '.$img_name.'</td>
					</tr>
				';
				
				
			}
			
			$image .= '</table>';
				}

 ?>

<?php echo $image; ?>