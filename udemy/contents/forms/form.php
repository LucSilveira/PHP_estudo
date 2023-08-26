<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<h3 class="titulo">Formulários</h3>

<?php
    if(count($_POST) > 0)
    {
        $erros = [];

        if(!filter_input(INPUT_POST, 'nome'))
        {
            $erros['nome'] = 'Nome é obrigatório!';
        }

        if(!filter_input(INPUT_POST, 'nascimento'))
        {
            $erros['nascimento'] = 'A data de nascimento é obrigatória';
        
        }else{

            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
            
            if(!$data)
            {
                $erros['nascimento'] = "Data deve estar no padrão (dia/ mês /ano)";
            
            }
        }

        if(!filter_input(INPUT_POST, 'email'))
        {
            $erros['email'] = 'Email é obrigatório!';

        }else{

            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                $erros['email'] = 'Email inválido!';
            }
        }

        $mensagem = substr($_POST['email'], 0, strpos($_POST['email'], '@'));
        // substr($inthat, 0, strpos($inthat, $this));

        if(!filter_input(INPUT_POST, 'site'))
        {
            $erros['site'] = 'Site é obrigatório!';

        }else{

            if(!filter_var($_POST['site'], FILTER_VALIDATE_URL))
            {
                $erros['site'] = 'Site inválido!';
            }
        }

            
        $config = [
            'options' => ['min_range' => 0, 'max_range' => 20]
        ];

        if($_POST['filhos'] == null)
        {
            $erros['filhos'] = 'A quantidade de filhos é obrigatório!';
        }
                    
        else if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $config) && $_POST['filhos'] != 0)
        {
            $erros['filhos'] = 'A quantidade de filhos está inválida!';
        }

        if(!filter_input(INPUT_POST, 'salario'))
        {
            $erros['salario'] = 'Salario é obrigatório!';

        }else{
            $config02 = [
                'options' => ['decimal' => ',']
            ];

            if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $config02))
            {
                $erros['salario'] = "O salário está inválido!";
            }
        }
    }
?>

<h4>Cadastro -</h4>
<form action="#" method="post">
    <section class="form-row">
        <section class="form-groug col-md-7">
            <label for="nome">Nome :</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid error' : '' ?>"
                    id="nome" name="nome" placeholder="Nome ..."
                    value="<?= $_POST['nome'] ?>">
            <p><?= $erros['nome'] ?></p>
        </section>  
        <section class="form-groug col-md-5">
            <label for="nascimento">Data de nascimento :</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid error' : '' ?>"
                    id="nascimento" name="nascimento" placeholder="01/01/0001 ..."
                    value="<?= $_POST['nascimento'] ?>">
            <p><?= $erros['nascimento'] ?></p>
        </section>  
    </section>
    <section class="form-row">
        <section class="form-groug col-md-6">   
            <label for="email">Email :</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid error' : '' ?>"
                    id="email" name="email" placeholder="email@email.com ..."
                    value="<?= $_POST['email'] ?>">
            <p><?= $erros['email'] ?></p>
        </section>  
        <section class="form-groug col-md-6">
            <label for="site">Site :</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid error' : '' ?>"
                    id="site" name="site" placeholder="http://www.site.com.br ..."
                    value="<?= $_POST['site'] ?>">
            <p><?= $erros['site'] ?></p>
        </section>  
    </section>
    <section class="form-row">
        <section class="form-groug col-md-6">   
            <label for="filhos">Quantidade de filhos :</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid error' : '' ?>"
                    id="filhos" name="filhos" placeholder="Filhos ..."
                    value="<?= $_POST['filhos'] ?>">
            <p><?= $erros['filhos'] ?></p>
        </section>  
        <section class="form-groug col-md-6">
            <label for="salario">Salário :</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid error' : '' ?>"
                    id="salario" name="salario" placeholder="R$: 00,00 ..."
                    value="<?= $_POST['salario'] ?>">
            <p><?= $erros['salario'] ?></p>
        </section>  
    </section>
    <button>Enviar</button>
    <?= $mensagem ?>
</form>

<style>
    p{
        display: none;
    }

    .error + p{
        display: block;
        font-size: 0.8em;
        color: red;
        padding: 0.5em;
        font-weight: 500;
        background-color: #ffb5b5;
    }
</style>