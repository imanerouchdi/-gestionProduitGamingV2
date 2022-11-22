<?php

$id=$_GET['id'] ?? '';
    session_start();
    if(isset($_POST['update']))      updateProduit();
    if(!isset($_POST['save'])=="")        saveProduit();




    function saveProduit()
    {
        include('config/config.php');

        $id         =$_POST['id'];
        $type_cat   =$_POST['categorie'];
        $nom        =$_POST['nom'];
        $prix       =$_POST['prix'];
        $quantite   =$_POST['quantite'];
        
        $sql="INSERT INTO `produits`(`id_categorie`,`nom`, `prix`, `quantite`) 
        VALUES ('$nom','$type_cat','$prix','$quantite')";
        $result = mysqli_query($conn,$sql);
        $_SESSION['message'] = "Task has been added successfully !";
        header('location: index.php');
    }
    function EditProduit($id){
        include('config/config.php');

        $sql_select_data="SELECT id,nom,id_cat,categories.name as type ,prix,quantite
         FROM `produits` 
        INNER JOIN categories on produits.id_categorie=categories.id_cat  where
        id='$id'  ";
        $result=mysqli_query($conn,$sql_select_data);
        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }

    function updateProduit(){
    include('../config/config.php');

        $id         =$_POST['id'];
        $type_cat   =$_POST['categorie'];
        $nom        =$_POST['nom'];
        $prix       =$_POST['prix'];
        $quantite   =$_POST['quantite'];

    //    UPDATE `produits` SET `nom`='$nom',`categories.name`='$type',`prix`='$prix',`quantite`='$quantite' WHERE id='$id'";
         $sql_update ="UPDATE `produits` SET `nom`='$nom ',`id_categorie`='$type_cat',`prix`='$prix  ',`quantite`='$quantite' WHERE `id` =$id ";

        $result=mysqli_query($conn,$sql_update);
        $_SESSION['message'] = "Task has been updated successfully !";
            header('location: ../home.php');
        }

        

            

            
            // $result_update=mysqli_fetch_assoc($rows_update);
            
        




?>