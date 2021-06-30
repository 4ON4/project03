<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="Generator" content="Notepad++"/>    
    <title>안양시립도서관</title>
    <link rel="shortcut icon" href="images/ico_favicon.png">        
    <!-- css -->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/common.css"/>
    <!-- jquery -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/script.js"></script>
    <!-- plugin -->
    <script src="js/gray.js"></script>
    <script>
    window.open("images/imformation.png", "", "resizable=no, toolbar=no, width=400, height=400")
    </script>   
</head>
<body> 
    <div id="board_go">
        <h3>빠른이동</h3>
        <ul>
            <li><a href="board_list.php">문의게시판</a></li>
            <li><a href="">내정보바로가기</a></li>
        </ul>
        <div class="close_box"></div>
    </div> 
    <header>
        <?php include "header2.php";?>
    </header>
    <section>
        <?php include "main.php";?>
    </section> 
    <footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>