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
                    <img class="img-fluid"src="{{ asset('storage/'.Auth::user()->foto ) }}"  style="width: 150px; height: 150px;">
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                        Login
                    </button>
                </div>

                <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Endereço de email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Senha</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">Entrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>