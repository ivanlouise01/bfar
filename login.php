<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BFAR</title>
    <script src="https://kit.fontawesome.com/bca5dff172.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Barlow&display=swap');

        *{font-family: 'Barlow', sans-serif !important;}
        .btn-primary{ background: #67668A;}
        .btn-primary:hover{ background: #424158;}
        input {text-align:center; }
        .form-control, .btn {border-radius: 0px;font-size: 14px; border-left: 0px; border-right: 0px}
        .btn{ padding: 15px 0px 15px 0px;}
    </style>
</head>
  <body>

    <div class="d-flex p-2 justify-content-center align-items-center" style="height: 100vh;">
        
        <div class="container-sm " style="max-width: 500px; background: #F5F5F5; border: solid #efeff3 2px;padding: 60px 0px 60px 0px;">

            <form class="d-flex justify-content-center flex-column "> 

                <img src="src/img/dabfar.png" class="img-fluid mx-auto" alt="..." style="max-width: 40%;">
                <p class="text-center fs-5" style="font-size: 18px; color: #67668A; padding-bottom: 35px;">BFAR Management System</p>

                <div class="mb-0">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email or Username">
                    <p class="text-center fs-6 text-danger"><i class="fa-solid fa-circle-exclamation"></i> The email, username entered is invalid</p>
                </div>
                
                <div class="mb-0">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <p class="text-center fs-6 text-danger"><i class="fa-solid fa-circle-exclamation"></i> The password entered is invalid</p>
                </div>

                <button type="submit" class="btn btn-primary">SIGN IN</button>
            </form>


        </div>

    </div>

    

    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>