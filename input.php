<?php
    $name=$_POST['Name'];
    $phone_no=$_POST['Phone no'];
    $email=$_POST['Email'];
    $address=$_POST['I can find you at'];
    $bday=$_POST['Wish you on'];
    $nickname=$_POST['Your nickname'];
    $school=$_POST['Your School'];
    $graduation=$_POST['Your graduation and college'];
    $aim=$_POST['You are going to be'];
    $dream=$_POST['Your dream'];
    $fantasy=$_POST['Your fantasy'];
    $advice=$_POST['Any advice for me'];
    $thoughts=$_POST['Your thoughts about me'];
    $relation=$_POST['Your relation with me'];
    $yesno=$_POST['Can I share your mark in my slambook with others'];
    if(!empty($name) || !empty($phone_no))
    {
        echo "hey hi";
        $host="127.0.0.1";
        $dbusername="root";
        $dbpassword="likhitha12";
        $dbname="myslambook";
        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
        
        if(mysqli_connect_error())
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        else
        {
           // $SELECT="SELECT email From register Where email=? Limit 1";
            $INSERT="INSERT Into theform(name,phone_no,email,address,bday,nickname,school,graduation,aim,dream,fantasy,advice,thoughts,relation,yesno) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sisssssssssssss",$name,$phone_no,$email,$address,$bday,$nickname,$school,$graduation,$aim,$dream,$fantasy,$advice,$thoughts,$relation,$yesno);
            $stmt->execute();
            echo "Thank you!!!your slam always stays with me";
        }
        $stmt->close();
        $conn->close();
    }   
    
    else
    {
        echo "Hey chump!! may be you forgot to enter your name or phone number";
        die();
    }
?>