<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Alien Abduction Form: Thank you for sending your story.</h2>

    <?php 

        $when_it_happened = $_POST['whenithappened'];
        $how_long = $_POST['howlong'];
        $description = $_POST['aliendescription'];
        $fang_spotted = $_POST['fangspotted'];
        $email = $_POST['email'];
        $is_spotted = $fang_spotted === 'yes' ? true : false;


        echo "Thanks for your response." . "<br>";
        echo "Your email address is: {$email}" . "<br>";
        echo "You were abducted from: {$when_it_happened} for {$how_long} days" . "<br>";
        echo "Description of alien from your side: {$description}". "<br>";
        if($is_spotted){
            echo 'Where you spotted him: ' . "<br>";
        }
        else{
            echo 'Sad,still thanks for your response. it will certainly help. ' . "<br>";
        }
        
     ?>

</body>
</html>