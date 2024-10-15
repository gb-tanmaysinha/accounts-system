<body class="d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12" style="max-width: 25rem">
        <h1 class="fs-1 text-center">Register</h1>

        <p class="lead text-center text-body-secondary">Join our platform and take control of your workflow.</p>

        <form action="" method="POST" class="mb-5">
          <!-- Email Input Field -->
          <div class="form-floating mb-6">
            <input type="email" 
                   class="form-control" />
            <label for="floatingEmailGrid">Email address</label>
          </div>

          <!-- Password Input Field -->
          <div class="form-floating mb-4"> 
            <input type="password" 
                  class="form-control" 
                  name="password" 
                  aria-describedby="passwordHelpBlock" 
                  required>
            <label for="floatingPasswordGrid">Password</label>
            <div id="passwordHelpBlock" class="form-text">
              Your Password should be minimum 8 characters long, including at least 1 number and 1 symbol.
            </div>
          </div>

          <!-- Verification Password Input Field -->
          <div class="form-floating mb-4">
            <input type="password" 
                  class="form-control" 
                  name="confirm_password" 
                  aria-describedby="confirmPasswordHelpBlock" 
                  required>
            <label for="floatingConfirmPasswordGrid">Confirm Password</label>
            <div id="confirmPasswordHelpBlock" class="form-text">
              Please confirm your password.
            </div>
          </div>

          <button class="btn btn-secondary w-100" 
                  type="submit"
                  name="registerStudentBtn">Sign up</button>
        </form>

        <p class="text-center text-body-secondary mb-0">
          Already have an account? <a href="<?php echo $login_url ?? ''; ?>">Login</a>.
        </p>
      </div>
    </div>
  </div>
</body>

<?php 
  if (isset($_POST['registerStudentBtn'])) {
    $email = $_POST('email');
    $password = $_POST('password');
    $confirm_password = $_POST('confirm_password');
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(, 'email', FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      if (!checkIfEmailExists($db, 'students', $email)) {
        try {
          // Prepare the SQL statement
          $insertStudentData = $db->prepare("INSERT INTO students (email_address) VALUES (:email)");
          $insertStudentData->execute(['email' => $email]);
          echo "Registration successful. Thank you for signing up!";
        } 
        catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
      }
    } 
    else {
      echo "Invalid email format. Please try again.";
    }
  }
?>