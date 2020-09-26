<?php
    //calling the config file
    include_once("includes/config.php"); 
    // adding new users code begins here
    if(isset($_POST['add_user'])){
        $fname = htmlspecialchars($_POST['firstname']);
        $lname = htmlspecialchars($_POST['lastname']);
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confirm_password = htmlspecialchars($_POST['confirm_pass']);
        $phone = htmlspecialchars($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        //grabing user profile picture
        $file = $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $folder="profiles/"; 
        $new_file_name = strtolower($file);
        $final_file=str_replace(' ','-',$new_file_name);
        if($password != $confirm_password){
            echo "<script>alert('Your passwords do not match');</script>";
        }
        else{
            //moving the picture into new location and set file name to be $image.
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                $image=$final_file;
            }
            $password = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(FirstName,LastName,UserName,Email,Password,Phone,Address,Picture)
            values(:fname,:lname,:username,:email,:password,:phone,:address,:pic)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':fname',$fname,PDO::PARAM_STR);
            $query->bindParam(':lname',$lname,PDO::PARAM_STR);
            $query->bindParam(':username',$username,PDO::PARAM_STR);
            $query->bindParam(':email',$email,PDO::PARAM_STR);
            $query->bindParam(':password',$password,PDO::PARAM_STR);
            $query->bindParam(':phone',$phone,PDO::PARAM_STR);
            $query->bindParam(':address',$address,PDO::PARAM_STR);
            $query->bindParam(':pic',$image,PDO::PARAM_STR);
            $query->execute();
            $lastInsert = $dbh->lastInsertId();
            if($lastInsert>0){
                move_uploaded_file($file_loc,$folder.$final_file);
                echo "<script>alert('New User Has Been Added');</script>";
                echo "<script>window.location.href='users.php';</script>";
            }else{
                echo "<script>alert('Something went wrong.');</script>";
            }


        }
    }
    //adding  users ends here 

    //adding assets begins here
    elseif(isset($_POST['add_asset'])){
        $asset = htmlspecialchars($_POST['asset_name']);
        $asset_id = htmlspecialchars($_POST['asset_id']);
        $purchase_date = htmlspecialchars($_POST['purchase_date']);
        $purchase_from = htmlspecialchars($_POST['purchase_from']);
        $manufacturer = htmlspecialchars($_POST['manufacturer']);
        $model = htmlspecialchars($_POST['model']);
        $status = htmlspecialchars($_POST['status']);
        $supplier = htmlspecialchars($_POST['supplier']);
        $condition = htmlspecialchars($_POST['condition']);
        $warrant = htmlspecialchars($_POST['warranty']);
        $price = htmlspecialchars($_POST['value']);
        $asset_user = htmlspecialchars($_POST['asset_user']);
        $description = htmlspecialchars($_POST['description']);
        $sql = "INSERT INTO `assets` ( `assetName`, `assetId`, `PurchaseDate`, `PurchaseFrom`, `Manufacturer`, `Model`, `Status`, `Supplier`, `AssetCondition`, `Warranty`, `Price`, `AssetUser`, `Description`)
         VALUES (:name, :id, :purchaseDate, :purchasefrom, :manufacturer, :model, :stats, :supplier, :condition, :warranty, :price, :user, :describe)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':name',$asset,PDO::PARAM_STR);
        $query->bindParam(':id',$asset_id,PDO::PARAM_STR);
        $query->bindParam(':purchaseDate',$purchase_date,PDO::PARAM_STR);
        $query->bindParam(':purchasefrom',$purchase_from,PDO::PARAM_STR);
        $query->bindParam(':manufacturer',$manufacturer,PDO::PARAM_STR);
        $query->bindParam(':model',$model,PDO::PARAM_STR);
        $query->bindParam(':stats',$status,PDO::PARAM_INT);
        $query->bindParam(':supplier',$supplier,PDO::PARAM_STR);
        $query->bindParam(':condition',$condition,PDO::PARAM_STR);
        $query->bindParam(':warranty',$warrant,PDO::PARAM_STR);
        $query->bindParam(':price',$price,PDO::PARAM_INT);
        $query->bindParam(':user',$asset_user,PDO::PARAM_STR);
        $query->bindParam(':describe',$description,PDO::PARAM_STR);
        $query->execute();
        $lastinserted = $dbh->lastInsertId();
        if($lastinserted>0){
            echo "<script>alert('Asset Has Been Added');</script>";
            echo "<script>window.location.href='assets.php';</script>";
        }else{
            echo "<script>alert('Something Went Wrong Please Again.');</script>";
        }

    }
    //adding assets code ends here.

    //adding of goal types stats here
    elseif(isset($_POST['add_goal_type'])){
        $type = htmlspecialchars($_POST['type']);
        $description = htmlspecialchars($_POST['description']);
        $status = htmlspecialchars($_POST['status']);
        $sql = "INSERT INTO `goal_type` ( `Type`, `Description`, `Status`) 
        VALUES (:type, :description, :status)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':type',$type,PDO::PARAM_STR);
        $query->bindParam(':description',$description,PDO::PARAM_STR);
        $query->bindParam(':status',$status,PDO::PARAM_STR);
        $query->execute();
        $lastinserted = $dbh->lastInsertId();
        if($lastinserted>0){
            echo "<script>alert('Goal Type Has Been Added');</script>";
            echo "<script>window.location.href='goal-type.php';</script>";
        }else{
            echo "<script>alert('Something Went Wrong.Re-check goal type may already exist');</script>";
        }
    }//goal type adding code ends here.

    //adding of goal tracking code starts here
    elseif(isset($_POST['add_goal'])){
        $type = htmlspecialchars($_POST['goal_type']);
        $subject = htmlspecialchars($_POST['subject']);
        $target = htmlspecialchars($_POST['target']);
        $start = htmlspecialchars($_POST['start_date']);
        $end = htmlspecialchars($_POST['end_date']);
        $description = htmlspecialchars($_POST['description']);
        $status = htmlspecialchars($_POST['status']);
        $progress = htmlspecialchars($_POST['progress']);
        $sql = "INSERT INTO `goals` ( `Type`, `Subject`, `Target`, `StartDate`, `EndDate`, `Description`, `Status`,`progress`) 
        VALUES (:type,:subject,:target,:start,:end, :description, :status,:progress)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':type',$type,PDO::PARAM_STR);
        $query->bindParam(':subject',$subject,PDO::PARAM_STR);
        $query->bindParam(':target',$target,PDO::PARAM_STR);
        $query->bindParam(':start',$start,PDO::PARAM_STR);
        $query->bindParam(':end',$end,PDO::PARAM_STR);
        $query->bindParam(':description',$description,PDO::PARAM_STR);
        $query->bindParam(':status',$status,PDO::PARAM_STR);
        $query->bindParam(':progress',$progress,PDO::PARAM_STR);
        $query->execute();
        $lastinserted = $dbh->lastInsertId();
        if($lastinserted>0){
            echo "<script>alert('Goal Has Been Added');</script>";
            echo "<script>window.location.href='goal-tracking.php';</script>";
        }else{
            echo "<script>alert('Something Went Wrong.Re-check goal type may already exist');</script>";
        }
    }
    //goal tracking code ends here

    //client adding code starts here
    elseif(isset($_POST['add_client'])){
       $firstname = htmlspecialchars($_POST['firstname']);
       $lastname = htmlspecialchars($_POST['lastname']);
       $username = htmlspecialchars($_POST['username']);
       $email = htmlspecialchars($_POST['email']);
       $password = htmlspecialchars($_POST['password']);
       $confirm_password = htmlspecialchars($_POST['confirmpass']);
       $client_id = htmlspecialchars($_POST['clientid']);
       $phone = htmlspecialchars($_POST['phone']);
       $company = htmlspecialchars($_POST['company']);
       $address = htmlspecialchars($_POST['address']);
        //grabing user profile picture
        $propic=$_FILES["propic"]["name"];
        $extension = substr($propic,strlen($propic)-4,strlen($propic));
       
        if($password != $confirm_password){
            echo "<script>alert('Your passwords do not match');</script>";
        }
        else{     
            $propic=md5($propic).time().$extension;  
            move_uploaded_file($_FILES["propic"]["tmp_name"],"clients/".$propic);     
            $password = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `clients` (`FirstName`, `LastName`, `UserName`, `Email`, `Password`, `ClientId`, `Phone`, `Company`, `Address`, `Status`, `Picture`) 
                    VALUES (:fname, :lname, :username, :email, :password, :id, :phone, :company, :address,'1',:pic)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':fname',$firstname,PDO::PARAM_STR);
            $query->bindParam(':lname',$lastname,PDO::PARAM_STR);
            $query->bindParam(':username',$username,PDO::PARAM_STR);
            $query->bindParam(':email',$email,PDO::PARAM_STR);
            $query->bindParam(':password',$password,PDO::PARAM_STR);
            $query->bindParam(':id',$client_id,PDO::PARAM_STR);
            $query->bindParam(':phone',$phone,PDO::PARAM_STR);
            $query->bindParam(':company',$company,PDO::PARAM_STR);
            $query->bindParam(':address',$address,PDO::PARAM_STR);
            $query->bindParam(':pic',$propic,PDO::PARAM_STR);
            $query->execute();
            $lastInsert = $dbh->lastInsertId();
            if($lastInsert>0){
                
                echo "<script>alert('Client Has Been Added');</script>";
                echo "<script>window.location.href='clients.php';</script>";
            }else{
                echo "<script>alert('Something went wrong.');</script>";
            }

        }   
       
    }//adding client code ends here
    
    //adding departments code starts here
    elseif(isset($_POST['add_department'])){
        $department = htmlspecialchars($_POST['department']);
        $sql = "INSERT INTO departments(Department )VALUES(:name)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':name',$department,pdo::PARAM_STR);
        $query->execute();
        $lastInsert = $dbh->lastInsertId();
        if($lastInsert>0){
            echo "<script>alert('Department Has Been Added');</script>";
            echo "<script>window.location.href='departments.php';</script>";
        }else{
            echo "<script>alert('Something went wrong.');</script>";
        }
    }



?>
