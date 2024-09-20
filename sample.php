<h1>Hello</h1>
<p>this is a paragraph</p>

Search: <input type="text" id="search" />
<br />
<input type="button" value="click me" onclick="action()" />
<br />

<form method="POST">
  Username: <input type="text" name="user"/>
  <br />
  Password: <input type="password" name="pass" />
  <br />
  <input type="submit" />
</form>  


<script>
var secret= 1+2;
console.log("hello")

function action(){
  console.log("alert triggered")
  console.log(document.getElementById("search").value)
  document.getElementedById("search").value= "new value";
  document.getElementedById("heading").style.color= "red";

}
</script>
<style>
  body{
    color:white;
    background-color:darkslategray;
  }

  </style>
<?php
if( isset($_POST['pass'])){
  echo "password: ". $_POST['pass'];
  }
if( isset($_GET['user'])){
echo "username: ". $_GET['user'];
}
$a=1+2;

if (5 > 8) {
    echo "Have a good day!";
  }
?>

<h2>

<?php
