



<?php
$conn = mysqli_connect("localhost","root","","fms_db");
$sql = "SELECT * FROM `files` ORDER BY id ASC";
$result = mysqli_query($conn,$sql);
?>



<?php include 'fileslogic.php';?>



<?php
	
  if(!isset($_SESSION['login_id']))
    header('location:login.php');
 include('./header.php'); 
 //include('./auth.php'); 
 ?>




<link rel="icon" href="modal\css1\images\logo.png" type="image" />











<?php






















if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `files` WHERE  CONCAT(`id`, `name`,`date_updated`)LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
    else {
        $query ="SELECT * FROM `files`ORDER BY id DESC";
        $search_result = filterTable($query);
        
    }
    
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "fms_db");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
        
    
    

?>




<!DOCTYPE html>
<html>  
    <head>
       
    <title>Division of Davao del Sur|M.E.M.O</title>
   
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	
		<meta name="viewport" content="width=device-width, initial-scale=1">

		
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--edit-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--send-->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">






  <style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 80px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 6px 8px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>











<!--notificion-->

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 4px 6px;
  position: relative;
  display: inline-block;
  border-radius: 6px;
}

.notification:hover {
  background: Yellow;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>



	




</head>
<body>
    
            
        



<!--  Downlod-->


      

            



           
         <form action="index.php?page=files2" method="post" enctype="multipart/form-data">
                
         <input type="file" name="myfile" >   <button type="submit" name="save"><i class="fa fa-upload" style="font-size:14px;color:red"></i>Upload</button>
              

              <br>
              
              <br>


                <input type="text" name="valueToSearch"> 
        
                <button type="submit" name="search" value="Search"><i class="fa fa-search"></i>Search</button>
                

    </form>





      












<table class="table table-bordered">



<thead class="alert-info">
        <th>REFERENCE NUMBER</th>
        <th>DESCRIPTION</th>
    
        <th>DATE UPLOADED</th>
        <th>NOTIFICATION</th>
        <th>DOWNLOAD</th>
        <th>ACTION</th>
        

    </thead>

    <tbody>


     


<?php while($row = mysqli_fetch_array($search_result)): ?>



        <tr> 

            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
           
            <td><?php echo $row['date_updated'];?></td>



           

	<td>

            <div class="dropdown">
								<a href="#" class="notification"><i class='far fa-bell' style='font-size:20px'></i><span class="badge">1</span></a>
						
							
<div class="dropdown-content">
<a href="transferscnhs.php?id=<?php echo $row['id']?>">Upload to Schools</a>


</div>
</div>

</td>		




            <td>
            <a href="indexdown.php?file_id=<?php echo $row['id']?>"><i class="fa fa-download" style="font-size:12px"></i>DOWNLOAD </a>
            </td>

            <td>
            <a href="del.php?id=<?php echo $row['id']?>"><i class='far fa-trash-alt' style='font-size:12px;color:red'></i>DELETE</a>

            </td>

           



        </tr>
<?php endwhile;?>


       
    </tbody>



</table>











     
 </body>
</html>