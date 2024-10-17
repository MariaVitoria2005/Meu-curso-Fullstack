<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Postagem</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>    
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img class="card-img-top" src="{{ asset('storage/'.Auth::user()->foto ) }}" width="200" height="150" alt="">
            </div>

            <div class="col-sm">
                @foreach($postagems as $postagem)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/'.$postagem->foto) }}" alt="Imagem de capa do card" >
                        <div class="card-body">
                            <h5 class="card-title"> {{ $postagem->titulo }}</h5>
                            <p class="card-text">{{ $postagem->conteudo }}</p>
                            <a href="#" class="btn btn-primary">Visitar</a>
                        </div>
                     </div>                 
                @endforeach
            </div>

            <div class="col-sm">
                <button type="submit" class="btn btn-outline-dark">Editar</button>
            </div>
        </div> 
    </div>
    </body>
</html>