 <?php

session_start();

?>
 <?php
             include ('includes/conn.php');
              $username=$_GET['user'] ;
              $user_id= $_GET['id'];
              $user_mobile_no =$_GET['user_mobile_no'];
              $book_id =$_GET['bookid'];
              $book_name =$_GET['bookname'];
              $author_name =$_GET['author_name'];
              $issue_date =$_GET['issue_date'];
              $expiry_date =$_GET['expiry_date'];

              $q = "select * from issue_book where username = '$username'  ";

              $result1 = mysqli_query($con,$q);

              $num1 = mysqli_num_rows($result1);

              if($num1 == 1)
              {
                
               header('location:order_confirmation.php?error=1');


              }
              else
              {
               $q2 = "insert into issue_book (username , user_id, user_mobile_no,book_id, book_name, author_name, issue_date, expiry_date) values ('$username' , $user_id , $user_mobile_no, '$book_id' , '$book_name ' , '$author_name'  ,'$issue_date', '$expiry_date')"; 
              $query2 = mysqli_query($con,$q2);
              if ($query2) {
                      echo "<script> alert('inserted')</script>";
                      header('location:order_confirmation.php?error=0');
                    }else{
                      
                      header('location:userdash.php');
                    }
                
               
              }
             
            
                 
                           ?>