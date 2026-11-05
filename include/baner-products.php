
<style>
    body{
        direction: rtl;
    }
    @keyframes colorChange {
        0% {
            background: linear-gradient(to right, #e1159a, #9b08f3);
        }
        50% {
            background: linear-gradient(to right, #9b08f3, #e1159a);
        }
        100% {
            background: linear-gradient(to right, #e1159a, #9b08f3);
        }
    }
    #div-baner-products{
        animation: colorChange 4s infinite;
        position: relative;
        width: 92%;
        height: 90px;
        border-radius: 50px;
        box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.64);
        /*background-image: linear-gradient(210deg, #ff5445 0%, #C21212 100%);*/
        background:linear-gradient(135deg, #f02fc2 0%,#6094ea 100%);
        /*border-radius: 65px 65px 65px 65px;*/
        background-color: #ff5445;
        padding-right: 40px;
        padding-bottom: 40px;
        padding-left: 40px;
        padding-top: 40px;
        margin-right: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
        margin-top: 20px;
        border-style: solid;
        border-color: #FFFFFF;
    }

    #text-baner{
        position: absolute;
        right: 530px;
        top: 0px;
        font-family: roya;
        font-size: 35px;
    }
    #text-baner-2{
        font-family: roya;
        position: absolute;
        right: 640px;
        top: 85px;
        text-align: center;
        text-decoration: none;
    }
    #text-baner-2:hover{
        transition: 0.6s ease;
        color: #13f1fc;
        cursor: pointer;
    }
    #products-gif{
        position: absolute;
        width: 190px;
        height: 190px;
        top: 0;
    }
    #products-gif2{
        position: absolute;
        width: 190px;
        height: 190px;
        top: 0;
        left: 10px;
    }



</style>


<body>

<div id="div-baner-products" style="width: 1220px">

    <div id="content-baner">
        <h1 id="text-baner" > به فروشگاه خوش آمدید </h1>
        <a id="text-baner-2" href="index.php"> صفحه اصلی</a>
        <img src="../illustrations/products-gif.gif" id="products-gif">
        <img src="../illustrations/products-gif2.gif" id="products-gif2">
    </div>
</div>


</body>

