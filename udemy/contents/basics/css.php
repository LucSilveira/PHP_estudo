<h3 class="titulo">Integração HTML</div>

<p center><?php echo "Olá <small>Mundo!</small>" ?></p>

<?= "<h4 center azul>Outra forma de me 'expressar' !</div>" ?>
<br/>

<div center><button dobro type="button"><?= 'Legal' ?></button></div>

<style>
    button{
        color : #fff;
        padding : 0.5em <?= 10 * 0.25?>em;
        background-color: #4286f4;
        border-radius: 4px;
        font-weight: bold;
    }
    
    button:hover{
        background-color: #2a6dda;
        border-radius: 4px;
    }

    [center]{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    [azul]{
        color : #4286f4;
    }

    [dobro]{
        font-size: 1.2rem;
    }
</style>