<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lupa Password </title>
<style>
body {font-family: Arial, Helvetica, sans-serif; width:50%; margin:auto}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #006699;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3 align="center"> Masukan Username dan Anda</h3>

<div class="container">
  <form action="<?= base_url('admin/updatepassword')?>" method="POST">
    <label for="uname"> Username </label>
    <input type="text" id="uname" name="username" placeholder="Masukan Username">
    <label for="pass"> Password </label>
    <input type="text" id="pass" name="password" placeholder="Masukan Password Baru">
    <input type="submit" value="Ganti">
  </form>
</div>

</body>
</html>
