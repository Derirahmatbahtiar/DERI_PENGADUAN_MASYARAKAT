<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    outline: 0;
  
}
body{
    background-color:black;
}
.h1{
    text-align: center;
    font-weight: 300;

}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    background-color:white;
  
}
.container h1{
    text-align: left;
    color: black;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom:gray;
    text-align: center;
}
.container label{
    text-align: left;
    color:black;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border-bottom:grayy;
    color: black;
  
}
.container form button{
    width:50%;
	background: white;
	margin:30px auto;
	padding: 30px 20px;
}
.container form button{
    background:gray;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}</style>
    <body>
        <div class="container">
          <h1>DAFTAR</h1>
            <form action="proses-daftar.php" method="POST">
                <label for="nik" >nik</label><br>
                <input name="nik" id="nik" type="text" placeholder="nik"><br>
                <br>
                <label for="nama" >nama</label><br>
                <input name="nama" id="nama" type="text" placeholder="nama"><br>
                <br>
                <label for="username">username</label><br>
                <input name="username" id="username" type="text" placeholder="username"><br>
                <br>
                <label for="password">password</label><br>
                <input name="password" id="password" type="text" placeholder="passsword">
                <br>
                <label for="telp">No.telp</label><br>
                <input name="telp" id="telp" type="tel" placeholder="no.telp">
                <br>
                <button type="submit">masuk</button>
            </form>
        </div>     
    </body>
</html>
