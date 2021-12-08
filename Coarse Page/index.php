<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coarse Page</title>
    <style>

        * {
        margin: 0;
        border: 0;
        padding: 0;
        box-sizing: border-box;
        }

        .container {
        display: flex;
        height: 100vh;
        padding: 1rem;
        font-family: "sans-serif";
        }

        #main-content {
        position: relative;
        width: 80%;
        background-image: linear-gradient(to right, #0074D9 ,#AAAAAA);
        margin: 0.5rem;
        border-radius: 10px;
        padding: 2rem;
        }

        #sidebar {
        position: relative;
        width: 20%;
        background-color: #0074D9;
        margin: 0.5rem;
        border-radius: 10px;
        padding: 2rem;
        }

        body {
        background-color: rgb(21, 14, 46);
        }

        button{
            padding: 1rem;
            font-size: 25px
        }

        table tr, td{
            padding: 1rem;
            font-size: 15px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div id="sidebar">
            <h1>Semester<h1><br>
            <button onClick="showFallsem2019()">Fall-sem 2019-2020</button>
            <button onClick="showWinsem2019()">Win-sem 2019-2020</button>
            <button onClick="showFallsem2020()">Fall-sem 2020-2021</button>
            <button onClick="showWinsem2020()">Win-sem 2020-2021</button>
            <button onClick="showFallsem2021()">Fall-sem 2021-2022</button>
        </div>
        <div id="main-content">
            <h1>Course Details:<h1>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function showFallsem2019(){
            $.ajax({url:"fallsem2019.php", success:function(result){
                $("#main-content").html(result);}
            })
        }
        function showWinsem2019(){
            $.ajax({url:"winsem2019.php", success:function(result){
                $("#main-content").html(result);}
            })
        }
        function showFallsem2020(){
            $.ajax({url:"fallsem2020.php", success:function(result){
                $("#main-content").html(result);}
            })
        }
        function showWinsem2020(){
            $.ajax({url:"winsem2020.php", success:function(result){
                $("#main-content").html(result);}
            })
        }
        function showFallsem2021(){
            $.ajax({url:"fallsem2021.php", success:function(result){
                $("#main-content").html(result);}
            })
        }
    
    </script>
</body>
</html>