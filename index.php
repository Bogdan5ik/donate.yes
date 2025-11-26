<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		html, body {
    margin: 0;
    padding: 0;
    width: 100%;
    overflow-x: hidden;
}

body {
    background: linear-gradient(
        333deg,
        rgba(248,248,252,1) 0%,
        rgba(182,228,241,1) 0%,
        rgba(232,233,237,1) 33%,
        rgba(58,187,219,1) 50%,
        rgba(0,212,255,1) 100%
    );
    background-attachment: fixed;
    background-size: cover;
    color: #fff;
}

		
		.title{
			font-family:Arial;
			font-size:90px
}
	</style>
</head>
<?php 
$con = mysqli_connect( "127.0.0.1", "root", "", "donate");
if (!$con) {
    $error = mysqli_connect_error();
    echo "<script>console.error('Connection failed: ". addslashes($error) ."');</script>";
    die();
} else {
    echo "<script>console.log('Connected successfully');</script>";
}

$select = "SELECT * FROM `projects`";
$results = mysqli_query($con, $select);
?>
<body class="text-light bg-dark">
<div class="col-12 py-3">
	<div class="d-flex">
		<div class="col-2 pt-3">
			<a href="" class="text-light ms-3">О компании</a>
			<a href="" class="text-light ms-3">Все проекты</a>
		</div>
		<div class="col-8 text-center">
			<h1 class="fw-bold">Donate.yes</h1>
			<p>Донатная платформа для любых проектов</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="add.php" class="text-light"> Добавить проект <img src="add.png" alt=""> </a>
			

		</div>
	</div>
</div>
<div class="col-12">
	
	<div class="d-flex mt-5 col-10 mx-auto">
		<div class="col-6 py-5 mt-5 d-flex" >
			<h1 class="title" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Реализуй <br> свои мечты</h1>
		</div>
			<img src="logo.png" alt="" style="height: 29rem;">
		<div class="col-6">
            <!--картинка-->
		</div>
	</div>
<div style="display: flex;" class="mt-2 flex-wrap">
	<?php

              for ($i=0; $i < mysqli_num_rows($results) ; $i++){
	$post = mysqli_fetch_assoc($results);  ?>
	               
				   
		<!--карточка проекта-->
		
		<div class="col-4 p-3 text-dark mt-2" >
			<div class="col-12 bg-light rounded p-3" >
				<div class="rounded" style="background-image: url(<?php echo $post['img'] ?>); background-size: cover; background-position: center; height:500px">				
				</div>
				<div>
					<h3><?php echo $post['title'] ?></h3>
					<p><?php echo $post['text'] ?></p>
					<p> <span class="fw-bold"> Всего собрать: <?php echo $post['goal'] ?></span>  руб.</p>
					<p><span class="fw-bold"> Собрано: <?php echo $post['donated'] ?></span>  руб.</p>
					<button class="btn btn-success">Поддержать проект</button> <br>

					<form action="deletTwit.php">
						
					<input style="display: none;" type="number" name="id" value="<?php echo $post['id']; ?>">
					<button style="border: none;"><img src="delete_icon.png" alt="" style="height: 2rem;"></button>

					</form>

                    <img class="edit" src="edit.png" alt="" style="height: 2rem;">

					<form action="update.php">
					<div class="col-5 forr" style="display: none;">
						<input name="id" value="<?php echo $post['id']?>" style="display: none;">
						<input value="<?php echo $post['title'] ?>" type="text" class="form-control mt-2" placeholder="Заголовок проекта" name="title">
                        <input value="<?php echo $post['text'] ?>" type="text" class="form-control mt-2" placeholder=" Описание проекта" name="text">
                        <input value="<?php echo $post['goal'] ?>" type="number" class="form-control mt-2" placeholder="Сколько надо собрать денег? " name="goal">
                        <input value="<?php echo $post['donated'] ?>" type="number" class="form-control mt-2" placeholder="сколько на данный момент есть денег?" name="donated">
                        <input value="<?php echo $post['img'] ?>" type="text" class="form-control mt-2" placeholder="Адрес картинки" name="image">
                        <button class="btn btn-success mt-4">Изменить</button>
					</div>
					</form>
				</div>
			</div>
		</div>	
    	
	

	<?php } ?>
	</div>
</div>

</body>
</html>

<script>
	let edits = document.querySelectorAll('.edit');

    edits.forEach(function(edit){
         edit.addEventListener('click', function(){
            let form = edit.closest('div.col-12').querySelector('.forr');
        if(form){
            form.style.display = "block";
        } else{
			form.style.display = "none";
		}
    });
});


</script>
