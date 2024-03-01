<?php

$site='localhost:8080';//replace with Your Domain Url

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short Link Generator</title>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200&display=swap" rel="stylesheet">
 

    <style>

        body {
            font-family: 'Urbanist', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #fff;
               background-image: url('https://i.postimg.cc/mZygKBjt/9905-8.webp'); /* URL to your image */
    background-size: cover;
        }

        header {
            background-color: #4158D0;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
                animation: hackerTwinkling 1s infinite;
        }

    header h1 {
    font-size: 60px;
    margin: 5px;
    line-height: 1.5;
    text-transform: uppercase;
    letter-spacing: 2px;
    white-space: nowrap; 
}

        
        }

        header p {
            font-size: 18px;
            margin: 10px 0;
            line-height: 1.5;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            z-index: 2000;
               animation: hackerTwinkling 1s infinite;
        }


        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

    .openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: ;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    margin: 10px;
    position: absolute; 
    left: 10px; 
    display: block;
    z-index: 2000; 
}


        .openbtn:hover {
            background-color: #333;
          animation:  hackerTwinkling 1s infinite;
        }

        .form {
            width: 80%;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px; 
        }

        input[type="text"], input[type="submit"] {
            padding: 15px;
            width: calc(100% - 30px); 
            max-width: 400px; 
            font-family: 'Arial', sans-serif;
            letter-spacing: 1px;
            border-radius: 8px;
            border: none;
            margin-bottom: 20px;
            box-sizing: border-box; 
            transition: all 0.3s ease;
        }

        input[type="text"] {
            border: 1px solid #ddd;
            background-color: #fff;
    outline: none;
    border-color: #4158D0;
    animation: twinkling 1s infinite; 
        }
        


    
@keyframes twinkling {
    0% { box-shadow: 0 0 5px rgba(0, 255, 0, 0.5); }
    50% { box-shadow: 0 0 20px rgba(0, 255, 0, 0.9), 0 0 30px rgba(0, 255, 0, 0.5); }
    100% { box-shadow: 0 0 5px rgba(0, 255, 0, 0.5); }
}



@keyframes hackerTwinkling {
    0% {
        background-color: #000;
        box-shadow: 0 0 10px #00FFFF, 0 0 20px #00FFFF, 0 0 30px #00FFFF;
    }
    50% {
        background-color: #000;
        box-shadow: 0 0 20px #00FFFF, 0 0 40px #00FFFF, 0 0 60px #00FFFF;
    }
    100% {
        background-color: #000;
        box-shadow: 0 0 10px #00FFFF, 0 0 20px #00FFFF, 0 0 30px #00FFFF;
    }
}





        .cta-btn {
            background-color: #FF0000;
            color: #fff;
            padding: 15px 30px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .cta-btn:hover {
            background-color: #CC0000;
        }

        #myInput {
            width: calc(100% - 30px);
            max-width: 400px;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            box-sizing: border-box;
            text-align: center;
            color: #FF0000;
            font-weight: bold;
            background-color: #fff;
            transition: all 0.3s ease;
        }

        #myInput:focus {
            outline: none;
            border-color: #4158D0;
            box-shadow: 0 0 5px rgba(65, 88, 208, 0.5);
        }

      
        @media (max-width: 768px) {
            header h1 {
                font-size: 28px;
            }

            header p {
                font-size: 16px;
            }

            .form {
                width: 90%;
                margin-top: 150px;
            }

            .openbtn {
                display: block;
            }

            .sidebar a {
                font-size: 16px;
                padding: 8px 8px 8px 16px;
            }
        }
    </style>
</head>
<body>
	<center>
    <header>
        <div class="sidebar" id="mySidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        <span class="openbtn" onclick="openNav()">☰</span>
        <h1>Short Link </h1>
    </header>
</center>
    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <input type="text" name="link" placeholder="Enter Your Long URL to Shorten" required>
                <input type="text" name="alias" placeholder="Enter Alias (Optional)">
                <input type="submit" class="cta-btn" name="submit" value="Generate Short Link">
            </form>
<?php
$site = 'localhost:8080';

function generateRandomString($length = 4) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(isset($_POST['submit'])){
    $nepcode = $_POST['link'];
    $alias = $_POST['alias'];

    if (!filter_var($nepcode, FILTER_VALIDATE_URL)) {
        echo '<input type="text" name="number" id="myInput" value="Please enter a valid URL." readonly>';
    } else {
        $b = empty($alias) ? generateRandomString(4) : $alias;
        $folder = './'.$b;
        $c = 'index';
        $a = rand(1000,9999);
        $check = "campdb/$b/$a";

        if(file_exists($folder)){
            echo '<input type="text" name="number" id="myInput" value="Alias already exists! Please choose another alias." readonly>';
        } else {
            mkdir($folder);
            $p = '<?php header("Location: ' . $nepcode . '"); exit; ?>';
            file_put_contents($folder.'/'.$c.'.php', $p);
            echo '<input type="text" name="number" id="myInput" value="http://' . $site . '/' . $b . '" readonly>';
        }
    }
}
?>







        </div>
    </div>
    <footer style="position: fixed; bottom: 0; width: 100%; text-align: center; padding: 20px 0; background-color:hackerTwinkling 1s infinite;;  background-size: cover; color: #fff;">
        <a href="t.me/devsnp" style="text-decoration: none;">
            <button style="background-color: #FF0000; color: #fff; padding: 15px 30px; border-radius: 8px; border: none; cursor: pointer; font-weight: bold; transition: background-color 0.3s ease; text-transform: uppercase; letter-spacing: 1px;      animation: hackerTwinkling 1s infinite;">
               Made By Nepcoder
            </button>
        </a>
    </footer>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>
</body>
</html>
