<?php
        require_once 'include/navbar.php';
        require_once "include/header.php";
        require_once 'init.php';

        $id = $_GET['id'];

if (isset($_POST) and !empty($_POST)) {
            // monVarDump($_POST);
            // echo $_POST['Name'];
    $Name =$_POST['Name'];        
    
    $sql = 'UPDATE category SET Name= :valeurName WHERE id = :valeurid';
    $stmt = $dbh->prepare($sql); 
    $stmt->bindParam(':valeurid', $id);
    $stmt->bindParam(':valeurName', $Name);
    $stmt->execute();
    header('location: category.php');
}

?>

<body>
    <h3>Modifier category</h3>

<div class="container">

<form action="" method="post">
    <label for="category">categorie</label>
    <input type="text" id="category" name="Name">
    <button type="submit">Ajouter</button>
</form>

</div>
    
</body>
