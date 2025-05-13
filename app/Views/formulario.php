<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <title>CADASTRO</title>
</head>
    <style>
        body{
            margin: 0;
        }
.cabecalho{

background-color: #428c58;
width: 100%;
height: 90px;

}
    .h1{
    
        font-size: 40px;
    }
    form{
    margin-left: 40%;
    top: 50px;

}

.bebas-neue-regular {
  font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: normal;
}


input{
    width: 400px;
    height: 30px;
    border-radius: 5px;
    -webkit-box-shadow: 0px 0px 27px -12px rgba(0,0,0,0.55);
-moz-box-shadow: 0px 0px 27px -12px rgba(0,0,0,0.55);
box-shadow: 0px 0px 27px -12px rgba(0,0,0,0.55)
}

img{
    width: 230px;
    margin-top: -12px;
    margin-left: 48%;
}
    </style>


<body>
    <div class="cabecalho">

    </div>

    <form>
        <h1 class="bebas-neue-regular h1">Cadastro paciente:</h1>
        <input type="text" placeholder="info. paciente">

        <h2 class="bebas-neue-regular h1">Cadastrar plano de cuidados:</h2>
        <input type="text" placeholder="info. médico">

        <h3 class="bebas-neue-regular h1">Cadastrar Cuidador:</h3>
        <input type="text" placeholder="info. cuidador">


    </form>
</body>
</html>