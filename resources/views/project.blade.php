<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/
bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="project.css"/>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

	<title>Project</title>
	  

</head>
<body onload="load()">
	<div class="nav">
		<label for="toggle">&#9776</label>
	</div>
	<input type="checkbox" name="" id="toggle">
	<div class="top" id="myTop">
		<div id="shop" onclick="scroll1()">{{ __('lang.sh')}}</div>
		<div id="catalog" onclick="scroll2()">{{ __('lang.ca')}}</div>
		<div id="about" onclick="scroll3()">{{ __('lang.ab')}}</div>
		<div id="contacts" onclick="scroll3()">{{ __('lang.co')}}</div>
    <div style="color: black;">
    <a href="http://localhost:10080/project/public/en" style="color: black;">en</a>
    <a href="http://localhost:10080/project/public/ru" style="color: black;">ru</a>
    <a href="http://localhost:10080/project/public/ru" style="color: black;">kz</a>
    </div>
	</div>
	<div class="image">
		<div class="profile">
			<img id="avatar_img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQVSUDQpyTVOO2oKF-SfkpZTC-QbamRBpXD8Q&usqp=CAU">     <p id="avatar">Kate</p>
		</div>
		<h1 id="text1">{{ __('lang.title')}}</h1>
		<div class="bt">
			<button onclick="regis()" id="btn" class="btn btn-outline-light btn-lg">{{ __('lang.button1')}}</button>
		</div>
	
	</div>
         
    <div class="regis" top=600px>
		<div class="reg">
		<img onclick="closed()" class="close" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSs1EGRZsvWr4DgRDEo0ScATxd8d6I2oZqT6w&usqp=CAU" width="8%">
		<img src="<?php echo url('/'); ?>/images/
fruitLogo.png" width="15%">
<div class="alert alert-success alert-block" style="display: none;">
             <button type="button" class="close" data-dismiss="alert">×</button>
                <strong class="success-msg"></strong>
