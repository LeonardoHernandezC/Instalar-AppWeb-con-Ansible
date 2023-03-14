<?php
    if (isset($_POST['password']) && isset($_POST['username'])) {
        $pw = $_POST['password'];
        $un = $_POST['username'];
        if ($pw == "usuario123" && $un == "Usuario") {
            header("Location: MenuUsuario.php");
        } elseif ($pw == "admin123" && $un == "Admin"){
            header("Location: MenuAdmin.php");
        } else {
            echo '<script type="text/JavaScript">
                alert("Usuario o contraseña erroneos.");
            </script>';
        }
    }
?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Solicitud - Login </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Login </h1> </center>   
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST"> 
        <div class="container">   
            <label>Nombre de Usuario : </label>   
            <input type="text" placeholder="Ingrese Nombre de Usuario" name="username" required>  
            <label>Contraseña : </label>   
            <input type="password" placeholder="Ingrese Contraseña" name="password" required>  
            <button type="submit">Login</button>   
        </div>   
    </form>     
</body>     
</html> 