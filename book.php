<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    // Required fields
    $fields = ['first_name', 'last_name', 'email', 'phone', 'street', 'postcode', 'city'];
    
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = "Required Field";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .input-field.error {
            border: 2px solid red;
        }
        .error-message {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Your details</h2>
        <form method="POST">
            <label>First name*</label>
            <input type="text" name="first_name" class="input-field <?php echo isset($errors['first_name']) ? 'error' : ''; ?>">
            <span class="error-message"> <?php echo $errors['first_name'] ?? ''; ?> </span>
            
            <label>Last name*</label>
            <input type="text" name="last_name" class="input-field <?php echo isset($errors['last_name']) ? 'error' : ''; ?>">
            <span class="error-message"> <?php echo $errors['last_name'] ?? ''; ?> </span>
            
            <label>Email address*</label>
            <input type="email" name="email" class="input-field <?php echo isset($errors['email']) ? 'error' : ''; ?>">
            <span class="error-message"> <?php echo $errors['email'] ?? ''; ?> </span>
            
            <label>Phone*</label>
            <input type="text" name="phone" placeholder="+66" class="input-field <?php echo isset($errors['phone']) ? 'error' : ''; ?>">
            <span class="error-message"> <?php echo $errors['phone'] ?? ''; ?> </span>
            
            <label>Street, No.*</label>
            <input type="text" name="street" class="input-field <?php echo isset($errors['street']) ? 'error' : ''; ?>">
            <span class="error-message"> <?php echo $errors['street'] ?? ''; ?> </span>
            
            <label>Mandatory post code*</label>
            <input type="text" name="postcode" class="input-field <?php echo isset($errors['postcode']) ? 'error' : ''; ?>">
            <span class="error-message"> <?php echo $errors['postcode'] ?? ''; ?> </span>
            
            <label>City*</label>
            <input type="text" name="city" class="input-field <?php echo isset($errors['city']) ? 'error' : ''; ?>">
            <span class="error-message"> <?php echo $errors['city'] ?? ''; ?> </span>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
