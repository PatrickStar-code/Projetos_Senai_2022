<?php
include("./top_bot/top.php");

include("./Classes/forma.class.php");

session_start();

?>
<style>
    /* Please ❤ this if you like it! */


    @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');


    :root {
        --white: #ffffff;
        --light: #f0eff3;
        --black: #000000;
        --dark-blue: #1f2029;
        --dark-light: #353746;
        --red: #da2c4d;
        --yellow: #f8ab37;
        --grey: #ecedf3;
    }

    /* #Primary
================================================== */

    body {
        width: 100%;
        background: var(--dark-blue);
        overflow-x: hidden;
        font-family: 'Poppins', sans-serif;
        font-size: 17px;
        line-height: 30px;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 17px;
        line-height: 30px;
        color: var(--white);
        letter-spacing: 1px;
        font-weight: 500;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
    }

    ::selection {
        color: var(--white);
        background-color: var(--black);
    }

    ::-moz-selection {
        color: var(--white);
        background-color: var(--black);
    }

    mark {
        color: var(--white);
        background-color: var(--black);
    }

    .section {
        position: relative;
        width: 100%;
        display: block;
        text-align: center;
        margin: 0 auto;
    }

    .over-hide {
        overflow: hidden;
    }

    .z-bigger {
        z-index: 100 !important;
    }


    .background-color {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--dark-blue);
        z-index: 1;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
    }

    .checkbox:checked~.background-color {
        background-color: var(--white);
    }


    [type="checkbox"]:checked,
    [type="checkbox"]:not(:checked),
    [type="radio"]:checked,
    [type="radio"]:not(:checked) {
        position: absolute;
        left: -9999px;
        width: 0;
        height: 0;
        visibility: hidden;
    }

    .checkbox:checked+label,
    .checkbox:not(:checked)+label {
        position: relative;
        width: 70px;
        display: inline-block;
        padding: 0;
        margin: 0 auto;
        text-align: center;
        margin: 17px 0;
        margin-top: 100px;
        height: 6px;
        border-radius: 4px;
        background-image: linear-gradient(298deg, var(--red), var(--yellow));
        z-index: 100 !important;
    }

    .checkbox:checked+label:before,
    .checkbox:not(:checked)+label:before {
        position: absolute;
        font-family: 'unicons';
        cursor: pointer;
        top: -17px;
        z-index: 2;
        font-size: 20px;
        line-height: 40px;
        text-align: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
    }

    .checkbox:not(:checked)+label:before {
        content: '\eac1';
        left: 0;
        color: var(--grey);
        background-color: var(--dark-light);
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(26, 53, 71, 0.07);
    }

    .checkbox:checked+label:before {
        content: '\eb8f';
        left: 30px;
        color: var(--yellow);
        background-color: var(--dark-blue);
        box-shadow: 0 4px 4px rgba(26, 53, 71, 0.25), 0 0 0 1px rgba(26, 53, 71, 0.07);
    }

    .checkbox:checked~.section .container .row .col-12 p {
        color: var(--dark-blue);
    }


    .checkbox-tools:checked+label,
    .checkbox-tools:not(:checked)+label {
        position: relative;
        display: inline-block;
        padding: 20px;
        width: 110px;
        font-size: 14px;
        line-height: 20px;
        letter-spacing: 1px;
        margin: 0 auto;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 10px;
        text-align: center;
        border-radius: 4px;
        overflow: hidden;
        cursor: pointer;
        text-transform: uppercase;
        color: var(--white);
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
    }

    .checkbox-tools:not(:checked)+label {
        background-color: var(--dark-light);
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
    }

    .checkbox-tools:checked+label {
        background-color: transparent;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .checkbox-tools:not(:checked)+label:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .checkbox-tools:checked+label::before,
    .checkbox-tools:not(:checked)+label::before {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 4px;
        background-image: linear-gradient(298deg, var(--red), var(--yellow));
        z-index: -1;
    }

    .checkbox-tools:checked+label .uil,
    .checkbox-tools:not(:checked)+label .uil {
        font-size: 24px;
        line-height: 24px;
        display: block;
        padding-bottom: 10px;
    }

    .checkbox:checked~.section .container .row .col-12 .checkbox-tools:not(:checked)+label {
        background-color: var(--light);
        color: var(--dark-blue);
        box-shadow: 0 1x 4px 0 rgba(0, 0, 0, 0.05);
    }

    .checkbox-budget:checked+label,
    .checkbox-budget:not(:checked)+label {
        position: relative;
        display: inline-block;
        padding: 0;
        padding-top: 20px;
        padding-bottom: 20px;
        width: 260px;
        font-size: 52px;
        line-height: 52px;
        font-weight: 700;
        letter-spacing: 1px;
        margin: 0 auto;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 10px;
        text-align: center;
        border-radius: 4px;
        overflow: hidden;
        cursor: pointer;
        text-transform: uppercase;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
        -webkit-text-stroke: 1px var(--white);
        text-stroke: 1px var(--white);
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent;
        color: transparent;
    }

    .checkbox-budget:not(:checked)+label {
        background-color: var(--dark-light);
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
    }

    .checkbox-budget:checked+label {
        background-color: transparent;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .checkbox-budget:not(:checked)+label:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .checkbox-budget:checked+label::before,
    .checkbox-budget:not(:checked)+label::before {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 4px;
        background-image: linear-gradient(138deg, var(--red), var(--yellow));
        z-index: -1;
    }

    .checkbox-budget:checked+label span,
    .checkbox-budget:not(:checked)+label span {
        position: relative;
        display: block;
    }

    .checkbox-budget:checked+label span::before,
    .checkbox-budget:not(:checked)+label span::before {
        position: absolute;
        content: attr(data-hover);
        top: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        -webkit-text-stroke: transparent;
        text-stroke: transparent;
        -webkit-text-fill-color: var(--white);
        text-fill-color: var(--white);
        color: var(--white);
        -webkit-transition: max-height 0.3s;
        -moz-transition: max-height 0.3s;
        transition: max-height 0.3s;
    }

    .checkbox-budget:not(:checked)+label span::before {
        max-height: 0;
    }

    .checkbox-budget:checked+label span::before {
        max-height: 100%;
    }

    .checkbox:checked~.section .container .row .col-xl-10 .checkbox-budget:not(:checked)+label {
        background-color: var(--light);
        -webkit-text-stroke: 1px var(--dark-blue);
        text-stroke: 1px var(--dark-blue);
        box-shadow: 0 1x 4px 0 rgba(0, 0, 0, 0.05);
    }

    .checkbox-booking:checked+label,
    .checkbox-booking:not(:checked)+label {
        position: relative;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-align-items: center;
        -moz-align-items: center;
        -ms-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        -moz-justify-content: center;
        -ms-justify-content: center;
        justify-content: center;
        -ms-flex-pack: center;
        text-align: center;
        padding: 0;
        padding: 6px 25px;
        font-size: 14px;
        line-height: 30px;
        letter-spacing: 1px;
        margin: 0 auto;
        margin-left: 6px;
        margin-right: 6px;
        margin-bottom: 16px;
        text-align: center;
        border-radius: 4px;
        cursor: pointer;
        color: var(--white);
        text-transform: uppercase;
        background-color: var(--dark-light);
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
    }

    .checkbox-booking:not(:checked)+label::before {
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
    }

    .checkbox-booking:checked+label::before {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .checkbox-booking:not(:checked)+label:hover::before {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .checkbox-booking:checked+label::before,
    .checkbox-booking:not(:checked)+label::before {
        position: absolute;
        content: '';
        top: -2px;
        left: -2px;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        border-radius: 4px;
        z-index: -2;
        background-image: linear-gradient(138deg, var(--red), var(--yellow));
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
    }

    .checkbox-booking:not(:checked)+label::before {
        top: -1px;
        left: -1px;
        width: calc(100% + 2px);
        height: calc(100% + 2px);
    }

    .checkbox-booking:checked+label::after,
    .checkbox-booking:not(:checked)+label::after {
        position: absolute;
        content: '';
        top: -2px;
        left: -2px;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        border-radius: 4px;
        z-index: -2;
        background-color: var(--dark-light);
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
    }

    .checkbox-booking:checked+label::after {
        opacity: 0;
    }

    .checkbox-booking:checked+label .uil,
    .checkbox-booking:not(:checked)+label .uil {
        font-size: 20px;
    }

    .checkbox-booking:checked+label .text,
    .checkbox-booking:not(:checked)+label .text {
        position: relative;
        display: inline-block;
        -webkit-transition: opacity 300ms linear;
        transition: opacity 300ms linear;
    }

    .checkbox-booking:checked+label .text {
        opacity: 0.6;
    }

    .checkbox-booking:checked+label .text::after,
    .checkbox-booking:not(:checked)+label .text::after {
        position: absolute;
        content: '';
        width: 0;
        left: 0;
        top: 50%;
        margin-top: -1px;
        height: 2px;
        background-image: linear-gradient(138deg, var(--red), var(--yellow));
        z-index: 1;
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear;
    }

    .checkbox-booking:not(:checked)+label .text::after {
        width: 0;
    }

    .checkbox-booking:checked+label .text::after {
        width: 100%;
    }

    .checkbox:checked~.section .container .row .col-12 .checkbox-booking:not(:checked)+label,
    .checkbox:checked~.section .container .row .col-12 .checkbox-booking:checked+label {
        background-color: var(--light);
        color: var(--dark-blue);
    }

    .checkbox:checked~.section .container .row .col-12 .checkbox-booking:checked+label::after,
    .checkbox:checked~.section .container .row .col-12 .checkbox-booking:not(:checked)+label::after {
        background-color: var(--light);
    }




    .link-to-page {
        position: fixed;
        top: 30px;
        right: 30px;
        z-index: 20000;
        cursor: pointer;
        width: 50px;
    }

    .link-to-page img {
        width: 100%;
        height: auto;
        display: block;
    }
</style>

<!-- BODY -->

<center>
    <h1 class="font-bold text-2xl">Selecione uma forma geometrica</h1>
    <br>
    <a href="listar.php">
        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
            listar
        </button>
    </a>

</center>

<div class="flex items-center justify-center w-screen h-screen">

    <!-- Component Start -->


    <form class="grid grid-cols-3 gap-3 w-full max-w-screen-sm" action="definicao.php" method="post">
        <div>
            <input class="hidden" id="radio_1" value="c" type="radio" name="radio" checked>
            <label class="flex flex-col p-4 border-2 border-gray-400 cursor-pointer" for="radio_1">
                <span class="text-xs font-semibold uppercase"><img src="https://cdn-icons-png.flaticon.com/512/5400/5400304.png" alt="" srcset=""></span>
            </label>
        </div>
        <div>
            <input class="hidden" id="radio_2" value="q" type="radio" name="radio">
            <label class="flex flex-col p-4 border-2 border-gray-400 cursor-pointer" for="radio_2">
                <span class="text-xs font-semibold uppercase"><img src="https://cdn-icons-png.flaticon.com/512/33/33879.png" alt="" srcset=""></span>
            </label>
        </div>
        <div>
            <input class="hidden" id="radio_3" value="t" type="radio" name="radio">
            <label class="flex flex-col p-4 border-2 border-gray-400 cursor-pointer" for="radio_3">
                <span class="text-xs font-semibold uppercase"><img src="https://cdn-icons-png.flaticon.com/512/649/649734.png" alt="" srcset=""></span>
            </label>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Criar Objeto</button>
    </form>





    <form class="" action="definicao.php" method="post">
    <div class="section over-hide z-bigger">

        <div class="col-12 pt-1">
            <p class="mb-4 pb-2">Selecione uma forma geometrica</p>
        </div>
        <div class="col-xl-10 pb-5">
            <input class="checkbox-budget" type="radio" name="budget" id="budget-1" checked>
            <label class="for-checkbox-budget" for="budget-1">
                <span data-hover="Circulo"><img src="https://cdn-icons-png.flaticon.com/512/5400/5400304.png" alt="" srcset=""></span>
            </label>
            <!--
						--><input class="checkbox-budget" type="radio" name="budget" id="budget-2">
            <label class="for-checkbox-budget" for="budget-2">
                <span data-hover="Quadrado"><img src="https://cdn-icons-png.flaticon.com/512/33/33879.png" alt="" srcset=""></span>
            </label>
            <!--
						--><input class="checkbox-budget" type="radio" name="budget" id="budget-3">
            <label class="for-checkbox-budget" for="budget-3">
                <span data-hover="Trapézio"><img src="https://cdn-icons-png.flaticon.com/512/649/649734.png" alt="" srcset=""></span>
            </label>

        </div>
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Criar Objeto</button>
</form>
<!-- Link to page
	================================================== -->

<a href="https://front.codes" class="link-to-page" target="_blank"><img src="https://assets.codepen.io/1462889/fcy.png" alt=""></a>




<!-- Component End  -->

</div>

<!-- FIM BODY -->

<?php
include("./top_bot/bot.php")
?>