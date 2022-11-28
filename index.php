<?php
    require_once "include/header.php";
    require_once "src/config.php";
    require_once 'init.php';


// $tab = [2, 76, 987];
// monVarDump($tab);
$sql ="SELECT * FROM salarie";

$stmt = $dbh->query($sql);

$users =$stmt ->fetchAll(PDO::FETCH_OBJ);

// monVarDump($users);

// monVarDump($_GET);

if (isset($_GET ["yt"])) {
    echo multipliPar10($_GET['yt']);
}



?>

<body>
      
<?php
        require_once 'include/navbar.php';
    ?> 

<?php
    foreach($tab as $key =>$val){
        echo "<a href='index.php?yt=$val'>" . 'le lien pour :' . $val . '</a>';
        echo "<br>";
    }
?> 

    <h1><?= $variable ?></h1>


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
            foreach($users as $user) : ?> 


          <tr>
           <th scope ="row"> <?=  $user->nom ?> </th>
            <td><?=  $user->ville ?> </td>
            </tr>

        <?php endforeach ?>
            </tbody>
    </table>

    
    <?php
        require_once __DIR__.'/include/footer.php';
    ?>
</body>

</html>