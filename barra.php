<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header
{
    font-family: 'Bebas Neue', sans-serif;
}

body {
    background-color: #ffffff;
}

.container {
    width: 100%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    
    /*border: 4px solid blueviolet;*/
}

header {
    background-color: rgb(0, 0, 0);
    width: 100%;
    padding: 20px;
    /*padding estava 10px*/
}

.logo, .sociais {
    width: 8%;
    /*width estava 25%*/
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo img {
    /*width: 100px;*/
    cursor: pointer;
}

.menu {
    width: 90%;
    /*70%*/
}

nav {
    display: flex;
    justify-content: center;
}

.menu nav a{
    color: #ffffff;
    text-decoration: none;
    padding-right: 45px;
    /*font size estava 20px*/
    font-size: 24px;
    position: relative;
}

.menu nav a::after{
    content: " ";
    width: 0px;
    height: 4px;
    background-image: linear-gradient(45deg, #FF2500, #FF7100);
    position: absolute;
    top: 25px;
    left: 0;
    transition: width 0.4s;
}

.menu nav a:hover::after{
    width: 30px;
}

/* Este código não vai ser útil porque eu não coloquei nenhuma rede social ainda */
.sociais button {
    width: 40px;
    height: 40px;
    background-image: linear-gradient(45deg, #FF2500, #FF7100);
    border: none;
    border-radius: 8px;
    cursor: pointer;
    margin-right: 10px;
}

/* Este código não vai ser útil porque eu não coloquei nenhuma rede social ainda */
.sociais button i{
    font-size: 20px;
    color: #ffffff;
}
</style>

<html>
<header>
    <div class="container">
        <div class="logo"><a href="../"><img src="../img/favicon1.png" width="60" height="60" alt="Logo Supermercado Lafaiete"></a></div> <!--width e o height estavam 60-->
        <div class="menu">
            <nav>
                <a href="../menu/Cliente.php">Clientes</a>
                <a href="../menu/Fornecedor.php">Fornecedores</a>
                <a href="../menu/Produto.php">Produtos</a>
                <a href="../menu/Produtost.php">Produtos para Troca</a>
                <a href="../menu/Venda.php">Vendas</a>
            </nav>
        </div>
        <!--<div class="sociais"></div>-->
    </div>
</header>
</html>