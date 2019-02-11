<?php include JS_THEME."js_header.php"; ?>
	<div id="site_content">	
		
		<?php $js_db_query = "SELECT * FROM js_student ORDER BY studentid DESC LIMIT 20";
			$database = new Js_Dbconn();			
			$results = $database->get_results( $js_db_query );
		?>
	  <div id="content">
        <div class="content_book">
		<br>
		  <h1><?php echo $database->js_num_rows( $js_db_query ) ?> Books Users
		  <a style="float:right;width:300px;text-align:center;" href="index.php?js_page=newuser">Add New User</a> </h1> 
          <br><hr><br>
			<div class="main_content" align="center">
			
			   <table class="tt_tb">
				<thead><tr class="tt_tr">
				  <th style="width:70px;"></th>
				  <th>Full Name</th>
				  <th>Group</th>
				  <th>Mobile</th>
				  <th>Email</th>
				  <th>Registered</th>
				</tr></thead>
				<tbody>
                <?php foreach( $results as $row ) { ?>
		        <tr onclick="location='index.php?js_page=viewuser&amp;js_studentid=<?php echo $row['studentid'] ?>'">
				   <td><img class="iconic" src="js_media/<?php echo $row['student_avatar'] ?>" /></td>
				   <td><?php echo $row['student_fname'].' '.$row['student_surname'] ?></td>
		          <td><?php echo $row['student_group'] ?></td>
		          <td><?php echo $row['student_mobile'] ?></td>
		          <td><?php echo $row['student_email'] ?></td>
				  <td><?php echo date("j/m/y", strtotime($row['student_joined'])); ?></td>
		        </tr>
			
			<?php } ?>
			
                      </tbody>
                    </table>
			</div>
		<br>
      <h2><center></center></h2>
		<br>  
		</div><!--close content_book-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  </div><!--close main-->
<?php include JS_THEME."js_footer.php" ?>
    
