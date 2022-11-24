<?php
require 'config/config.php';
$id=$_GET['id'] ?? '';
    session_start();
    if(isset($_POST['update']))      updateProduit();
    if(isset($_POST['insert']))        saveProduit();
    if(isset($_GET['id']))             deleteproduit($id);

    // if(isset($_POST['signin']))         signIn();


            // function check is admin 
            function check(){
                if($_SESSION['name']==''){
                    header('location: signin.php');
                }
            }

    function saveProduit()
    {
        require('config/config.php');

        $type_cat   =$_POST['categorie'];
        $nom        =$_POST['nom'];
        $prix       =$_POST['prix'];
        $quantite   =$_POST['quantite'];
        
        $sql="INSERT INTO `produits`(`nom`, `id_categorie`, `prix`, `quantite`) 
        VALUES ('$nom','$type_cat','$prix','$quantite')";
        $result = mysqli_query($conn,$sql);
        if($result){
             $_SESSION['message'] = "Task has been added successfully !";
            header('location:index.php');
        }
       
    }
    function EditProduit($id){
        require('config/config.php');

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
    
        $sql_update ="UPDATE `produits` SET `nom`='$nom ',`id_categorie`='$type_cat',`prix`='$prix  ',`quantite`='$quantite' WHERE `id` =$id ";
        $result=mysqli_query($conn,$sql_update);
        $_SESSION['message'] = "Task has been updated successfully !";
            header('location: ../index.php');
    }
    function deleteproduit($id) {
    include('../config/config.php');

        
        $sql="DELETE FROM `produits` WHERE id = $id ";
        
        $result = mysqli_query($conn,$sql);
        $_SESSION['message'] = "Task has been deleted successfully !";
		 header('location: ../index.php');
            // header("Refresh: 2;url=../index.php");
    }
    // function signIn(){
        
    // }





    // if (!$email || !$password) {
    //     header('location: registration.php');
    //     $_SESSION['message'] = "One or more inputs are invalid";
    //     die();
    // }else {
    //     header('location:signIn.php');
    //     $_SESSION['message'] = "Wrong email or password";
    // }

    
    // Close connection
    // mysqli_close(conn());



?>