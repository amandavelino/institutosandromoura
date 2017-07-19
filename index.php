<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instituto Sandro Moura</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.typekit.net/zhd0tfh.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>    
</head>
<body>

    <?php include("./incs/home.php");?> 
    <?php include("./incs/metodologia.php");?>
    <?php include("./incs/aulas.php");?>
    <?php include("./incs/assinatura.php");?>
    <?php include("./incs/depoimentos.php");?>
    <?php include("./incs/parceiros.php");?>

    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
    <script>

        $(document).ready(function(){
            //Slider Depoimentos
            $('.owl-depoimentos').owlCarousel({
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                mouseDrag: false,
                smartSpeed: 450,
                margin: 20,
                loop: true,
                margin: 0,
                dots: true,
                items: 1,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true
            });
        });

    </script>

</body>
</html>