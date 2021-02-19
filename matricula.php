<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- CSS -->

    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- CDN BOOTSTRAP -->

    <!-- CND JQUERY -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- CND JQUERY -->

    <!-- FUNÇÃO JS QUE CRIA O ACCORDION -->
    <script>
    $( function() {
        $( "#accordion" ).accordion({
        collapsible: true
        });
    } );
    </script>

</head>
<body>
    <div class="externo">
        <div class="interno">
            <div id="accordion">
                    <h3>Responsável</h3>
                    <div>
                    <form action="form.php" method="post" id="form">
                        <div class="form-row">
                        <!--Colocando os campos lado a lado -->
                            <div class="form-group col-sm-5">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome" class="form-control" required maxlength="30">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="cpf">CPF:</label>
                                <input type="text" name="cpf" id="" class="form-control" required maxlength="11" minlength="11" placeholder="somente números">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="tel">Telefone:</label>
                                <input type="text" name="tel" id="" class="form-control" required maxlength="11" minlength="8" placeholder="Ex: 74900000000">
                            </div>
                        </div>
                    </form>
                    </div>
                    <h3>Aluno</h3>
                    <div>
                        <form action="formAluno" method="post" id="formAluno">
                            <div class="form-row">
                                <div class="form-group col-sm-5">
                                    <!-- colocando os campos lado a lado -->
                                    <label for="aluno">Nome do Aluno:</label>
                                    <input type="text" name="aluno" id="aluno" class="form-control">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="dtnasc">Data de nascimento:</label>
                                    <input type="date" name="tdnasc" id="dtnasc" class="form-control">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="whatsapp">WhatsApp:</label>
                                    <input type="text" name="whatsapp" id="whatsapp" class="form-control" required maxlength="11" minlength="8" placeholder="Ex: 74900000000">
                                </div>
                            </div>
                        </form>
                    </div>
                    <h3>Curso</h3>
                    <div>
                        
                    </div>
                    <h3>Pagamento</h3>
                    <div>
                        
                    </div>
                    <h3>Conclusão</h3>
                    <!-- Colocar uma condição especial em que essa div só fique visível caso os compos do form forem preenchidos -->
                    <div>
                        
                    </div>
            </div>
        </div>
    </div>
</body>
</html>