<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tab Slider</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>

    <ul class="nav nav-tabs">
        <div class="owl_1 owl-carousel owl-theme">
            <div class="item">
                <li class="active"><a data-toggle="tab" href="#home">1</a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu1">2</a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu2">3</a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu3">4</a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu4">5</a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu5">6</a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu6">7</a></li>
            </div>
            <div class="item">
                <li><a data-toggle="tab" href="#menu7">8</a></li>
            </div>
        </div>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>1</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>2</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>3</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div id="menu3" class="tab-pane fade">
            <h3> 4</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div id="menu4" class="tab-pane fade">
            <h3>5</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
    </div>
    <style>
    @media only screen and (min-width: 600px) {
        body {
            display: grid;
            justify-content: center;
        }

        .nav-tabs {
            margin-top: 50px !important;
            justify-content: center;
            display: flex;
        }

        .owl-carousel.owl-loaded {
            width: 785px !important;
        }

        .tab-content {
            width: 875px !important;
        }

        .owl-item {
            width: 171px !important;
            margin-right: 2px;
            background-color: black;
            padding: 40px;
            border-radius: 50px;
            margin: 0px 20px;
        }
    }

    a {
        color: white !important;
    }

    .nav-tabs {
        border-bottom: none;
        margin-top: 50px;
        margin: 0px 10px;
    }

    .owl-item {
        background-color: black;
        padding: 40px;
        border-radius: 50px;
    }

    button.owl-prev {
        position: absolute;
        left: 0px;
        top: 37%;
        transform: translateY(-50%);
        background-color: white !important;
        width: 40px;
        height: 40px;
        border-radius: 100% !important;
        color: #000 !important;
        border: 1px solid black;
    }

    button.owl-next {
        position: absolute;
        right: 0px;
        top: 37%;
        transform: translateY(-50%);
        background-color: white !important;
        width: 40px;
        height: 40px;
        border-radius: 100% !important;
        color: #000 !important;
        border: 1px solid black !important;
    }

    .owl-dots {
        display: none;
    }

    .item {
        display: flex;
        justify-content: center;
    }

    .tab-content {
        padding: 20px;
        background-color: #fff;
        font-size: 17px;
        text-align: center;
        line-height: 25px;
        margin-top: 30px;
        border-radius: 19px;
        margin: 30px 30px;
        border: 2px solid black;
    }

    h3 {
        font-size: 40px;
        font-weight: bold;
    }
    </style>

    <script>
    $(' .owl_1').owlCarousel({
        loop: false,
        margin: 2,
        responsiveClass: true,
        autoplayHoverPause: false,
        autoplay: false,
        slideSpeed: 0,
        paginationSpeed: 0,
        autoplayTimeout: 0,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: false
            },
            600: {
                items: 1,
                nav: true,
                loop: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    })

    $(document).ready(function() {
        var li = $(".owl-item li ");
        $(".owl-item li").click(function() {
            li.removeClass('active');
        });
    });
    </script>
</body>

</html>