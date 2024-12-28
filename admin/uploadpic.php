<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .upload-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        .upload-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .file-input {
            position: relative;
            overflow: hidden;
        }

        .file-input input[type="file"] {
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
        }

        .file-input label {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            width: 100%;
        }

        .file-input label:hover {
            background-color: #0056b3;
        }

        .btn-upload {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn-upload:hover {
            background-color: #218838;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="upload-container">
    <h2>Upload Your File</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter title" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Enter description" rows="4" required></textarea>
        </div>

        <div class="file-input">
            <input type="file" id="file" name="file" required>
            <label for="file">
                <span class="upload-text">Choose a file...</span>
            </label>
        </div>

        <button type="submit" class="btn-upload">Upload</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and validate input fields
    $title = $_POST['title'] ?? null;
    $description = $_POST['description'] ?? null;

    if (empty($title) || empty($description)) {
        echo "<p class='error-message'>Title and Description are required fields.</p>";
        exit;
    }

    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/'; // Directory to save the uploaded file
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Create directory if not exists
        }

        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Allowable file extensions
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx'];

        if (in_array($fileExt, $allowedExtensions)) {
            $newFileName = time() . '_' . $fileName; // Rename the file to avoid overwriting
            $destPath = $uploadDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {
                // File uploaded successfully
                $imagePath = $destPath;

                // Database credentials
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "caradmin"; // Corrected database name

                // Establish database connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Insert data into the database
                $stmt = $conn->prepare("INSERT INTO uploads (image_path, title, description) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $imagePath, $title, $description);

                if ($stmt->execute()) {
                    echo "<p class='success-message'>File and details successfully uploaded!</p>";
                } else {
                    echo "<p class='error-message'>Error saving details to the database: " . $stmt->error . "</p>";
                }

                $stmt->close();
                $conn->close();
            } else {
                echo "<p class='error-message'>Error moving the uploaded file.</p>";
            }
        } else {
            echo "<p class='error-message'>Invalid file type. Allowed types: " . implode(', ', $allowedExtensions) . "</p>";
        }
    } else {
        echo "<p class='error-message'>Error: " . ($_FILES['file']['error'] ?? "No file uploaded") . "</p>";
    }
} else {
    echo "<p class='error-message'>Invalid request.</p>";
}
?>
</body>
</html>