</div>
<form>
	@csrf
	<div class="form-group">
		<input id="username"class="form-control" type="text" name="username" placeholder="Username">
		<span class="text-danger error-text username_err"></span>
	</div>
	<div class="form-group">
		<input id="email"class="form-control" type="email" name="email" placeholder="Email">
		<span class="text-danger error-text email_err"></span>
	</div>
	<div class="form-group">
		<input type="password"class="form-control" id="pass" name="pass" placeholder="Password">
		<span class="text-danger error-text pass_err"></span>
	</div>
	<div class="form-group">
		<input type="address"class="form-control" id="address" name="address" placeholder="Address">
		<span class="text-danger error-text address_err"></span>
	</div>
		<button onclick="login(username.value)" type="submit" class="btn btn-outline-dark">Log In</button>
		<div class="auth">Or login with</div>
             <div class="links">
                 <div class="facebook">
                 <i class="fab fa-facebook-square"><span>Facebook</span></i>
                 </div>
                 <div class="google">
                 <i class="fab fa-google-plus-square"><span>Google</span></i>
                 </div>
              </div>
            <div class="signup">Not a member? <a href="#">Signup now</a>
             </div>
              </div>
          </form>
	    </div>
    </div>

    <script <?php echo url('/'); ?>/js type="text/javascript">
        $(document).ready(function() {
            $(".btn btn-outline-dark").click(function(e){
                e.preventDefault();

                var _token = $("input[name='_token']").val();
                var username = $("#username").val();
                var email = $("#email").val();
                var pass = $("#pass").val();
                var address = $("#address").val();

                $.ajax({
                    url: "{{ route('ajax.request.store') }}",
                    type:'POST',
                    data: {_token:_token,username:username, email:email, pass:pass,address:address},
                    success: function(data) {
                      printMsg(data);
                    }
                });
            }); 

            function printMsg (msg) {
              if($.isEmptyObject(msg.error)){
                  console.log(msg.success);
                  $('.alert-block').css('display','block').append('<strong>'+msg.success+'</strong>');
              }else{
                $.each( msg.error, function( key, value ) {
                  $('.'+key+'_err').text(value);
                });
              }
            }
        });
    </script>
         <div>
         	<h1 id="tit1">{{ __('lang.shop')}}</h1>
         </div>
                <div class="cont1">
                	<div class="circle"></div>
                	<h2 id="title2">{{ __('lang.wel')}}</h2>
                	<p id="text2"><strong>{{ __('lang.we')}}
                    </p>
            <button id="hide">{{ __('lang.button2')}}</button>
         	<button id="show">{{ __('lang.button3')}}</button>
                </div>
                    
                    <div ><h1 id="tit2">{{ __('lang.cat')}}</h1></div>
         <div class="cont">
         	<div class="card">
         		<div class="imgBox">
		 <div class="ribbon">
          <div class="wrap">
             <span class="ribbon6">{{ __('lang.di')}}</span>
          </div>
         </div>
         		</div>
         		<div class="details">
                  <h2>{{ __('lang.car1')}}</h2>
         		  <p>{{ __('lang.card1')}}</p>       			
         		</div>
         	</div>
         	<div class="card">
         		<div class="imgBox">
         			<img src="https://cdn3.volusion.com/kceqm.mleru/v/vspfiles/photos/1436-1.jpg?v-cache=1597056844" width="300px">
         		</div>
         		<div class="details">
                  <h2>{{ __('lang.car2')}}</h2>
         		  <p>{{ __('lang.card2')}}</p>       			
         		</div>
         	</div>
         	<div class="card">
         		<div class="imgBox">
         			<img src="https://cdn3.volusion.com/kceqm.mleru/v/vspfiles/photos/68-1.jpg?v-cache=1597056844" width="300px">
         		</div>
         		<div class="details">
                  <h2>{{ __('lang.car3')}}</h2>
         		  <p>{{ __('lang.card3')}}</p>       			
         		</div>
         	</div>
         	<div class="card">
         		<div class="imgBox">
         			<img src="https://cdn3.volusion.com/kceqm.mleru/v/vspfiles/photos/278-1.jpg?v-cache=1597056844" width="300px">
         		</div>
         		<div class="details">
                  <h2>{{ __('lang.car4')}}</h2>
         		  <p>{{ __('lang.card4')}}</p>       			
         		</div>
         	</div>
         	<div class="card">
         		<div class="imgBox">
         			<img src="https://cdn3.volusion.com/kceqm.mleru/v/vspfiles/photos/274-1.jpg?v-cache=1597056844" width="300px">
         		</div>
         		<div class="details">
                  <h2>{{ __('lang.car5')}}</h2>
         		  <p>{{ __('lang.card5')}}</p>       			
         		</div>
         	</div>
         	<div class="card">
         		<div class="imgBox">
         			<img src="https://cdn3.volusion.com/kceqm.mleru/v/vspfiles/photos/1424-1.jpg?v-cache=1597056844" width="300px">
         		</div>
         		<div class="details">
                  <h2>{{ __('lang.car6')}}</h2>
         		  <p>{{ __('lang.card6')}}</p>       			
         		</div>
         	</div>
         	<div class="card">
         		<div class="imgBox">
         			<img src="https://cdn3.volusion.com/kceqm.mleru/v/vspfiles/photos/20-1.jpg?v-cache=1597056844" width="300px">
         		</div>
         		<div class="details">
                  <h2>{{ __('lang.car7')}}</h2>
         		  <p>{{ __('lang.card7')}}</p>       			
         		</div>
         	</div>
         	<div class="card">
         		<div class="imgBox">
         			<img src="https://cdn3.volusion.com/kceqm.mleru/v/vspfiles/photos/164-1.jpg?v-cache=1597056844" width="300px">
         		</div>
         		<div class="details">
                  <h2>{{ __('lang.car8')}}</h2>
         		  <p>{{ __('lang.card8')}}</p>       			
         		</div>
         	</div>
         	<div class="card">
         		<div class="imgBox">
         			<img src="https://cdn3.volusion.com/kceqm.mleru/v/vspfiles/photos/47-1.jpg?v-cache=1597056844" width="300px">
         		</div>
         		<div class="details">
                  <h2>{{ __('lang.car9')}}</h2>
         		  <p>{{ __('lang.card9')}}</p>       			
         		</div>
         	</div>
         </div>










         @if(count($errors)>0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>
      {{$error}}
    </li>
    @endforeach
  </ul>
</div>
@endif
<div class="con">
  <div class="row">
    <div class="col-md-2"><img src="" width="80"></div>
    <div class="col-md-8" style="text-align: center;"><h2>File Uploading</h2>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form action="http://localhost:10080/project/public/multiuploads" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="Product Name" style="color: black">Product Name</label>
          <input type="text" name="name" class="form-control" placeholder="Product Name">
        </div>
        <label for="Product Name" style="color: black">Product photos(can attach more then one):</label><br>
        <input type="file" class="form-control" name="photos[]" multiple /><br/><br/>
        <div style="text-align: center;">
        <input type="submit" class="btn btn-primary" value="Upload" />
        </div>
      </form>
    </div>
  </div>
</div>




         	<h1 id="tit3">{{ __('lang.ch')}}</h1>

  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      	<div class="imgBx">
      		<img src="<?php echo url('/'); ?>/images/
fr3.jpg" width="300px">
      	</div>
      	<div class="content1">
      		<h2>Cornelia Mango<br><span>{{ __('lang.c1')}}</span></h2>
      	</div>
      </div>
      <div class="swiper-slide">
      	<div class="imgBx">
      		<img src="<?php echo url('/'); ?>/images/
fr4.jpg" width="300px">
      	</div>
      	<div class="content1">
      		<h2>Elena Lander<br><span> {{ __('lang.c2')}}</span></h2>
      	</div>
      </div>
      <div class="swiper-slide">
      	<div class="imgBx">
      		<img src="<?php echo url('/'); ?>/images/
fr1.jpg" width="300px" height="350px">
      	</div>
      	<div class="content1">
      		<h2>Prokhor Chaliapin<br><span>{{ __('lang.c3')}}</span></h2>
      	</div>
      </div>
      <div class="swiper-slide">
      	<div class="imgBx">
      		<img src="<?php echo url('/'); ?>/images/
fr2.jpg" width="300px">
      	</div>
      	<div class="content1">
      		<h2>Maria Kuzmina<br><span>{{ __('lang.c4')}}</span></h2>
      	</div>
      </div>
    </div>
  </div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
	var swiper = new Swiper('.swiper-container', {
      effect: 'cube',
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      }
    });
