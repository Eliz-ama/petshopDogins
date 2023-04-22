<?php 
    include("../../config/conn.php");
    include("./blades/header.php");
    include("./components/productCardMask.php");
    include("./components/productList.php");
    include("./components/paginateResults.php");
    include("../../public/utils/components/pagination.php");
?>
<main class="catalog">
    <section class="sidebar">
        <div class="cardButton">
            <h3>Cadastre um novo produto aqui!</h3>
            <a class="btn btn-primary" href="registerProduct.php">Cadastrar</a>
        </div>
    </section>
    <section class="products">
        <div class="title">
            <h2>Edite produtos já cadastrados</h2> 
            <span class="info"></span>
        </div>
        <div id="modal-info" class="d-none">
            <div id="title-info">
                <span class = "Iconinfo"></span>
                Como editar meus produtos?
            </div>
            <div id="text-info">
                Para editar seu produto, basta passar o mouse sobre o produto que deseja alterar e 
                selecionar a opção “editar”, após isso você terá cacesso a uma interface semelhante 
                a qual realizou o cadastro onde poderá alterar os dados da forma como preferir
            </div>
        </div>
        <section class="productsList">
            <?php
                $conn = $connectMongoDB('dogin');
                $collection = 'products';
                
                $total = $conn->$collection->count();
                $sort = array("_id" => -1);
                $limit = 5;
                
                $products = $conn->$collection->find([], ['sort' => $sort, 'limit' => 4]);
                createProductList("Mais comprados", "#BCEFFF", $products);

                $sort = array("quantidade_estoque" => -1);

                $products = $conn->$collection->find([], ['sort' => $sort, 'limit' => 4]);
                createProductList("Baixo Estoque", "#B8b8b8", $products);
                
                paginateResults($conn, $collection, $total, $_GET['page'] ?? 1, 12);
            ?>
        </section>
    </section>
</main>

<section>
        <?php
            createPagination($total, 15, $_GET['page'] ?? 1, "homePage.php");
        ?>
    </section>
<?php include("./blades/footer.php"); ?>