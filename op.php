<?php 
     session_start();
class op{   
protected $connection;
    function setconnection(){
        try{
            $this->connection=new PDO("mysql:host=localhost;dbname=new1","root","");
            // echo "Done";
        }catch(PDOException $e){
            echo "Error";
            //die();
    
        } 
    }
    function userlogin($t1, $t2) {
        $q="SELECT * FROM user where userid='$t1' and pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();
        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id']; 
                $_SESSION["id1"]=$t1;
                header("location: user.php?userlogid=$logid");
            }
        }

        else {
            header("location: index.php?msg=Invalid Credentials");
        }

    }
    

    function in($book,$no){
     $i=$_SESSION["id1"]; 
     
       $q="INSERT INTO books (book_name,nu,id)VALUES('$book','$no','$i')";

        if($this->connection->exec($q)) {
            header("Location:user.php?msg=done");
        }

        else {
            header("Location:user.php?msg=fail");
        }

    } 
    function del($b_n,$u_i){
        $q="DELETE from books where book_name='$b_n' and id='$u_i'";
        if($this->connection->exec($q)){
    
            
           header("Location:user.php?msg=done");
        }
        else{
           header("Location:index.php?msg=fail");
        }
    }


}