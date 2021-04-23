<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->

    <link href="/css/style.css">
    <!-- JavaScript Bundle with Popper -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    
    <h2 class="d-flex justify-content-center mt-4">На вашем счету: {{$info->balance}}</h2>
    <main class="form-signin d-flex justify-content-center ">
        
    
        <form method="POST" action="/transaction" enctype="multipart/form-data" class="col-5">
        @csrf
            <div class="form-floating mt-3">
                <input name="money" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Деньги</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <input type="text" name="receiver_id" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Кому</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Списать</button>
        </form>
    </main>
    


</body>

</html>



