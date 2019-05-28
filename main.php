
      <div class="container" style=" border: 10px solid #a4764a;">
        <div class="btn-group btn-group-justified">
          <?php 
               if(isset($_SESSION['username'])) {
                 echo "<a href='userdash.php' class='btn btn-primary'><span class ='glyphicon glyphicon-eye-open'></span> Hey ".Ucfirst($_SESSION['username'])."</a>"; 
                
                 }
                 else { 
                echo "<a href='login.php'><b>Hello Buddy</b></a>"; 
                 }
                  ?>
          <a href="userbs.php" class="btn btn-primary">Books search </a>
          <a href="userpo.php" class="btn btn-primary">Place Order</a>
          <a href="uservd.php" class="btn btn-primary">View Date Info</a>
          <a href="userrb.php" class="btn btn-primary">Return Book</a>
          <a href="index.php" class="btn btn-primary">Logout</a>

      </div>
    </div>