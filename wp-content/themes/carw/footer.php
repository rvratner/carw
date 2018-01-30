<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/


	edit_post_link('Admin: Edit', '<section class="admin-edit"><div class="wrap centered">', '</div></section>');
?>

	<section class="mailing-list gold">
		<div class="wrap text-wrap centered">
			<h2><?php the_field('signup_title', 'options'); ?></h2>
			<p><?php the_field('mailing_list_text', 'options'); ?></p>
			<form>
				<div class="input-wrap">
					<input type="text" placeholder="First Name" />
					<input type="text" placeholder="Last Name" />
					<input type="email" placeholder="Email Address *" />
				</div>
				<div class="button-wrap">
					<button>Sign Up</button>
				</div>
			</form>
		</div>
	</section>

	<section class="dark">
		<div id="footer-sidebar" class="wrap text-wrap centered site-footer">
			<div class="footer-widget" id="footer-sidebar1">
			<?php
				if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
				}
			?>
			</div>
			<div class="footer-widget" id="footer-sidebar2">
				<?php
					if(is_active_sidebar('footer-sidebar-2')){
						dynamic_sidebar('footer-sidebar-2');
					}
				?>
			</div>
			<div class="footer-widget" id="footer-sidebar3">
				<?php
					if(is_active_sidebar('footer-sidebar-3')){
						dynamic_sidebar('footer-sidebar-3');
					}
				?>
			</div>
			<p class="copywrite">© CARW 2017</p>
		</div>
	</section>

	<section class="land">
		<div class="wrap text-wrap centered">
			<div class="land-text">
				<?php the_field('land_text', 'options'); ?>
				<p><a href="<?php the_field('land_link', 'options'); ?>"><?php the_field('land_link_title', 'options'); ?></a></p>
			</div>
		</div>
	</section>

<?php wp_footer();
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website.
// Removing this fxn call will disable all kinds of plugins.
// Move it if you like, but keep it around.
?>

