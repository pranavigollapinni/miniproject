<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Feed</title>
    <style>
        body {
            background-image: url('assets\img\post.jpg'); /* Replace 'background-image.jpg' with the path to your background image */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif; /* Optional: Change the font-family */
            color: #ffffff; /* Optional: Change text color */
        }
        /* You can add more styles for your form elements if needed */
        form {
            margin-top: 50px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Optional: Add a semi-transparent background color to make the form stand out */
            border-radius: 10px;
        }
        label, textarea {
            display: block;
            margin-bottom: 10px;
        }
        input[type="file"], textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8); /* Optional: Add a semi-transparent background color to form elements */
            color: #000; /* Change text color for better visibility */
        }
        input[type="file"]::file-selector-button, input[type="submit"] {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            transition-duration: 0.4s;
        }
        input[type="file"]::file-selector-button:hover, input[type="submit"]:hover {
            background-color: #45a049; /* Darker Green */
        }
        input[type="file"]::file-selector-button:active, input[type="submit"]:active {
            background-color: #3e8e41; /* Darkest Green */
            transform: translateY(2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: #4CAF50;">Post Feed</h1> <!-- Green color for heading -->
        <form action="submit_post.php" method="post" enctype="multipart/form-data">
            <label for="image" style="color: #4CAF50;">Choose an image:</label> <!-- Green color for label -->
            <input type="file" id="image" name="image" accept="image/*">
            <label for="feedback" style="color: #4CAF50;">Your Feedback:</label> <!-- Green color for label -->
            <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
