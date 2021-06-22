<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="Generator" content="Notepad++"/>    
    <title>안양시립도서관</title>
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
    <div id="inquire_message">
        <div class="inquire_top"><a href="message_form.php"><img src="images/message.png" alt="문의바로가기"/></a></div>
        <div class="inquire_bottom"><p>문의함 바로가기</p></div>
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