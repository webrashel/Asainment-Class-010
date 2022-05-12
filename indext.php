<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .all-content {
            position: absolute;
            top: 50px;
            left: 450px;
        }


        .button {
            margin-top: 20px;
        }

        .containers {
            width: 500px;
            height: auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20PX;
            text-decoration: underline;
            color: #3498db;
        }

        .brt {
            background: #3498db;

        }

        .brt:hover {
            background: #2980b9;
        }
    </style>


</head>


<body>

    <div class="all-content">
        <div class="containers">
            <div class="wrap shadow from-div">
                <div class="card">
                    <div class="card-body">
                        <H2>RAGISTRATION FROM</H2>
                        <?php
                        if (isset($v_message)) {
                            echo $v_message ;
                        } 
                        
                        
                        ?>

                        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                       

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> -->
                        <form method="Post" action="from10.php">

                            <div class="mb-6">
                                <label for="exampleInputname" class="form-label">Your Name</label>
                                <input type="text" name="username" class="form-control" id="exampleInputname">
                            </div>
                            <div class="mb-6">
                                <label for="exampleInputphone" class="form-label">Your Phone</label>
                                <input type="tel" name="phone" class="form-control" id="exampleInputphone">
                            </div>

                            <div class="mb-6">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1">

                            </div>

                            <div class="mb-6">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="button">
                                <button type="submit" name="btnregister" class="btn btn-primary brt">Submit</button>
                            </div>




                        </form>
                    </div>

                </div>
            </div>



        </div>

    </div>

</body>

</html>