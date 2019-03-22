<div id="cabecalho">

    <img id="img" src="imagens/Capturar1.PNG" width="80px" height="55px">
    <div class="espacoMenu"></div>
    <input type="text" id="pesquisa" placeholder="Buscar por nome ou referência">
    
    
    
    <div class="espacoMenu"></div>
    
         
        
    <div id="dropdownCabecalho">
            <button id="botao">Bem vindo visitante!<br>FAÇA LOGIN </button>
          
            <div class="itens">
                <a href="login">Login</a>
                <a href="minha conta">Minha conta</a>
                <a href="meus pedidos">Meus pedidos</a>
            </div>
            
        </div>
    <a id="fale" href="#">DUVIDAS? Fale Conosco!<br>Atendimento</a>
   
    
 <img  src="imagens/Capturar5.PNG" id="carrinho" />   

</div>

<div id="Menu">
    <div id="menuConteudo">
    
        <div class="dropdownMenu">
            <button class="btndrop">Móveis</button>
            <div class="itens">
                <a href="Cadeiras e Poltronas">Cadeiras e Poltronas</a>
                <a href="Mesas Distribuidoras">Mesas Distribuidoras</a>
                <a href="Espreguicadeiras">Espreguiçadeiras</a>
                <a href="Ombrelones">Ombrelones</a>
                <a href="Balncos">Balancos</a>
                <img style="float: left;" src="imagens/Capturar6.PNG">
            </div>
        </div>

        <div class="dropdownMenu">
            <button class="btndrop">Camping</button>
            <div class="itens">
                <a href="Colchoes">Colçhões</a>
                <a href="Barracas">Barras </a>
                <a href="Acessorios">Acessórios Camping</a>
                <img style="float: left;"src="imagens/Capturar3.PNG">
                
            </div>
        </div>

        <div class="dropdownMenu">
            <button class="btndrop">Jogos</button>
            <div class="itens">
                <div id="tag" style="float: left">
                <a href="Jogos de mesa">Jogos de Mesa </a>
                <a href="Camas elasticas">Camas Elasticas </a>
                </div>
                <img src="imagens/Capturar4.PNG" style="float: left">
            </div>
        </div>
    </div>
    
</div>
<div>
    <img  width="100%" src="imagens/Capturar.PNG">
</div>
<div class="produtos">
    
    <div class="linhaprodutos">
        <img class="img" src="imagens/Capturar14.PNG">
        <img class="img" src="imagens/Capturar15.PNG">
        <img class="img" src="imagens/Capturar16.PNG">
        <img class="img" src="imagens/Capturar17.PNG">
    </div>
    <div class="linhaprodutos">
    <img class="img" src="imagens/Capturar18.PNG">
    <img class="img" src="imagens/Capturar19.PNG">
    <img class="img" src="imagens/Capturar20.PNG">
    <img class="img" src="imagens/Capturar21.PNG">
    </div>
    <div class="linhaprodutos">
    <img class="img" src="imagens/Capturar22.PNG">
    <img class="img" src="imagens/Capturar23.PNG">
    <img class="img" src="imagens/Capturar24.PNG">
    <img class="img" src="imagens/Capturar25.PNG">
    </div>
    <div class="linhaprodutos">
    <img class="img" src="imagens/Capturar26.PNG">
    <img class="img" src="imagens/Capturar27.PNG">
    </div>
    
    
</div>


<style>
    
    
     .espacoMenu{
        width: 5%;
        height: 1px;
        float: left;
    }

 
    #cabecalho{
        width: 100%;
        height: 70px;
        padding: 0px 100px;
        margin: auto 0px;
        
        
    }
    #cabecalho img{
        float: left;
        margin-top: 10px;
    }
    #cabecalho input{
        float: left ;
        margin-top: 15px;
        border-radius: 8px ;
        border: solid 1px #ddd;
        width: 30%;
        height: 10px;
        margin-left: 10px;
        
    }
    #fale{
        float: left;
        margin-right: 20px;
        margin-top: 10px;
        
    }
    
    
    #carrinho{
        float: left;
    }
    
    #Menu{
        width: 100%;
        height: 40px;
        background-color: blue;
       
    }
    #menuConteudo{
        margin: auto;
        display: block;
        width: 210px;
       
    }
    #menuConteudo #dropdownMenu{
        margin-left: auto;
        margin-right: auto;
        display: inline-block;
    }
    #pesquisa{
                
                background-image: url(imagens/lupa2.png);
                background-repeat: no-repeat;
                padding: 12px 12px 12px 12px;
                text-align: left;
                background-position: right center;
                width: 200px;
                transition: width 1s;
                -webkit-transition: width 1s;
            }
            #botao{
               
                
                padding: 10px;
                border: none;
                cursor: pointer;
                text-align: center;
                margin-left: 0px;
                margin-top: 15px;
                
                
            }
            #dropdownCabecalho{
                position: relative;
                display: inline-block;
                float: left;
                margin-right: 45px;
            }
            
            
            
            #dropdownCabecalho:hover #botao{
                background-color: orange;
            }
            #dropdownCabecalho:hover .itens{
                display: block;
            }
           
            .dropdownMenu:hover #botao{
                background-color: #cc0066;
            }
            .dropdownMenu:hover .itens{
                display: block;
            }
    
            .btndrop{
                background-color: #4b5;
                color: white;
                padding: 10px;
                border: none;
                cursor: pointer;
                text-align: left;
            }
            .dropdownMenu{
                position: relative;
                display: inline-block;
            }
           
            .itens{
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px;
                
            }
            .itens a{
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                
                background-color: #eee;
            }
            
            .itens a:hover{
                background-color: #ccff00;
            }
            .img{
        background-color: captiontext;
    }
    .linhaprodutos{
       margin: 0px auto 20px;
       width: 85%;
       cursor: pointer;
       padding-left: 5%;
           
       
        
    }
       
    .linhaprodutos img{
        margin-right: 5%;
        width: 18%;
    }
            
</style>

