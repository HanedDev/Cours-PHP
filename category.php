<?php
        require_once 'include/navbar.php';
        require_once "include/header.php";
        require_once 'init.php';

if (isset($_GET['id']) AND isset ($_GET['action'])){
    if($_GET['action']== 'del'){

    $id =$_GET['id'];
    $sql = 'DELETE FROM  category WHERE id =:valeur';
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':valeur',$id);
    $stmt->execute();
    }
}

if (isset($_POST) and !empty($_POST)) {
    // monVarDump($_POST);
    // echo $_POST['Name'];
    $Name =$_POST['Name'];
    $sql ="INSERT INTO category (Name) VALUES (:valeur)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':valeur',$Name);
    $stmt->execute();
}



    $sql ="SELECT * FROM category";
    $stmt = $dbh->query($sql);
    $category = $stmt->fetchAll(PDO::FETCH_OBJ);
    

?>

<body>
    <div class="container">
        <h3>Ajouter une categorie</h3>
            <form action="" method="post">
            <label for="category">categorie</label>
            <input type="text" id="category" name="Name">

            <button type="submit">Ajouter</button>
            </form>

    <hr>
        <h3>Liste des categorie</h3>
    
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Key</th>
                <th scope="col">Valeur</th>
                
                </tr>
            </thead>
            <tbody>

                <?php

                // foreach($tab as $key => $valeur){
                    foreach($category as $cat) : ?> 


                <tr>
                <th scope ="row"> <?=  $cat->id ?> </th>
                    <td><?=  $cat->Name ?> </td>
                    <td> <a href="/category.php?id=<?=  $cat->id ?>&action=del">Supprimer</a></td>
                    <td> <a href="/modifCategory.php?id=<?= $cat->id ?>&action=mod">Modifier</a></td>
                    </tr>

                <?php endforeach ?>

                    </tbody>
            </table>

            




</div>

<?php include_once "include/footer.php" ?>

</body>