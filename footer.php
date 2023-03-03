<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Citybreak_underscoresme
 */

?>

	<footer class="w-full py-5 bg-citybreakteal-900">
        <div class="container flex justify-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/img/citybreak.svg" alt="Citybreak" />
			</a>
        </div>
        <div class="container flex flex-row flex-wrap justify-between mx-auto">
            <div class="basis-1/2 md:basis-1/4 my-5">
                <h5 class="text-white text-xl">Subscribe</h5>

                <h5 class="text-white text-xl">Follow</h5>
                <div class="flex flex-row">

                </div>
            </div>
            <div class="basis-1/2 md:basis-1/4 my-5">
                <h5 class="text-white text-xl">Top destinations</h5>   
                <ul class="list-none">
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">Lisbon</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">Paris</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">London</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">New York</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">Melbourne</a></li>
                </ul>             
            </div>
            <div class="basis-1/2 md:basis-1/4 my-5">
                <h5 class="text-white text-xl">Latest posts</h5>                
                <ul class="list-none">
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">10 restaurants to visit on a budget in Lisbon in 2023</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">10 restaurants to visit on a budget in Lisbon in 2023</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">10 restaurants to visit on a budget in Lisbon in 2023</a></li>
                </ul>   
            </div>
            <div class="basis-1/2 md:basis-1/4 my-5">
                <h5 class="text-white text-xl">About</h5>
                <ul class="list-none">
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">Who we are</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">How we work</a></li>
                    <li class="my-1"><a href="#" class="text-citybreakteal no-underline hover:underline">Write for us</a></li>
                </ul>  
            </div>
        </div>
        <div class="container flex justify-center">
            <p class="text-white text-sm">&copy; Citybreak <?php echo date('Y'); ?> | <a href="#" class="text-white underline hover:no-underline">Terms</a> | <a href="#" class="text-white underline hover:no-underline">Privacy</a> | <a href="#" class="text-white underline hover:no-underline">Cookies</a></p>
        </div>        
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
