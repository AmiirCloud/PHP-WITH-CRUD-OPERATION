<?php
include "Config.php";
$ob  = new conn();
$ob->setConn();
?>
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
    
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class=" col-sm-8  ">
                <table class="table table-striped   ">
                    <tr>
                        <th class="text-white bg-dark">Id</th>
                        <th class="text-white bg-dark">Name</th>
                        <th class="text-white bg-dark">Class</th>
                        <th class="text-white bg-dark" >Update</th>
                        <th class="text-white bg-dark" >Delete</th>
                        <th class="text-white bg-dark" >Add</th>
                    </tr>
                    <tbody>
                        <?php
                         $query = "select * from sudents";
                         $table = "";
                        $table .= "<tr>";
                       
                        $rs  = $ob->db->query($query);
                        while($row= $rs->fetch_array(MYSQLI_NUM)){
                            $table .= "<td>" . $row[0]. "</td>";
                            $table .= "<td>". $row[1]. "</td>";
                            $table .= "<td>" .$row[2]. "</td>";
                            // $link = "index.html".   "id=".   $row[0]."&name=" .  $row[1] . "class=" . $row[2];
                            $l = "index.php?"."id=".$row[0]."&name=".$row[1]."&class=".$row[2];
                            $table .= "<td>". '<a class="btn btn-success" href="'.$l.'"> update </a>'  ."</td>";
                            $delete = "oper.php?"."id=".$row[0];
                            $add = "index.php";
                            $table .= "<td>". '<a class="btn btn-danger" href="'.$delete.'"> Delete </a>'  ."</td>";
                            
                            $table .= "<td>". '<a class="btn btn-info " href="'.$add.'"> add </a>'  ."</td>";
                            echo $table .= " </tr>";
                        }
                        // echo $table;
                      

                       


                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>