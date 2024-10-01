<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;

$errors = []; // Array to hold validation errors

if (!empty($_GET['id'])) {
    $_id = base64_decode($_GET['id']); // Decode ID
    $user = $userModel->findUserById($_id);
}

// Check if someone else is editing the user
if (isset($_SESSION['editing_user_id']) && $_SESSION['editing_user_id'] != $_id) {
    $_SESSION['error'] = 'User is currently being edited by another user.';
    header('location: list_users.php');
    exit;
}

if (!empty($_POST['submit'])) {
    // Decode the ID from the form input
    if (!empty($_POST['id'])) {
        $_POST['id'] = base64_decode($_POST['id']);
    }

    // Validate name: Only allow a-z, A-Z, 0-9
    if (empty($_POST['name'])) {
        $errors[] = 'Name is required.';
    } elseif (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['name'])) {
        $errors[] = 'Name must only contain letters and numbers.';
    } elseif (strlen($_POST['name']) < 5) {
        $errors[] = 'Name must be at least 5 characters long.';
    } elseif (strlen($_POST['name']) > 15) {
        $errors[] = 'Name must not exceed 15 characters.';
    }

    // Validate password (only if adding new user or password is updated)
    if (empty($_id) || !empty($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errors[] = 'Password is required.';
        } elseif (strlen($_POST['password']) < 6) {
            $errors[] = 'Password must be at least 6 characters long.';
        } elseif (!preg_match('/^[a-zA-Z0-9~!@#$%^&*()]+$/', $_POST['password'])) {
            $errors[] = 'Password must contain only letters, numbers, and special characters ~!@#$%^&*().';
        } elseif (!preg_match('/[~!@#$%^&*()]/', $_POST['password'])) {
            $errors[] = 'Password must include at least one special character: ~!@#$%^&*().';
        } elseif (!preg_match('/[A-Za-z]/', $_POST['password'])) {
            $errors[] = 'Password must include at least one letter.';
        } elseif (!preg_match('/[0-9]/', $_POST['password'])) {
            $errors[] = 'Password must include at least one number.';
        }
    }

    // If no errors, proceed with the user creation/update
    if (empty($errors)) {
        // Check if another user is editing
        if (isset($_SESSION['editing_user_id']) && $_SESSION['editing_user_id'] != $_id) {
            $_SESSION['error'] = 'User is currently being edited by another user.';
            header('location: list_users.php');
            exit;
        }
    
        // Proceed with adding/updating user
        $_SESSION['editing_user_id'] = $_id; // Lock session during edit
    
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
            $_SESSION['success'] = 'User updated successfully.';
        } else {
            $userModel->insertUser($_POST);
        }
    
        // Clear the session lock after update
        unset($_SESSION['editing_user_id']);
        header('location: list_users.php');
        exit;
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>

            <!-- Display errors if any -->
            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?php echo $error; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

            <form method="POST">
                <input type="hidden" name="id" value="<?php echo base64_encode($_id); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
    <script>
        window.addEventListener("beforeunload", function () {
            fetch("unlock_user.php");
        });
    </script>
</body>
</html>
