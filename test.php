<head>
    <!-- jQuery library (served from Google) -->    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
    <!-- bxSlider Javascript file -->    
    <script src="/js/jquery.bxslider.min.js"></script>
    
    <!-- bxSlider CSS file -->    
    <link href="/lib/jquery.bxslider.css" rel="stylesheet" />

<style>







html, body {

  margin: 0;

  padding: 0;

  font-family: 'Open Sans';

}



h1 {

  color: #fff;

  text-align: center;

  font-weight: 300;

}



#slider {

  position: relative;

  overflow: hidden;

  margin: 20px auto 0 auto;

  border-radius: 4px;

}



#slider ul {

  position: relative;

  margin: 0;

  padding: 0;

  height: 200px;

  list-style: none;

}



#slider ul li {

  position: relative;

  display: block;

  float: left;

  margin: 0;

  padding: 0;

  width: 1100px;

  height: 300px;



  background: #ccc;

  text-align: center;

  line-height: 300px;

}



a.control_prev, a.control_next {

  position: absolute;

  top: 40%;

  z-index: 999;

  display: block;

  padding: 4% 3%;

  width: auto;

  height: auto;

  background: #2a2a2a;

  color: #fff;

  text-decoration: none;

  font-weight: 600;

  font-size: 18px;

  opacity: 0.8;

  cursor: pointer;

}



a.control_prev:hover, a.control_next:hover {

  opacity: 1;

  -webkit-transition: all 0.2s ease;

}



a.control_prev {

  border-radius: 0 2px 2px 0;

}



a.control_next {

  right: 0;

  border-radius: 2px 0 0 2px;

}



.slider_option {

  position: relative;

  margin: 10px auto;

  width: 160px;

  font-size: 18px;

}







</style>



<script>

jQuery(document).ready(function ($) {



  $('#checkbox').change(function(){

    setInterval(function () {

        moveRight();

    }, 3000);

  });

  

	var slideCount = $('#slider ul li').length;

	var slideWidth = $('#slider ul li').width();

	var slideHeight = $('#slider ul li').height();

	var sliderUlWidth = slideCount * slideWidth;

	

	$('#slider').css({ width: slideWidth, height: slideHeight });

	

	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

	

    $('#slider ul li:last-child').prependTo('#slider ul');



    function moveLeft() {

        $('#slider ul').animate({

            left: + slideWidth

        }, 200, function () {

            $('#slider ul li:last-child').prependTo('#slider ul');

            $('#slider ul').css('left', '');

        });

    };



    function moveRight() {

        $('#slider ul').animate({

            left: - slideWidth

        }, 200, function () {

            $('#slider ul li:first-child').appendTo('#slider ul');

            $('#slider ul').css('left', '');

        });

    };



    $('a.control_prev').click(function () {

        moveLeft();

    });



    $('a.control_next').click(function () {

        moveRight();

    });



});    



</script>

</head>

<body>
    <div id="slider" style="margin:0px;">
    
      <ul>
    
        <li>SLIDE 1</li>
    
        <li style="background: #aaa;">SLIDE 2</li>
    
        <li>SLIDE 3</li>
    
        <li style="background: #aaa;">SLIDE 4</li>
    
      </ul>  
    
    </div>
        
    
    <div class="slider_option">
    
      <input type="checkbox" id="checkbox" hidden="true">
    
    </div> 
</body>