<!DOCTYPE html>

<html>
 <head>
    <script>
        function submit1()
        {
        let text;
        if (confirm("Press a button!") == true) {
          text = "You pressed OK!";
        } else {
          text = "You canceled!";
        }
           
        
        window.alert(text);
        
        }
        </script>

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > <title>Contact me</title>
 </head>
 <body dir="ltr" bgcolor="#91b3d6">
    <form method="post">  
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Your E-mail Content: <textarea name="comment" rows="5" cols="60"></textarea>
        <br><br>
        <button onclick="submit1()">Send Email</button>
      </form>
      
 </html>
 


 <?php
              
  if(isset($_POST["name"]))
  {
  chdir("textfiles");
              
  $fileCount = count (glob ('*.txt'));
  $newName = ( $fileCount + 1) . '.txt';
  
  $data=$_POST['name'];
              
  $fp = fopen($newName, 'a');
  fwrite($fp, $data . PHP_EOL);
  fclose($fp);
  }
 ?>
  
  <?php
              
  if(isset($_POST['email']))
  {
  chdir("textfiles");
  
  $fileCount = count (glob ('*.txt'));
  $newName = ($fileCount) . '.txt';
               
  $data=$_POST['email'];
              
  $fp = fopen($newName, 'a');
  fwrite($fp, $data . PHP_EOL);
  fclose($fp);
  }
  ?>
              
  <?php
              
  if(isset($_POST['comment']))
  {
  chdir("textfiles");
   
  $fileCount = count (glob ('*.txt'));
  $newName = ( $fileCount ) . '.txt';
              
  $data=$_POST['comment'];
              
  $fp = fopen($newName, 'a');
  fwrite($fp, $data . PHP_EOL);
  fclose($fp);
  }
  ?>
