<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ app()->getLocale() }}"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Daniel</title>
	<meta name="description" content="This is a site that shows my professional profile">  
	<meta name="author" content="Daniel Elizondo Sánchez">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link href="{{ asset('css/base.css') }}" rel="stylesheet">
   <link href="{{ asset('css/main.css') }}" rel="stylesheet">
   <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">

   <!-- script
   ================================================== --> 
   <script src="{{ asset('js/modernizr.js') }}"></script>
   <script src="{{ asset('js/pace.min.js') }}"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="images/myAvatar.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="{{ asset('/') }}">Daniel</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#services" title="">Services</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello!</h5>
	   			<h1>I'm Daniel Elizondo Sánchez.</h1>

	   			<p class="intro-position">
	   				<span>Front-end Developer</span>
	   				<span>Back-end Developer</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a  href="https://www.facebook.com/daniel.elizondosanchez" target="_blank"><i class="fa fa-facebook"></i></a></li>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">

   				<img src="images/profile-pic.png" alt="Profile Picture">

   				<p class="lead">Student of Software Engineering VIII semester of the University of Costa Rica with knowledge in the analysis, design as well as development of information systems and with great interest for the investigation on the new trends in
Information and communication technologies. With skills to work both individually and as a team, with a high degree of responsibility and commitment.</p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>Daniel Elizondo Sánchez</span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span>August 14, 1996</span>
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span>Software Developer</span>
   				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>danielelizondo.info</span>
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<span>daniel.elizondo@ucrso.info</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
				<ul class="skill-bars">
				   <li>
				   		<div class="progress percent90"><span>90%</span></div>
				   		<strong>HTML5</strong>
				   </li>
				     <li>
				   		<div class="progress percent85"><span>85%</span></div>
				   		<strong>SCRUM</strong>
				   </li>
				   	<li>
				   		<div class="progress percent80"><span>80%</span></div>
				   		<strong>Java Script</strong>
				   </li>
				   <li>
				   		<div class="progress percent70"><span>70%</span></div>
				   		<strong>CSS3</strong>
				   </li>
				   <li>
					   	<div class="progress percent70"><span>70%</span></div>
					   	<strong>C#</strong>
				   </li>
				    <li>
					   	<div class="progress percent70"><span>70%</span></div>
					   	<strong>Java</strong>
				   </li>
				     <li>
					   	<div class="progress percent60"><span>60%</span></div>
					   	<strong>PMI</strong>
				   </li>
				   <li>
				   		<div class="progress percent50"><span>50%</span></div>
				   		<strong>JQuery</strong>
				   </li>
				   				   <li>
				   		<div class="progress percent50"><span>50%</span></div>
				   		<strong>SQL</strong></strong>
				   </li>
				   
				   <li>
					   	<div class="progress percent45"><span>45%</span></div>
					   	<strong>Ruby</strong>
				   </li>
				    <li>
				   		<div class="progress percent40"><span>40%</span></div>
				   		<strong>PHP</strong>
				   </li>
				 


      
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
   			<a href="files/cv.pdf" target="_blank" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1>More of my credentials.</h1>

   			<p class="lead">Below are some of my work experiences both academic and job</p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Work Experience</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Software Developer</h3>
	   					<p>July 2017 - Present</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4><a target="_blank" href="http://www.delaguayaba.com" title="">deLaGuayaba S.A</a></h4>
	   					<p>Performing the role of Software developer and applications support as a practitioner of
	   					the University of Costa Rica.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Web Developer</h3>
	   					<p>March 2017- July 2017</p>

	   				</div>

	   				<div class="timeline-content">
	   						<h4><a  href="http://www.glowcr.com" target="_blank">Clínica FisioEstética Glow</a></h4>
	   					<p>Designing and developing a <a href="http://www.glowcr.com" target="_blank">website</a> for a esthetic clinic, website oriented to advertising of ads, products, news and online appointment reservation.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Web Developer</h3>
	   					<p>August 2016 - December 2016</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4><a  href="http://www.cv.lebg.org" target="_blank">Liceo Experimental Bilingue de Grecia</a></h4>
	   					<p>Designing and developing a <a href="http://www.app.lebg.org" target="_blank">system</a> of control 
	   					and collection of lunches for the school</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Education</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Software Engineering</h3>
	   					<p>March 2014 - Present</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4><a  href="https://www.ucr.ac.cr/" target="_blank">University of Costa Rica</a></h4>
	   					<p></p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Secondary Education</h3>
	   					<p>2009 - 2013</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Liceo Academico La Lucha</h4>
	   				</div>

	   			</div> <!-- /timeline-block -->


   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
		
	</section> <!-- /features -->

	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Services</h5>
   			<h1>What Can I Do For You?</h1>


   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	      	<div class="service">	

	      		<span class="icon"><i class="icon-earth"></i></span>            

	            <div class="service-content">	

	            	 <h3>Web Development</h3>

	         	</div> 	         	 

				</div> <!-- /service -->

				<div class="service">	

					<span class="icon"><i class="icon-embed2"></i></span>                          

	            <div class="service-content">	

	            	<h3>Back-End Development</h3>  


	            </div>	                          

			   </div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-paint-format"></i></span>		            

	            <div class="service-content">

	            	<h3>Front-End Development</h3>

	            </div> 	            	               

			   </div> <!-- /service -->
			   <div class="service">

			   	<span class="icon"><i class="icon-wrench"></i></span>		            

	            <div class="service-content">

	            	<h3>Software maintenance</h3>

	            </div> 	            	               

			   </div> <!-- /service -->
			   
			   <div class="service">

			   	<span class="icon"><i class="icon-phone"></i></span>		            

	            <div class="service-content">

	            	<h3>Software Support</h3>

	            </div> 	            	               

			   </div> <!-- /service -->
			   
			   <div class="service">

			   	<span class="icon"><i class="icon-user-tie"></i></span>		            

	            <div class="service-content">

	            	<h3>Project management</h3>

	            </div> 	            	               

			   </div> <!-- /service -->


	      </div> <!-- /services-list -->
   		
   	</div> <!-- /services-content -->
		
	</section> <!-- /services -->	

@include('stats')
@include('contact')
	



   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a target="_blank" href="https://www.facebook.com/daniel.elizondosanchez"><i class="fa fa-facebook"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>&copy;{{Carbon\Carbon::now()}} Copyright Daniel Elizondo </span> 
		        	<span>Design by <a  href="http://www.styleshout.com/" target="_blank">styleshout</a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>