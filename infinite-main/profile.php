<?php
session_start();
$posts="";
$id=$_SESSION['usid'];
$db = mysqli_connect('localhost', 'root', '', 'infinity');
$query = "SELECT * FROM posts WHERE uid='$id';";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) > 0) {
        $rows=mysqli_fetch_all($results);
      foreach($rows as $row){
        $img=$row[2];
        $post_msg=$row[3];
        $posts.="
        <div class='post_body' style='
        text-align: center;
        width: fit-content;'>
            <div class='img_post'>
            <img src='$img' width='200' alt=''>
            </div>
            <div class='text' style='margin:0; padding:6px;'>$post_msg</div>
            
        </div>
        ";

      }
  	  
  	}else {
        $posts.='<center style="margin-top:50px">
        <img src="https://cdni.iconscout.com/illustration/premium/thumb/post-interface-5266761-4397160.png" width="200" alt="">
        <p class="sub-heading" style="color:gray;margin:auto">No Posts Yet!</p>
      </center>';
  	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Include necessary stylesheets -->
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2; /* Light gray background */
            color: #333; /* Dark gray text color */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .profile-section {
            background-color: #fff; /* White background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Light shadow */
            padding: 20px;
            margin-top: 20px;
        }

        h2 {
            color: #007bff; /* Blue heading color */
            text-align: left; /* Align text to the left */
        }

        /* You can adjust the colors for links and other elements as needed */
    </style>
</head>
<body>
    <!-- Profile section -->
    <section class="profile-section" id="profile">
        <div class="container">
            <h2>My Posts</h2>
            <div id="posts-container">
                <!-- Posts will be dynamically populated here -->
                <?php echo $posts ?>
           
        </div>
    </section>

    <!-- Include necessary JavaScript to fetch and display posts -->
    <script src="display.js"></script>
</body>
</html>
