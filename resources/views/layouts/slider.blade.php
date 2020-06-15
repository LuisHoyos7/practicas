
<div class="slideshow-containerr">
<div class="mySlidess fadee">
       <div class="numbertextt">1 / 3</div>
       <img src="{{ asset('/images/1.jpg') }}" style="width:1200px">
       <div class="textt">Unicor</div>
</div>

<div class="mySlidess fadee">
       <div class="numbertextt">2 / 3</div>
       <img src="{{ asset('/images/2.jpg') }}" style="width:1200px">
       <div class="textt">Unicor</div>
</div>

<div class="mySlidess fadee">
       <div class="numbertextt">3 / 3</div>
       <img src="{{ asset('images/3.jpg') }}" style="width:1200px">
       <div class="textt">Unicor</div>
</div>

<a class="prevv" onclick="plusSlides(-1)">&#10094;</a>
<a class="nextt" onclick="plusSlides(1)">&#10095;</a>
</div>

<style>

.slideshow-containerr{
 max-width: 1300px;
 position:relative;
 margin:auto;
 background-color: aqua;
}
.mySlidess{
 display:none;
}

.prevv, .nextt{
 cursor:pointer;
 position:absolute;
 top:50%;
 width:auto;
 margin-top:-22px;
 padding:16px;
 color:white;
 font-weight:bold;
 font-size:18px;
 transition:0.6s ease;
 border-radius:0 3px 3px 0;
}

.nextt{
 right:0;
 border-radius:3px 0 0 3px;
}

.prevv:hover, .nextt:hover{
 background-color:rgba(0,0,0,0.8);
}

.textt{
 color:#f2f2f2;
 font-size:15px;
 padding:8px 12px;
 position:absolute;
 bottom:8px;
 width:100%;
 text-align:center;
}

.numbertextt{
 color:#f2f2f2;
 font-size:12px;
 padding:8px 12px;
 position:absolute;
 top:0;
}

.fadee{
 -webkit-animation-name:fade;
 -webkit-animation-duration:1.5s;
 animation-name:fade;
 animation-duration:1.5s;
}

@-webkit-keyframes fadee{
 from{opacity:.4}
 to{opacity:1}
}

@keyframes fadee{
 from{opacity:.4}
 to{opacity:1}
}
</style>

<script>
    var slideIndex = 0;

showSlides();

function showSlides() {
       var i;
       var slides = document.getElementsByClassName("mySlidess");
       for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
       }

       slideIndex++;
       if(slideIndex > slides.length) {slideIndex = 1}
       slides[slideIndex-1].style.display = "block";
       setTimeout(showSlides,2000);
}
</script>