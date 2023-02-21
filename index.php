
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
<?php
if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $name = $_GET['name'];
    $class =  $_GET['class'];
   
}
else{
    $id =  "";
    $name = "";
    $class =  "";
}
?>
 <section  class="p-3   justfy-content-center  col-sm-6 offset-sm-3 col-md-5 offset-md-4  ">
    <div class="container ">
        <div class="row   ">
            <div class="card shadow  rounded  ">
                <form action="oper.php" method="post" class="p-2">
                <div class="form-group">
                       <label for="" class="form-label">user Id:</label>
                       <input type="text" class="form-control" name="id" disabled= "true"value = "<?php  echo $id ?>">
                    </div>
                    <div class="form-group">
                       <label for="" class="form-label">user Name:</label>
                       <input type="text" class="form-control" name="name"value = "<?php  echo $name ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Class:</label>
                        <input type="text" class="form-control" name="c"value = "<?php  echo $class ?>" >
                     </div>
                    <input type="submit" name="sub"  value = "insert"class="btn btn-primary">
                    <input type="submit" name="update"  value = "update"class="btn btn-success" >

                  

                </form>

                
            </div>
        </div>
    </div>
 </section>


</body>
</html>