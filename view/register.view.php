<main>
  <div class="login-container">
      <form action="register.login.php" method = "POST">
        <h2>Register</h2>
        <label for="name">Name</label><br>
        <input type="text" name= "name" placeholder="Name" required /><br>
        <label for="email">Email</label><br>
        <input type="email" name= "email" placeholder="Email" required /><br>
        <label for="password">Password</label><br>
        <input type="password" name= "password" placeholder="Password" required /><br><br>
        <button type="submit">Sign up</button>
  
        <?php if(isset($status)): ?>
          <p><?= $status ?></p>
        <?php endif; ?>
  
      </form>
  </div>
</main>