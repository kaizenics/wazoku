<?php
/**
 * Template Name: Front Page
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative text-black">
        <div class="absolute inset-0 bg-[url('/path-to-your-image.jpg')] bg-cover bg-center opacity-50"></div>
        <div class="relative container mx-auto px-4 py-32">
            <div class="max-w-3xl">
                <h1 class="text-5xl font-bold mb-6">Welcome to Wazoku</h1>
                <p class="text-xl mb-8">Your journey to extraordinary web experiences starts here.</p>
                <a href="#about">
                    <button
                        class="border-none bg-red-600 text-white px-8 py-3 rounded-lg hover:bg-red-700 transition-colors">Get
                        Started</button>
                </a>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container mx-auto px-4 py-12">

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
                <!-- Innovation Card -->
                <div
                    class="text-center p-6 bg-white rounded-lg shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Innovation</h3>
                    <p class="text-gray-600">Pushing boundaries with creative solutions and cutting-edge technologies to
                        deliver exceptional results.</p>
                </div>

                <!-- Expertise Card -->
                <div
                    class="text-center p-6 bg-white rounded-lg shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="w-16 h-16 bg-violet-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Deep Expertise</h3>
                    <p class="text-gray-600">Years of experience in delivering high-quality web solutions and digital
                        transformations.</p>
                </div>

                <!-- Customer Focus Card -->
                <div
                    class="text-center p-6 bg-white rounded-lg shadow-lg hover:-translate-y-1 transition-all duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Customer Focus</h3>
                    <p class="text-gray-600">Dedicated to understanding and exceeding our clients' expectations with
                        personalized solutions.</p>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="mt-16 grid md:grid-cols-4 gap-8 text-center">
                <div class="p-6 bg-gray-50 rounded-lg">
                    <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>
                    <div class="text-gray-600">Projects Completed</div>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg">
                    <div class="text-4xl font-bold text-violet-600 mb-2">50+</div>
                    <div class="text-gray-600">Team Members</div>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg">
                    <div class="text-4xl font-bold text-red-600 mb-2">99%</div>
                    <div class="text-gray-600">Client Satisfaction</div>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg">
                    <div class="text-4xl font-bold text-green-600 mb-2">10+</< /div>
                        <div class="text-gray-600">Years Experience</div>
                    </div>
                </div>

                <!-- Team Section -->
                <div class="mt-16">
                    <h3 class="text-2xl font-bold text-center mb-8">Our Leadership Team</h3>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team-1.jpg"
                                    alt="Team Member" class="w-full h-full object-cover">
                            </div>
                            <h4 class="text-xl font-semibold">John Doe</h4>
                            <p class="text-gray-600">CEO & Founder</p>
                        </div>
                        <!-- Add more team members as needed -->
                    </div>
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
                <article
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300">
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
            <a href="/contact"
                class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors">
                Get in Touch
            </a>
        </div>
    </section>
</main>

<?php
get_footer();