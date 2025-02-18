<?php
/**
 * Template Name: Front Page
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gray-900 text-white">
        <div class="absolute inset-0 bg-[url('/path-to-your-image.jpg')] bg-cover bg-center opacity-50"></div>
        <div class="relative container mx-auto px-4 py-32">
            <div class="max-w-3xl">
                <h1 class="text-5xl font-bold mb-6">Welcome to Wazoku</h1>
                <p class="text-xl mb-8">Your journey to extraordinary web experiences starts here.</p>
               <button class="border-none bg-pink-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors"><a href="#about" class="text-white">Get Started</a></button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-8">About Us</h2>
                <p class="text-gray-600 mb-12">
                    We are passionate about creating exceptional digital experiences that inspire and engage.
                    Our team combines creativity with technical expertise to deliver outstanding results.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Innovation</h3>
                    <p class="text-gray-600">Pushing boundaries with creative solutions</p>
                </div>
                <!-- Add more feature cards as needed -->
            </div>
        </div>
    </section>

    <!-- Showcase Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Our Work</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $showcase_query = new WP_Query($args);

                if ($showcase_query->have_posts()) :
                    while ($showcase_query->have_posts()) : $showcase_query->the_post();
                ?>
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="aspect-w-16 aspect-h-9">
                                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-48 object-cover']); ?>
                            </div>
                        <?php endif; ?>
                        <div class="p-6">
                            <?php the_title('<h3 class="text-xl font-bold mb-4">', '</h3>'); ?>
                            <div class="text-gray-600 mb-4"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-700 font-medium">
                                Read More →
                            </a>
                        </div>
                    </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">Ready to Start Your Project?</h2>
            <a href="/contact" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors">
                Get in Touch
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
