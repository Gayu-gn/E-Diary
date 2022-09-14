<?php
if (isset($_GET['viewid'])) 
{
  $sno1=$_GET['viewid'];
session_start();
$conn=mysqli_connect("localhost","root","","ediary");
$q="select * from notes where sno=$sno1 ";
$r=mysqli_query($conn,$q);
if($r){
  while($row=mysqli_fetch_assoc($r)){
    $sno=$row['sno'];
    $category_name=$row['category_name'];
    $title=$row['title'];
    $description=$row['description'];

  }
}} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ediary</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel="stylesheet" >
<style>
body {
  margin: 0;
}
.heading{
    font-size: 30px;
    color: #de9bd9;
    text-align: center;
    padding-top: 20px;
    padding-left: 5px;
    padding-bottom: 20px;
    font-weight: bold;
  }
.sidenav {
  height: 100%;
  width: 240px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 30px;
}
.sidenav a {
  color: white;
  text-decoration: none;
  font-size: 20px;
}
.sidenav a:hover {
  color: #de9bd9;

}
.content {
  margin-left: 250px;
  padding-left: 30px;
  padding: 55px;
}
.container-fluid{
  background-color: #de9bd9;
}
</style>
</head>
<body>
<div class="sidenav">
  <div class="heading"><img src="img1.jpg" width="35px" height="35px" class="img1">&nbsp&nbspEdiary</div><br><br>
  <ul>
    <li><a href="dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16"><path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/></svg>&nbsp&nbspDashboard</a></li><br>
    <li><a href="addc.php"><svg xmlns=http://www.w3.org/2000/svg width="20" height="20" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16"><path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/><path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/></svg>&nbsp&nbspAdd Category</a></li><br>
    <li><a href="Managec.php"><svg xmlns=http://www.w3.org/2000/svg width="20" height="20" fill="currentColor" class="bi bi-journal-minus" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/><path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/><path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/></svg>&nbsp&nbspManage Category</a></li><br>
    <li><a href="addn.php"><svg xmlns=http://www.w3.org/2000/svg width="20" height="20" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16"><path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/><path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/></svg>&nbsp&nbspAdd Notes</a></li><br>
    <li><a href="managen.php"><svg xmlns=http://www.w3.org/2000/svg width="20" height="20" fill="currentColor" class="bi bi-journal-minus" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/><path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/><path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/></svg>&nbsp&nbspManage Notes</a></li><br>
    <li><a href="change_pwd.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/></svg>&nbsp&nbspChange Password</a></li><br>  
    <li><a href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg>&nbsp&nbspMy Profile</a></li><br>
    <li><a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16"><path d="M7.5 1v7h1V1h-1z"/><path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/></svg>&nbsp&nbspLogout</a></li><br>
  </ul>
</div>
<div class="content">
  <div style="font-size: 40px; font-weight: bold;">Add Notes</div><br><br>
  <div class="container-fluid col-9">   
    <form method="POST" class="p-3">
      <label style="font-size: 20px;">Category</label><br>
      <select class="form-select col-md-6" name="category_name">
        <option selected><?php echo $category_name; ?></option>
          <?php
            $conn = mysqli_connect("localhost","root","","ediary");
            $query = "SELECT * FROM category";
            $query_run = mysqli_query($conn,$query);
            if(mysqli_num_rows($query_run) > 0){
              foreach($query_run as $items){
                ?>
                  <option><?= $items['category']; ?></option>
                <?php
              }
            }
          ?>
      </select><br>
      <label style="font-size: 20px;">Note Title</label><br>
      <input type="text" name="title" class="col-12" value="<?php echo $title; ?>"><br><br>
      <label style="font-size: 20px;">Note Description</label><br>
      <textarea rows="8" cols="109" name="description"><?php echo $description; ?></textarea>
      <br><br>      <button type="submit" style="color: white; background-color: #9d6aba; " name="submit" class="btn btn-md btn-block text-uppercase">UPDATE</button>
    </form>
  </div>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
 $conn=mysqli_connect("localhost","root","","ediary");
$e=$_SESSION['e'];
    $category_name=$_POST['category_name'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $q="update notes set category_name='$category_name',title='$title',description='$description' where sno=$sno " ;
    $r=mysqli_query($conn,$q);
    if($r){
        echo "<script> alert('Successfully Updated!!'); </script>";
  }     
    else{
        echo "<script> alert('not get updated!!'); </script>";
    }
}  
?>
