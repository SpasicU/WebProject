<style>

    *{
        box-sizing: border-box;
    }

    body{
        margin: 0;
    }
    .header{
        text-align: center;
        padding: 15px;
        padding-bottom: 30px;
        border-bottom: groove;
    }
    .header h1{
        font-size: 40px;
    }

    .row{
        display: flex;
        flex-wrap: wrap;
        padding: 10px;
    }
    .column{
        flex: 25%;
        max-width: 25%;
    }
    .img-hover-zoom{
        height: auto;
        overflow: hidden;
        border: 5px solid #ffff;
    }
    .img-hover-zoom img{
        vertical-align: middle;
        margin: 0;
        padding: 0;
        border: 0;
        transition:  transform .5s ease;
    }
    .img-hover-zoom:hover img{
        transform: scale(1.2);
    }

    @media screen and (max-width: 800px) {
        .column{
            flex: 50%;
            max-width: 50%;
        }
    }

    @media screen and (max-width: 500px) {
        .column{
            flex: 100%;
            max-width: 100%;
        }
    }

</style>



<div class="header">
    <h1><i>Galerija slika</i></h1>
</div>

<!-- Photo Grid -->
<div class="row">

    <div class="column">
        <div class="img-hover-zoom">
            <img style="width:100%" alt="" src="slike/img1.jpg"> 
        </div>
        <div class="img-hover-zoom">
            <img src="slike/img2.jpg" style="width:100%" alt="">
        </div>
        <div class="img-hover-zoom">
            <img src="slike/img3.jpg" style="width:100%" alt="">
        </div>
    </div>

    <div class="column">
        <div class="img-hover-zoom">
            <img src="slike/img4.jpg" style="width:100%" alt="">
        </div>
        <div class="img-hover-zoom">
            <img src="slike/img5.jpg" style="width:100%" alt="">
        </div>
        <div class="img-hover-zoom">
            <img src="slike/img6.jpg" style="width:100%" alt="">
        </div>
    </div>

    <div class="column">
        <div class="img-hover-zoom">
            <img src="slike/img7.jpg" style="width:100%" alt="">
        </div>
        <div class="img-hover-zoom">
            <img src="slike/img8.jpg" style="width:100%" alt="">
        </div>
        <div class="img-hover-zoom">
            <img src="slike/img9.jpg" style="width:100%" alt="">
        </div>
    </div>

    <div class="column">
        <div class="img-hover-zoom">
            <img src="slike/img10.jpg" style="width:100%" alt="">
        </div>
        <div class="img-hover-zoom">
            <img src="slike/img11.jpg" style="width:100%" alt="">
        </div>
        <div class="img-hover-zoom">
            <img src="slike/img12.jpg" style="width:100%" alt="">
        </div>
    </div>

</div>

<p style="font-size: 30px; text-align: center; border-top: groove; padding-top: 15px;">Posetite naš <a href="https://www.facebook.com/profile.php?id=100010986767022"> Facebook</a> i <a href="https://www.instagram.com/bellissimo_dekoracije/"> Instagram</a> za još prelepih slika!!</p>