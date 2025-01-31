<main>
  <div class="login-container">
      <form action="login.php" method = "POST">
        <h2>Login</h2>
        <label for="email">Email</label><br>
        <input type="email" name= "email" placeholder="Email" required /><br>
        <label for="password">Password</label><br>
        <input type="password" name= "password" placeholder="Password" required /><br><br>
        <button type="submit">Sign In</button>
        
        <?php if(isset($status)): ?>
          <p><?= $status ?></p>
        <?php endif; ?>
  
        <p>Don't have an account ? <a href="register.php">Create one</a></p>
      </form>
  </div>
</main>