<?php // svg for section curved mask; move script outside PHP to run
/*
<script>

	// generate polygon points relative 0-1 for responsive mask
	var svgWidth = 1002;
	var svgHeight = 424.2;

	// vector MUST be point-based, no curves!
	// save an SVG, then visit https://betravis.github.io/shape-tools/path-to-polygon/ to convert path to poly points array
	// copy points, the remove commas, paste into array. save, view console for polygon points in clipPaths below
	var points = '1002.000 424.200 1002.000 26.500 1001.300 26.300 999.200 25.800 995.700 25.000 990.900 24.000 984.900 22.800 977.700 21.400 969.300 19.800 959.700 18.100 949.000 16.300 937.300 14.500 924.600 12.600 910.900 10.700 896.300 8.900 880.800 7.200 864.500 5.600 847.400 4.100 829.500 2.800 810.900 1.700 791.700 0.800 771.900 0.200 751.500 -0.100 730.500 -0.000 709.000 0.400 687.300 1.300 665.000 2.600 642.300 4.300 619.300 6.500 596.000 9.400 572.500 12.800 548.800 16.800 524.900 21.400 500.900 26.700 476.900 32.000 453.000 36.600 429.300 40.600 405.800 44.000 382.500 46.800 359.500 49.000 336.800 50.700 314.500 52.000 292.600 52.800 271.100 53.200 250.100 53.300 229.700 53.000 209.900 52.400 190.700 51.500 172.100 50.400 154.200 49.100 137.100 47.600 120.800 46.000 105.300 44.300 90.700 42.500 77.000 40.600 64.300 38.700 52.600 36.900 41.900 35.100 32.300 33.400 23.900 31.800 16.700 30.400 10.700 29.200 5.900 28.200 2.400 27.400 0.300 26.900 0.000 26.500 0.000 424.200 1002.000 424.200';
	points = points.split(' ');
	var allPoints = points.length;
	var newPoint, newPoints = [];
	for (var i = 0; i < allPoints; i++) {
		// divide x and y by width and height
		if (i % 2 === 0) {
			newPoint = points[i] / svgWidth; // X
		} else {
			newPoint = points[i] / svgHeight; // Y
		}
		newPoints.push(newPoint);
	}
	var finalPoints = newPoints.join(' ');
	console.log('points: ',finalPoints);

	jQuery(document).on('ready', function($) {

	});

</script>
*/
?>
<svg width="0" height="0">
	<clipPath id="section-curve" clipPathUnits="objectBoundingBox">
		<polygon points="1 1 1 0.45960502692998206 0.9992690058479532 0.4560143626570915 0.9971491228070175 0.4470377019748653 0.9937134502923978 0.4344703770197486 0.9889619883040937 0.4165170556552962 0.98296783625731 0.3949730700179533 0.9757309941520468 0.36983842010771995 0.9673245614035088 0.3429084380610413 0.9577485380116959 0.3141831238779174 0.9471491228070176 0.2836624775583483 0.935453216374269 0.2513464991023339 0.9227339181286549 0.21903052064631953 0.90906432748538 0.1867145421903052 0.8945175438596492 0.15619389587073607 0.8790935672514619 0.12567324955116696 0.8627923976608187 0.0969479353680431 0.8457602339181286 0.0718132854578097 0.8279239766081871 0.04847396768402155 0.8094298245614034 0.02872531418312388 0.7902777777777777 0.01436265709156194 0.77046783625731 0.003590664272890485 0.7500730994152046 -0.0017953321364452424 0.7291666666666666 0 0.7077485380116959 0.00718132854578097 0.685891812865497 0.02333931777378815 0.6636695906432748 0.04488330341113106 0.6410087719298245 0.07540394973070018 0.6180555555555556 0.11490125673249552 0.5948099415204678 0.1615798922800718 0.571345029239766 0.21903052064631953 0.5476608187134503 0.2872531418312388 0.5238304093567252 0.3662477558348294 0.49992690058479533 0.4578096947935368 0.4760233918128655 0.5493716337522442 0.45219298245614037 0.6283662477558348 0.4285087719298246 0.696588868940754 0.4050438596491228 0.7540394973070017 0.3817982456140351 0.8025134649910234 0.3588450292397661 0.8420107719928186 0.33618421052631575 0.8725314183123878 0.3138888888888889 0.8940754039497306 0.29203216374269003 0.9084380610412927 0.2706140350877193 0.9156193895870736 0.2497076023391813 0.9174147217235188 0.22931286549707602 0.912028725314183 0.2095029239766082 0.9012567324955116 0.19035087719298244 0.8868940754039497 0.17185672514619882 0.867145421903052 0.1540204678362573 0.8438061041292638 0.13698830409356724 0.8186714542190305 0.12068713450292397 0.7899461400359066 0.10526315789473684 0.7594254937163374 0.09071637426900585 0.7289048473967684 0.077046783625731 0.696588868940754 0.06432748538011696 0.6642728904847397 0.05263157894736842 0.6319569120287253 0.04203216374269006 0.6014362657091562 0.03245614035087719 0.5727109515260322 0.02404970760233918 0.5457809694793536 0.016812865497076022 0.5206463195691202 0.010818713450292398 0.4991023339317774 0.0060672514619883045 0.48114901256732495 0.002631578947368421 0.46858168761220825 0.0007309941520467836 0.46140035906642723 0 0.4578096947935368 0 0.9982046678635548 1 0.9982046678635548"/>
	</clipPath>
	<clipPath id="image-curve" clipPathUnits="objectBoundingBox">
		<polygon points="1 1 1 0.062470532767562474 0.9993013972055887 0.061999057048562005 0.9972055888223553 0.060820367751060825 0.9937125748502994 0.058934464875058934 0.9889221556886227 0.05657708628005658 0.9829341317365269 0.05374823196605375 0.9757485029940121 0.050447901933050446 0.9673652694610778 0.04667609618104668 0.9577844311377246 0.042668552569542675 0.9471057884231537 0.03842527109853843 0.9354291417165668 0.03418198962753418 0.9227544910179641 0.0297029702970297 0.9090818363273453 0.025223950966525223 0.8945109780439121 0.020980669495520982 0.8790419161676646 0.016973125884016973 0.8627744510978044 0.013201320132013201 0.8457085828343314 0.009665252239509665 0.8278443113772455 0.006600660066006601 0.8092814371257485 0.004007543611504008 0.790119760479042 0.0018859028760018861 0.7703592814371257 0.00047147571900047153 0.75 -0.00023573785950023576 0.7290419161676647 0 0.7075848303393214 0.0009429514380009431 0.6859281437125748 0.003064592173503065 0.6636726546906188 0.00612918434700613 0.6410179640718563 0.010136727958510136 0.618063872255489 0.015322960867515324 0.5948103792415169 0.022159358793022162 0.5713572854291418 0.030174446016030178 0.5477045908183632 0.039603960396039604 0.5238522954091817 0.050447901933050446 0.4999001996007984 0.06294200848656294 0.47594810379241514 0.07543611504007544 0.45209580838323354 0.08628005657708629 0.4284431137724551 0.09570957095709572 0.40499001996007983 0.10372465818010372 0.38173652694610777 0.11032531824611032 0.3587824351297405 0.11551155115511551 0.33612774451097804 0.11951909476661952 0.313872255489022 0.12258368694012259 0.29201596806387226 0.12446958981612447 0.270558882235529 0.12541254125412543 0.2496007984031936 0.12564827911362564 0.22924151696606784 0.12494106553512495 0.2094810379241517 0.12352663837812353 0.1903193612774451 0.12140499764262142 0.1717564870259481 0.1188118811881188 0.15389221556886226 0.11574728901461576 0.13682634730538923 0.11221122112211222 0.12055888223552894 0.10843941537010844 0.10508982035928144 0.10443187175860442 0.09051896207584831 0.10018859028760019 0.07684630738522955 0.09570957095709572 0.06417165668662675 0.09123055162659124 0.05249500998003992 0.086987270155587 0.041816367265469064 0.08274398868458276 0.03223552894211577 0.07873644507307874 0.023852295409181636 0.07496463932107497 0.016666666666666666 0.07166430928807166 0.010678642714570858 0.06883545497406883 0.005888223552894212 0.06647807637906648 0.0023952095808383233 0.06459217350306459 0.0002994011976047904 0.0634134842055634 0 0.062470532767562474 0 1 1 1"/>
	</clipPath>
</svg>



</body>
</html>
