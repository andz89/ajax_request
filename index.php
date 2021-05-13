


<?php 
$msg = "";
$msgClass = "";
if(filter_has_var(INPUT_POST, 'submit')){
        $name = $_POST['name'];
        $email = $_POST['email'];

        if(!empty($name) && !empty($email)){
                //passed
                echo 'passed';
        }else{
            //failed
            $msg ="please fill the data";
            $msgClass= "alert-danger";
        }
}else{


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" integrity="sha384-3fdgwJw17Bi87e1QQ4fsLn4rUFqWw//KU0g8TvV6quvahISRewev6/EocKNuJmEw" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5 ">
    <div class="col-md-8 mx-auto">
        <h1>Search User</h1>
        <form>
        Search User :<input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggesstions: <span id="output" style="font-weight:bold"></span></p>
    </div>

</div>
<script>
		function showSuggestion(str){
			if(str.length == 0){
				document.getElementById('output').innerHTML = '';
			} else {
				// AJAX REQ
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "suggest.php?q="+str, true);
				xmlhttp.send();
			}
		}
</script>
</body>
</html>



