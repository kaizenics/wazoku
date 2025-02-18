<?php
if (is_front_page()) {
    get_template_part('front-page');
} else {
    get_header();
    ?>

    <main id="primary" class="container mx-auto px-4 py-12">
        <?php if (have_posts()) : ?>
            <?php if (is_home() && !is_front_page()) : ?>
                <header class="text-center mb-16">
                    <h1 class="text-5xl font-bold text-gray-900 mb-4">
                        <?php single_post_title(); ?>
                    </h1>
                    <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
                </header>
            <?php endif; ?>

            <!-- Featured Post Section -->
            <?php if (is_home() && !is_paged()) : ?>
                <div class="mb-16">
                    <?php
                    $featured_post = new WP_Query(array('posts_per_page' => 1));
                    if ($featured_post->have_posts()) : while ($featured_post->have_posts()) : $featured_post->the_post();
                    ?>
                        <article class="bg-white rounded-2xl shadow-xl overflow-hidden">
                            <div class="md:flex">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="md:flex-1">
                                        <?php the_post_thumbnail('large', ['class' => 'w-full h-[400px] object-cover']); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="md:flex-1 p-8 lg:p-12">
                                    <div class="mb-6">
                                        <?php
                                        $categories = get_the_category();
                                        if ($categories) :
                                        ?>
                                            <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold">
                                                <?php echo esc_html($categories[0]->name); ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <?php the_title('<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4"><a href="' . esc_url(get_permalink()) . '" class="hover:text-blue-600 transition-colors">', '</a></h2>'); ?>
                                    <div class="prose prose-lg text-gray-600 mb-6">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span class="flex items-center">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', ['class' => 'rounded-full mr-2']); ?>
                                            <?php the_author(); ?>
                                        </span>
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                                            </svg>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            <?php endif; ?>

            <!-- Regular Posts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-1 transition-all duration-300'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="aspect-w-16 aspect-h-9 bg-gray-100">
                                <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-48 object-cover hover:scale-105 transition-transform duration-300']); ?>
                            </div>
                        <?php endif; ?>

                        <div class="p-6">
                            <header class="mb-4">
                                <?php
                                $categories = get_the_category();
                                if ($categories) :
                                ?>
                                    <div class="mb-3">
                                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold">
                                            <?php echo esc_html($categories[0]->name); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                                
                                <?php the_title('<h2 class="text-xl font-bold text-gray-900 hover:text-blue-600 transition-colors"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                            </header>

                            <div class="prose text-gray-600 mb-4">
                                <?php the_excerpt(); ?>
                            </div>

                            <footer class="flex items-center justify-between mt-6">
                                <div class="flex items-center text-sm text-gray-500">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 32, '', '', ['class' => 'rounded-full mr-2']); ?>
                                    <span><?php the_author(); ?></span>
                                </div>
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                                    Read More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                    </svg>
                                </a>
                            </footer>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                <nav class="flex justify-center">
                    <?php
                    $pagination = get_the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        ',
                        'next_text' => '
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        ',
                        'class' => 'flex space-x-2',
                    ));

                    echo str_replace(
                        'page-numbers',
                        'page-numbers inline-flex items-center justify-center w-10 h-10 border border-gray-300 rounded-full text-sm font-medium text-gray-700 hover:bg-gray-50',
                        $pagination
                    );
                    ?>
                </nav>
            </div>

        <?php else :
            get_template_part('template-parts/content', 'none');
        endif; ?>
    </main>

    <?php
    get_footer();
}
