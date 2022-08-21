<?php
include('mydb.php');
include('style.html'); 
$account = $_GET['account']; 
//$password = $_GET['password']; 
 echo '<div class="content">'; 
 $sql="SELECT * FROM member" ;
 $row=mysqli_query($conn,$sql);
 echo '<br>You have totally'.mysqli_num_rows($row).'members';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
</head>
<body> 
    <div>
<?php
    //$q = "SELECT * FROM member WHERE account=" .$_GET['account']; //選出該位使用者所留下的所有留言
    $account =$_GET['account']; 
   
    $q = "SELECT * FROM member WHERE account='$_GET[account]'";
    $result = mysqli_query($conn, $q); 
    while ($rs = @mysqli_fetch_array($result))    
       {
        echo "<div class='content'> ";
        echo "<div class='m-b-md' > ";
        echo "<form name='form2' class='note' action='modify.php' method='GET' enctype='multipart/form-data'>";
        echo "<input type='hidden' name='no' value='$rs[no]' maxlength='20' size='20' ><br> ";
        echo "<p>會員姓名:</p>";
        echo "<input type='text' name='name' value='$rs[name]' maxlength='20' size='20' ><br> ";               
        echo "<p>登入帳號:</p>";
        echo "<input type='text' name='account' value='$rs[account]' maxlength='20' size='20'><br>";
        echo "<p>登入密碼:</p>";
        echo "<input type='text' name='password' value='$rs[password]' maxlength='20' size='20'><br> "; 
        echo "<p>會員電話:</p>";
        echo "<input type='text' name='tel' value='$rs[tel]' maxlength='20' size='20'><br>  ";        
        echo "<p>會員地址:</p>";
        echo "<input type='text' name='address' value='$rs[address]' maxlength='20' size='20'><br> ";
        echo "<p>會員照片:</p>";     
        echo "<input type='file' name='gif' value='$rs[gif]' id='file'><br>";
             }
      //  mysqli_close($conn); 
            ?>
                <style> 
                        input {padding:5px 15px; background:#ffcccc; border:0 none; 
                        cursor:pointer; 
                        -webkit-border-radius: 5px; 
                        border-radius: 5px; } 
                    </style> 

                <input type="submit" name="update" value="提交">
                <style> 
                        input { 
                            padding:5px 15px; 
                            background:#FFCCCC;                             
                            border:0 none;f 
                            cursor:pointer; 
                            -webkit-border-radius: 5px; 
                            border-radius: 5px; 
                            font-family: 'Nunito', sans-serif; 
                            font-size: 19px; 
                        } 
                    </style>
            </form>
        </div>
        <?php
         if (isset($_GET['update'] ) )
            {  
                $no=$_GET['no'];
                $name = $_GET['name']; 
                $account = $_GET['account']; 
                $password = $_GET['password']; 
                $tel = $_GET['tel']; 
                $address = $_GET['address']; 
                $gif = $_GET['gif'];            
              $sql = "UPDATE member SET  name='$name',account='$account',password='$password',tel='$tel', address='$address',gif='$gif',memdate=sysdate() where no=$no"; 
              if (!mysqli_query($conn, $sql)) 
              { 
                die(mysqli_error($conn)); 
              } 
              else 
              { 
                echo 
                  " 
                    <script>
                  setTimeout(function()
                    {window.location.href='manager_ber.php?account=" . $account . "';},200); 
                    </script> ";
                 //setTimeout(要执行的代码, 等待的毫秒数)
                 //setTimeout(JavaScript 函数, 等待的毫秒数)
              } 
            }
              else 
              { 
              echo '<p><div class="success">Click <strong>SAVE</strong> when you\'re done.</div>'; 
              } 

            ?>
    </div>
</div>
</body>
</html>