</script>

<h2 id="tit4">{{ __('lang.rev')}}</h2>

<div class="container">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL8uXa3zXU_dvHMi6kpExuBTrEbU-0GpoqRA&usqp=CAU" alt="Avatar" class="right" style="width:8%;">
  <p>{{ __('lang.com1')}}</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQRriTtjzr7A8Q254j4_23G9e9fDq_cHhGXZw&usqp=CAU" alt="Avatar" style="width:8%;">
  <p> {{ __('lang.com2')}}</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL8uXa3zXU_dvHMi6kpExuBTrEbU-0GpoqRA&usqp=CAU" alt="Avatar" class="right" style="width:8%;">
  <p>{{ __('lang.com3')}}</p>
  <span class="time-right">13:02</span>
</div>

<div class="container darker">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQRriTtjzr7A8Q254j4_23G9e9fDq_cHhGXZw&usqp=CAU" alt="Avatar" style="width:8%;">
  <p>{{ __('lang.com4')}}</p>
  <span class="time-left">13:05</span>
</div>

<canvas id="myChart" width="200" height="50"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
      type: 'bar',
         data: {
            labels: ["2012", "2014" , "2016" , "2018", "2020"],
            datasets: [
               { label: 'Number of our customers',
               data: [800,2500,3000,4000,5000],
               backgroundColor :['rgba(255, 129, 102, 1)',
               'rgba(234, 162, 235, 1)',
               'rgba(255, 206, 36, 1)',
               'rgba(75, 192, 192, 1)',
               'rgba(153, 102, 255, 1)',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>

<canvas id="mChart" width="200" height="50"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("mChart");
   var mChart = new Chart(ctx, {
      type: 'pie',
         data: {
            labels: ["Bad", "Good" , "Excellent"],
            datasets: [
               { label: 'Customer Satisfaction',
               data: [5,30,50],
               backgroundColor :[
               'rgba(234, 162, 235, 1)',
               'rgba(255, 206, 36, 1)',
               'rgba(153, 102, 255, 1)',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>
	 <canvas id="miChart" width="200" height="50"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("miChart");
   var miChart = new Chart(ctx, {
      type: 'line',
         data: {
            labels: ["2012", "2014" , "2016" , "2018", "2020"],
            datasets: [
               { label: 'Our incomes',
               data: [10,30,50,65,79,88,96,109],
               "fill":false,
               "borderColor":"rgb(75,192,192)","lineTension":0.1}]},"options":{}});
        
</script>


	<script <?php echo url('/'); ?>/js type="text/javascript">
 
 window.onscroll = function() {scrollTop()};

var top = document.getElementById("myTop");
var sticky = top.offsetTop;

function scrollTop() {
  if (window.pageYOffset > sticky) {
    top.classList.add("sticky");
  } else {
    top.classList.remove("sticky");
  }
}

        function scroll1() {
        var elmnt = document.getElementById("tit1");
        elmnt.scrollIntoView();
        }
        function scroll2() {
        var elmnt = document.getElementById("tit2");
        elmnt.scrollIntoView();
        }
        function scroll3() {
        var elmnt = document.getElementById("title3");
        elmnt.scrollIntoView();
        }                		
	
	 
	        function load(){
	    		$(".text1").animate({opacity:"1"},"slow");
	    	}

	    	function regis(){
	    	    var butn = document.getElementById("btn").innerHTML;
                if(butn == "Log In"){
	    		document.querySelector(".regis").style.display = "flex";
	    		$(".regis").animate({opacity: "1"},"slow");
	    		document.body.style.overflow = "hidden";
	    	}
	    	else{
	    		logout();
	    	}
	    }
	    	function closed(){
	    		$(".regis").animate({opacity: "0"},"slow");
	    		document.querySelector(".regis").style.display = "none";
	    	    document.body.style.overflow="scroll";
	    	     document.getElementById("username").value="";
	    	    document.getElementById("pass").value="";
	    	   
	    	}
	    	function login(name){
	    		document.querySelector(".profile").style.display = "inline";
	    		document.getElementById("avatar").innerHTML=name;
	    		document.getElementById("btn").innerHTML="Log Out";
	    		closed();
	    	}
	    	function logout(){
	    		document.querySelector(".profile").style.display ="none";
	    		document.getElementById("btn").innerHTML="Log In";
	    	}

	    	$('#hide').click(function(){
	    		$('#text2').hide(2000);
	    	});
	    		$('#show').click(function(){
	    			$('#text2').show(2000);
	    		});
	    
	</script>



<footer >
	<div class="main-content">
		<div class="left box">
			<h2 id="title3">{{ __('lang.abo')}}</h2>
			<div class="content">
				<p>{{ __('lang.in')}}</p>
				<cite>https://myexoticfruit.com/</cite>
				<div class="social">
					<a href="#"><span class="fab fa-facebook-f"></span></a>
					<a href="#"><span class="fab fa-twitter"></span></a>
					<a href="#"><span class="fab fa-instagram"></span></a>
					<a href="#"><span class="fab fa-youtube"></span></a>
				</div>
			</div>
		</div>
		<div class="center box">
			<h2>{{ __('lang.add')}}</h2>
			<div class="content">
				<address><div class="place">
					<span class="fas fa-map-marker-alt">
					</span>
					<span class="text3">Almaty, Baytursynova</span>
				</div>
                <div class="phone">
					<span class="fas fa-phone-alt">
					</span>
					<span class="text3">+7878973264</span>
				</div>
				<div class="email">
					<span class="fas fa-envelope">
					</span>
					<span class="text3">190103463.@mail.ru</span>
				</div></address>
			</div>
		</div>

		<div class="right box">
			<h2>{{ __('lang.cont')}}</h2>
			<div class="content">
        @if(Session::has('mess'))
        <div class="alert alert-success" role="alert">
        {{Session::get('mess')}}
        </div>
        @endif
				<form action="http://localhost:10080/project/public/send" method="post" enctype="multipart/form-data">
        @csrf
        	<div class="email">
						<label for="mail" style="font-size: 18px;">Email *</label>
						<input name="mail" class="form-control" type="email" required>
					</div>
					<div class="msg">
						<label for="msg1" style="font-size: 18px;">Message *</label>
						<textarea name="msg1" class="form-control" rows="2" cols="25" required>      
            </textarea>
					</div>
					<div class="btn1">
						<button type="submit">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="bottom">
		<center>
			<span class="creat">Created By Dana | used <abbr title="HyperText Markup Language">HTML</abbr> and <abbr title="Cascading Style Sheets">CSS</abbr></span>
		</center>
	</div>
</footer>

</body>
</html>	