<?php
get_header(); ?>
		<div class="left-shade"></div>
		<div id="primary">
			<div class="dizionario">
				<h1 id="ugly">Uglyfruit <span>|'eglèfroot| </span></h1>
				<p id="tipo">compound noun</p>
				<p id="descrizione">Name of a web app that turns around the way demand meets offer</p>
			</div>
			<div class="flexslider">
			  <ul class="slides">
				<li>
				<img src="<?php echo get_stylesheet_directory_uri()?>/images/kitchen_adventurer_cheesecake_brownie.jpg">
				  <div class="pippo"><h1>bla bla bla</h1></div>
				</li>
				<li>
				  <div class="pippo"><h1>bla bla bla</h1></div>
				</li>
				<li>
				  <div class="pippo"><h1>bla bla bla</h1></div>
				</li>
				<li>
				  <div class="pippo"><h1>bla bla bla</h1></div>
				</li>
			  </ul>
			</div>
			<div class="spiegazione">
				<h1 id="titolo"><span>uglyfruit</span> leaves traditional marketing aside</h1>
				<p>every year, rateilers spend a lot of money in marketing. most of the money spent end up being a sort of donation 
				made to the varius publishers in that there is more to it than just a digitally selected target audience. 
			</div>
			<ol>
				<li>i don't waste hours looking for the best offer in a serch engine. iknow what i want. i just want to fulfilla ...</li>
				<li>this e-commerce is overloading my mailbox with...</li>
				<li>it shoould be up to the seller to establish a ... with me</li>	
			</ol>			
			<div class="orange_header">
				<div class="circle">
					<h1 id="title">buyer</h1>
				</div>
				<p id= "description2">62 % of shoppers search for digitally for at leaast half of their shopping trips</p>
			</div>
			<div class="continuazione">
				<p id = "presentazione"> commerce will become dynamic and based on consumers' generated request</p>
				<p id="description"> The hardest thing about B2c selling today is that the customers don't need yuo the way they used to.
				Internet has significantly increased the bargaining power of consumers. Retailers have come to realiza that the challange
				is not simply to attract customers to their site or physical store, but to actually convert visitors to purchaser.
				</p>	
			</div>
			<div class="orange_header">
				<div class="circle">
					<h1 id="title">seller</h1>
				</div>
				<p id= "description2">e-shopper expect: convenience, multi-channel, real, time, dialogue, engagement and control.</p>
				
			</div>
			<div class="continuazione">
				<p id = "presentazione">uglyfruit takes your customers out of the shadow for you!</p>
				<p id="description">The rise and rise of e-shopping and m-shopping, is a fantastic chance for retailers to angage with their customers like never before. 
				A new breed of inoovative retailers is now emerging, gaining first mover advantage by embracing the potential offerde by revolutionnary changes that are effecting the way goods are being sold.
				In this marketing sphere, you should always be aware of the right moment to profit from the opprtunity and when the time gets right, be ready for customers who are ready to buy UglyFruit provides
				 you with personalized client management which will enable you to communicate the right essage to the right client at the right place in the right time!s</p>	
			</div>
			
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'landing' ); ?>

				<?php endwhile; // end of the loop. ?>
				<div id="posts_list">
					<?php do_action("list_posts"); ?>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	<div class="right-shade"></div>
<?php get_footer(); ?>