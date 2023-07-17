<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
            background-image: url(img1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-container {
            background-color: #fff;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 40px;

        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        textarea {
            height: 100px;
        }
        
        .submit-btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .submit-btn:hover {
            background-color: #8f968f;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Feedback Form</h1>
        <form id="feedbackForm" method="POST" action="submit.php">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required>
            </div>
    
            <div class="form-group">
                <label for="email">Email ID:</label>
                <input type="email" name="email" id="email" placeholder="Enter your Email id" required>
            </div>
    
            <div class="form-group">
                <label for="rating">Rating:</label>
                <select name="rating" id="rating" required>
                    <option value="1">★☆☆☆☆</option>
                    <option value="2">★★☆☆☆</option>
                    <option value="3">★★★☆☆</option>
                    <option value="4">★★★★☆</option>
                    <option value="5">★★★★★</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="comments">Additional Comments:</label>
                <textarea name="comments" id="comments" rows="4" cols="50"></textarea>
            </div>
    
            <center><input type="submit" name="submit" value="Submit" class="submit-btn"></center>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
