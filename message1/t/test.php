<?php
    include ('db.php'); 
    include ('style.html');
    $query = "SELECT * FROM guestbook WHERE  no=" . $_GET['no']; // 選出該位使用者所留下的所有留言
    $result = mysqli_query($conn, $query); 
    $no = $_GET['no']; 
    
    while ($rs = mysqli_fetch_array($result)){
        echo $rs['subject'];
        echo "<div class='content'> ";
        echo "<div class='m-b-md'>";
        echo "<form name='form1' action='edit.php' method='post'> ";
        echo "<input type='hidden' name='no' value='$rs[no]'>";
        echo "<input type='hidden' name='name' value='$rs[name]'>";
        echo "<p>SUBJECT</p>";
        echo "<input type='text' name='subject' value='$rs[subject]'>";
        echo "<p>CONTENT</p> ";
        echo "<textarea style= 'font-family: Nunito, sans-serif; 
        font-size:20px; width:550px; height:100px;
        ' name='content'>$rs[content]</textarea>";        
    }
    ?>

                        <P><input type='submit' name='submit' value='SAVE'>
                      <style> 
                          input {padding:5px 15px; 
                          background:#FFCCCC; 
                          border:0 none; 
                          cursor:pointer; 
                          -webkit-border-radius: 5px; 
                          border-radius: 5px; } 
                      </style> 
                        <input type="reset" name="Reset" value="REWRITE"> 
                      <style> 
                          input { 
                              padding:5px 15px;background:#FFCCCC; 
                              border:0 none;                              
                              cursor:pointer; 
                              -webkit-border-radius: 5px; 
                              border-radius: 5px; 
                              font-family: 'Nunito', sans-serif; 
                              font-size: 19px; 
                          } 
                      </style> 
                      </form> 
                  </div> 
                </div>        
    