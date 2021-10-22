<<<<<<< HEAD
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <style>
        body {
            margin: 0;
            background-color: #eee;
        }
        .bw {
            margin: 0 auto;
            width: calc(100% - 2rem);
        }
        .bh {
            background-color: #fff;
            box-shadow: 0 0 2rem #eee;
            height: 4rem;
            z-index: 0;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
        }
        .bh .e2 a {
            text-decoration: none;
            color: #000;
        }
        .bh .e2 li {
            padding: 1rem;
            background-color: #bebebe;
            transition: .3s;
        }
        .bh .e2 li:hover {
            cursor: pointer;
            background-color: #dbdbdb;
        }
        .bh .e2.active {
            left: 0;
        }
        .bh .e2 {
            transition: .3s;
            margin: 0;
            padding: 0;
            list-style: none;
            position: fixed;
            top: 4rem;
            width: 100%;
            left: -100%;
        }
        .bh .e1 .button .line,
        .bh .e1 .button .line::after,
        .bh .e1 .button .line::before {
            content: '';
            display: block;
            width: 2.5rem;
            box-sizing: border-box;
            height: 5px;
            background-color: #000;
            top: calc(50% - 2.5px);
            transition: .3s;
        }
        .bh .e1 .button .line::before {
            position: absolute;
            top: 30%;
        }
        .bh .e1 .button .line::after {
            position: absolute;
            top: 65%;
        }
        .bh .e1 .button.active .line {
            height: 0;
        }
        .bh .e1 .button.active .line::before {
            top: 45%;
            transform: rotate(45deg);
        }
        .bh .e1 .button.active .line::after {
            top: 45%;
            transform: rotate(-45deg);
        }
        .bh .e1 .button.active {
            transform: rotate(-90deg);
        }
        .bh .e1 .button {
            transition: .3s;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #eee;
            width: 3.5rem;
            height: 3.5rem;
            margin: .25rem 0 .25rem auto;
        }
    </style>

    <div class="b bh">
        <div class="bw">
            <div class="e1">
                <div class="button" id="btn-menu" onclick="onClickMenu();">
                    <div class="line"></div>
                </div>
            </div>
            <ul class="e2" id="ul-menu">
                <li><a href="">Item menu</a></li>
                <li><a href="">Item menu</a></li>
                <li><a href="">Item menu</a></li>
                <li><a href="">Item menu</a></li>
                <li><a href="">Item menu</a></li>
            </ul>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

//function onClickMenu(){
//  document.getElementById("btn-menu").classList.toggle("active");
//  document.getElementById("ul-menu").classList.toggle("active");
//}

        jQuery(document).ready(($)=>{

            $('#btn-menu').on('click',function(e){
                $(this).toggleClass('active');
                $('#ul-menu').toggleClass('active');
            })


        })
    </script>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <style>
        body {
            margin: 0;
            background-color: #eee;
        }
        .bw {
            margin: 0 auto;
            width: calc(100% - 2rem);
        }
        .bh {
            background-color: #fff;
            box-shadow: 0 0 2rem #eee;
            height: 4rem;
            z-index: 0;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
        }
        .bh .e2 a {
            text-decoration: none;
            color: #000;
        }
        .bh .e2 li {
            padding: 1rem;
            background-color: #bebebe;
            transition: .3s;
        }
        .bh .e2 li:hover {
            cursor: pointer;
            background-color: #dbdbdb;
        }
        .bh .e2.active {
            left: 0;
        }
        .bh .e2 {
            transition: .3s;
            margin: 0;
            padding: 0;
            list-style: none;
            position: fixed;
            top: 4rem;
            width: 100%;
            left: -100%;
        }
        .bh .e1 .button .line,
        .bh .e1 .button .line::after,
        .bh .e1 .button .line::before {
            content: '';
            display: block;
            width: 2.5rem;
            box-sizing: border-box;
            height: 5px;
            background-color: #000;
            top: calc(50% - 2.5px);
            transition: .3s;
        }
        .bh .e1 .button .line::before {
            position: absolute;
            top: 30%;
        }
        .bh .e1 .button .line::after {
            position: absolute;
            top: 65%;
        }
        .bh .e1 .button.active .line {
            height: 0;
        }
        .bh .e1 .button.active .line::before {
            top: 45%;
            transform: rotate(45deg);
        }
        .bh .e1 .button.active .line::after {
            top: 45%;
            transform: rotate(-45deg);
        }
        .bh .e1 .button.active {
            transform: rotate(-90deg);
        }
        .bh .e1 .button {
            transition: .3s;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #eee;
            width: 3.5rem;
            height: 3.5rem;
            margin: .25rem 0 .25rem auto;
        }
    </style>

    <div class="b bh">
        <div class="bw">
            <div class="e1">
                <div class="button" id="btn-menu" onclick="onClickMenu();">
                    <div class="line"></div>
                </div>
            </div>
            <ul class="e2" id="ul-menu">
                <li><a href="">Item menu</a></li>
                <li><a href="">Item menu</a></li>
                <li><a href="">Item menu</a></li>
                <li><a href="">Item menu</a></li>
                <li><a href="">Item menu</a></li>
            </ul>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

//function onClickMenu(){
//  document.getElementById("btn-menu").classList.toggle("active");
//  document.getElementById("ul-menu").classList.toggle("active");
//}

        jQuery(document).ready(($)=>{

            $('#btn-menu').on('click',function(e){
                $(this).toggleClass('active');
                $('#ul-menu').toggleClass('active');
            })


        })
    </script>

</body>
</html>
>>>>>>> 6d748234c1f668acf087cba5e46bd4f415d4f249
