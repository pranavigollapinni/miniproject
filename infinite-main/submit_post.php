<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if image file is uploaded
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        // Specify target directory to upload the image
        $target_dir ="uploads/";
        // Generate a unique name for the uploaded file to prevent overwriting existing files
        $target_file = $target_dir . uniqid() . '_' . basename($_FILES["image"]["name"]);
        // Check if the file is an actual image
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (getimagesize($_FILES["image"]["tmp_name"]) !== false) {
            // Check if the file already exists
            if (file_exists($target_file)) {
                echo "<div style='background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; padding: 10px; border: 1px solid transparent; border-radius: .25rem;'>Sorry, the file already exists.</div>";
            } else {
                // Upload the file to the specified directory
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "<div style='background-color: #d4edda; border-color: #c3e6cb; color: #155724; padding: 10px; border: 1px solid transparent; border-radius: .25rem;'>The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded successfully.</div>";
                    echo "<br>";
                    echo "<div style='background-color: #d4edda; border-color: #c3e6cb; color: #155724; padding: 10px; border: 1px solid transparent; border-radius: .25rem;'>Post successfully uploaded. <a href='index.php' style='color: #007bff; text-decoration: none;'>Return to main page</a></div>"; // Link to return to main page

                    // adding to database
                    
                    $feedback = $_POST["feedback"];
                    session_start();
                    $uid=$_SESSION['usid'];
                    $db = mysqli_connect('localhost', 'root', '', 'infinity');
                    $sql="INSERT INTO posts (uid,postImg,post_msg) VALUES ('$uid','$target_file','$feedback')";
                    $result=mysqli_query($db,$sql);




                    exit(); // Ensure that script stops execution after redirection
                } else {
                    echo "<div style='background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; padding: 10px; border: 1px solid transparent; border-radius: .25rem;'>Sorry, there was an error uploading your file.</div>";
                }
            }
        } else {
            echo "<div style='background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; padding: 10px; border: 1px solid transparent; border-radius: .25rem;'>File is not an image.</div>";
        }
    } else {
        echo "<div style='background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; padding: 10px; border: 1px solid transparent; border-radius: .25rem;'>No image file uploaded.</div>";
    }

    // Process feedback
    $feedback = $_POST["feedback"];
    // You can process the feedback here, such as saving it to a database
    echo "Feedback: " . htmlspecialchars($feedback);

}
?>
