<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/css_reset.css">
    <link rel="stylesheet" href="CSS/tcc2.css">
    <title>Identificação Arbórea</title>
    <script>
        function mostrar(id){
            if (document.getElementById(id).style.display == 'block'){
                document.getElementById(id).style.display = 'none';
            } else{ document.getElementById(id).style.display = 'block';}
        }
    </script>

</head>
<body>
    <main>
        <div class="tituloPrincipal">
            <h1>Identificação Arbórea</h1>
        </div>
        <div>
            <h3 class="subTitulo" style="padding:20px;">Preencha os campos abaixo!</h3>
        </div>
        <div class="pesquisaArvore" style="border-bottom: 1px dashed black;">
            <div class="pergunta">
                <label for="nomeArvore" class="negrito">Nome Popular:</label>

                <input type="text" id="nomeArvore" class="block" placeholder="Não Obrigatório">
            </div>
            <div class="pergunta">

                <label for="nomeCientifico" class="negrito">Nome Cientifico:</label>
                
                <input type="text" id="nomeCientifico" class="block" placeholder="Não Obrigatório">
            </div>
        </div>

        <div class="divTroncos">
            <p class="negrito" >Tipos de Tronco :</p>
            <div class="radioInputs">

                <input type="radio" name="radioTronco" id="">Herbáceo

            </div>
            <div class="radioInputs"  style="border-bottom: 1px dashed black; ">

                <input type="radio" name="radioTronco">Lenhosos

            </div>
        </div>

        <div class="divFolhas">

            <p class="negrito">Tipos de Folhas</p> 

            <div class="radioInputs">
                <input type="radio" name="radioFolha" onclick="mostrar('subtipoPina')">Folha Inteira

            </div>
            <div class="radioInputs" >

                <input type="radio" name="radioFolha" onclick="mostrar('subtipoPalma')">Folha Lobata

            </div>
            <div class="radioInputs" style="border-bottom: 1px dashed black;">

               <input type="radio" name="radioFolha" onclick="mostrar('subtipoPeda')">Folha Composta

            </div>
        </div>

        <div class="divSubSome" id="subtipoPina">
            <p class="negrito">Subtipos da Folha Inteira</p>

            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Pedatinérvea

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Palmatinérvea

            </div>
            <div class="radioInputs" style="border-bottom: 1px dashed black;">

                <input type="radio" name="radioSubtipoFolha">Pedatinérvea

            </div>   
        </div>

        <div class="divSubSome" id="subtipoPalma"> 
            <p class="negrito">Subtipos da Folha Lobata</p>

            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Pinatifida

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Palmatifida

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Pedatifida

            </div>
            <div class="radioInputs" >

                <input type="radio" name="radioSubtipoFolha">Pinatipartida

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Palmatipartida

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Pedatipartida

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Pinatissecta

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Palmatissecta

            </div>
            <div class="radioInputs" style="border-bottom: 1px dashed black;">

                <input type="radio" name="radioSubtipoFolha">Pedatissecta

            </div>
        </div>

        <div class="divSubSome" id="subtipoPeda"> 
            <p class="negrito">Subtipos da Folha Composta</p>

            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Pinaticomposta

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubtipoFolha">Palmaticomposta

            </div>
            <div class="radioInputs" style="border-bottom: 1px dashed black;">

                <input type="radio" name="radioSubtipoFolha">Pedaticomposta

            </div>
        </div>

        <div class="" id=""> 
            <p class="negrito">Tipos de Frutos</p>

            <div class="radioInputs">

                <input type="radio" name="radioFrutos" onclick="mostrar('subtipoCar')">Carnosos

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioFrutos" onclick="mostrar('subtipoDeis')">Deiscedentes

            </div>
            <div class="radioInputs" style="border-bottom: 1px dashed black;">

                <input type="radio" name="radioFrutos" onclick="mostrar('subtipoInde')">Indeiscentes

            </div>
        </div>
        <div class="divSubSome" id="subtipoCar"> 
            <p class="negrito">Subtipos do Fruto Carnoso</p>

            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Baga

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Hesperídio

            </div>
            <div class="radioInputs" >

                <input type="radio" name="radioSubTipoFruto">Pomo

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Folículo

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Nuculânio

            </div>
            <div class="radioInputs" style="border-bottom: 1px dashed black;">

                <input type="radio" name="radioSubTipoFruto">Drupa

            </div>
        </div>
        <div class="divSubSome" id="subtipoDeis"> 
            <p class="negrito">Subtipos do Fruto Deiscentes</p>

            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Cápsula poricida

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Síliqua

            </div>
            <div class="radioInputs" >

                <input type="radio" name="radioSubTipoFruto">Legume

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Cerácio

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Cápsula septífraga

            </div>
            <div class="radioInputs" >

                <input type="radio" name="radioSubTipoFruto">Cápsula loculicida

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Cápsula septicida

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Folículo

            </div>
            <div class="radioInputs" style="border-bottom: 1px dashed black;">

                <input type="radio" name="radioSubTipoFruto">Pixidio

            </div>
        </div>
        <div class="divSubSome" id="subtipoInde"> 
            <p class="negrito">Subtipos do Fruto Indeiscentes</p>

            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Aquênio

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Cariopse

            </div>
            <div class="radioInputs" >

                <input type="radio" name="radioSubTipoFruto">Lomento

            </div>
            <div class="radioInputs">

                <input type="radio" name="radioSubTipoFruto">Sâmara

            </div>
            <div class="radioInputs" style="border-bottom: 1px dashed black;">

                <input type="radio" name="radioSubTipoFruto">Samarideo

            </div>
        </div>
        <div class="botaoEnviar">
            <a href="itensBancoDeDados.html"><button class="botaoPesquisar">Pesquisar</button></a>
        </div>
    </main>    
</body>
</html>
