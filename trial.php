<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "bills";

//connect to the database
$conn = mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
	echo "error";
}

//Fetch the images and display them
          $sql = "SELECT * FROM `images` ";
			    $result = $conn->query($sql);

              //loop through the records
							while($row = mysqli_fetch_array($result)){
								$id = $row['id'];
								$image_name = $row['filename'];
                $image_source = $row['url'];
                $current_status = $row['status'];

                //for each image display interface
                echo "<img src=".$image_source."style='height:40px; width:40px;'>".$image_name."<br>";

                //check the current status in the database that changes to 0

                if($current_status == 1){
                  
              function save_from_url($inPath,$outPath){
               //Download images from remote server
               $in=    fopen($inPath, "rb");
              $out=   fopen($outPath, "wb");
              while ($chunk = fread($in,8192)){
             fwrite($out, $chunk, 8192);
    }
               fclose($in);
              fclose($out);
}
 
save_from_url('url');

                  //change the name of file to $image_name

                  //Update status to 0
                    $sql1 = "UPDATE images SET status = '0' WHERE id=$id";
                    $result1 = $conn->query($sql1);
                    //echo $id." ---> ".$current_status;
                }else{
                  /*
                  The current status is 1
                  Therefore do nothing since
                  The file has already been downloaded
                  */
                }

              }
