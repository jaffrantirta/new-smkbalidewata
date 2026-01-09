<?php
get_header();
?>

<main>
    <?php
    $hero_image = get_theme_mod('smk_hero_image', 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1600&q=80');
    $hero_title = get_theme_mod('smk_hero_title', 'Kejar mimpi hingga negeri Sakura.');
    $hero_text = get_theme_mod('smk_hero_text', 'Mulai perjalanan karir Anda sebagai Caregiver profesional di Jepang melalui program magang atau visa kerja. Kami membantu Anda mengembangkan keterampilan dan wawasan di bidang keperawatan lansia.');
    $hero_button_text = get_theme_mod('smk_hero_button_text', 'Selengkapnya');
    $hero_button_url = get_theme_mod('smk_hero_button_url', '#kompetensi');
    ?>

    <section id="hero" class="hero-section">
        <div class="hero-container">
            <img src="<?php echo esc_url($hero_image); ?>" class="hero-image" alt="<?php echo esc_attr($hero_title); ?>">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text-wrapper">
                        <h1 class="hero-title"><?php echo esc_html($hero_title); ?></h1>
                        <p class="hero-text"><?php echo esc_html($hero_text); ?></p>
                        <a href="<?php echo esc_url($hero_button_url); ?>" class="btn btn-hero">
                            <?php echo esc_html($hero_button_text); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kompetensi" class="section-pad">
        <div class="container">
            <div class="section-header">
                <p class="section-kicker">Program Unggulan</p>
                <h2>Kompetensi Keahlian</h2>
                <p><?php echo esc_html(get_theme_mod('smk_kompetensi_intro', 'Jalur pembelajaran spesifik dengan sertifikasi dan praktik industri untuk karier masa depan.')); ?></p>
            </div>
            <?php
            $default_images = [
                1 => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80',
                2 => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?auto=format&fit=crop&w=800&q=80',
                3 => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
            ];
            $default_titles = [
                1 => 'Program Magang',
                2 => 'Pelatihan Bahasa',
                3 => 'Sertifikasi Profesional',
            ];
            $default_texts = [
                1 => 'Program magang kerja di Jepang dengan bimbingan penuh dan kesempatan karir jangka panjang.',
                2 => 'Pelatihan bahasa Jepang intensif dari level dasar hingga mahir untuk persiapan bekerja.',
                3 => 'Sertifikasi caregiver profesional yang diakui secara internasional.',
            ];
            $kompetensi_items = [];
            for ($i = 1; $i <= 3; $i++) {
                $kompetensi_items[] = [
                    'image' => get_theme_mod("smk_kompetensi_image_{$i}", $default_images[$i]),
                    'title' => get_theme_mod("smk_kompetensi_title_{$i}", $default_titles[$i]),
                    'text' => get_theme_mod("smk_kompetensi_text_{$i}", $default_texts[$i]),
                ];
            }
            ?>
            <div class="row g-4">
                <?php foreach ($kompetensi_items as $index => $item): ?>
                    <div class="col-md-4">
                        <div class="program-card">
                            <?php if (!empty($item['image'])): ?>
                                <div class="program-card-image">
                                    <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy">
                                </div>
                            <?php endif; ?>
                            <div class="program-card-body">
                                <?php if (!empty($item['title'])): ?>
                                    <h3 class="program-card-title"><?php echo esc_html($item['title']); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($item['text'])): ?>
                                    <p class="program-card-text"><?php echo esc_html($item['text']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php
    $keunggulan_bg = get_theme_mod('smk_keunggulan_bg_image', '');
    $keunggulan_style = $keunggulan_bg ? "style=\"--section-bg-image: url('" . esc_url($keunggulan_bg) . "');\"" : '';
    ?>
    <section id="keunggulan" class="section-pad section-accent" <?php echo $keunggulan_style; ?>>
        <div class="container">
            <div class="section-header">
                <p class="section-kicker">Mengapa Kami</p>
                <h2>Keunggulan SMK Kesehatan Bali Dewata</h2>
                <p><?php echo esc_html(get_theme_mod('smk_keunggulan_intro', 'Lingkungan belajar yang formal, profesional, dan adaptif dengan kebutuhan dunia kesehatan.')); ?></p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card h-100">
                        <span class="feature-number">01</span>
                        <h3><?php echo esc_html(get_theme_mod('smk_keunggulan_title_1', 'Kurikulum Industri')); ?></h3>
                        <p><?php echo esc_html(get_theme_mod('smk_keunggulan_text_1', 'Materi dirancang bersama mitra kesehatan untuk membekali kompetensi nyata.')); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card h-100">
                        <span class="feature-number">02</span>
                        <h3><?php echo esc_html(get_theme_mod('smk_keunggulan_title_2', 'Fasilitas Modern')); ?></h3>
                        <p><?php echo esc_html(get_theme_mod('smk_keunggulan_text_2', 'Laboratorium praktik dan ruang simulasi yang mendukung pembelajaran aktif.')); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card h-100">
                        <span class="feature-number">03</span>
                        <h3><?php echo esc_html(get_theme_mod('smk_keunggulan_title_3', 'Pengajar Profesional')); ?></h3>
                        <p><?php echo esc_html(get_theme_mod('smk_keunggulan_text_3', 'Tenaga pendidik berpengalaman di bidang kesehatan dan pendidikan vokasi.')); ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card h-100">
                        <span class="feature-number">04</span>
                        <h3><?php echo esc_html(get_theme_mod('smk_keunggulan_title_4', 'Jalur Karier')); ?></h3>
                        <p><?php echo esc_html(get_theme_mod('smk_keunggulan_text_4', 'Program pendampingan alumni dan kerja sama industri untuk penempatan kerja.')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="section-pad">
        <div class="container">
            <div class="section-header">
                <p class="section-kicker">Informasi Sekolah</p>
                <h2>Info Terbaru</h2>
                <p>Ikuti berita, kegiatan, dan prestasi terbaru dari SMK Kesehatan Bali Dewata.</p>
            </div>
            <?php
            $latest_posts = new WP_Query([
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'category_name' => 'berita',
            ]);
            $post_ids = [];
            if ($latest_posts->have_posts()) {
                while ($latest_posts->have_posts()) {
                    $latest_posts->the_post();
                    $post_ids[] = get_the_ID();
                }
                wp_reset_postdata();
            }
            ?>
            <?php if (!empty($post_ids)): ?>
                <?php $post_chunks = array_chunk($post_ids, 3); ?>
                <div id="infoCarousel" class="carousel slide info-carousel" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php foreach ($post_chunks as $index => $chunk): ?>
                            <button type="button" data-bs-target="#infoCarousel" data-bs-slide-to="<?php echo esc_attr($index); ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>" aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-label="<?php echo esc_attr(sprintf(__('Slide %d', 'smkkesehatan'), $index + 1)); ?>"></button>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-inner">
                        <?php foreach ($post_chunks as $index => $chunk): ?>
                            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                <div class="row g-4">
                                    <?php foreach ($chunk as $post_id): ?>
                                        <div class="col-md-4">
                                            <article class="card blog-card h-100">
                                                <div class="card-body">
                                                    <p class="card-kicker"><?php echo esc_html(get_the_date('', $post_id)); ?></p>
                                                    <h3 class="card-title">
                                                        <a href="<?php echo esc_url(get_permalink($post_id)); ?>"><?php echo esc_html(get_the_title($post_id)); ?></a>
                                                    </h3>
                                                    <p class="card-text"><?php echo esc_html(wp_trim_words(get_the_excerpt($post_id), 18)); ?></p>
                                                </div>
                                                <div class="card-footer">
                                                    <a class="btn btn-link" href="<?php echo esc_url(get_permalink($post_id)); ?>">Baca selengkapnya</a>
                                                </div>
                                            </article>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#infoCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"><?php esc_html_e('Previous', 'smkkesehatan'); ?></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#infoCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"><?php esc_html_e('Next', 'smkkesehatan'); ?></span>
                    </button>
                </div>
            <?php else: ?>
                <div class="empty-state">
                    <h3>Belum ada artikel</h3>
                    <p>Berita sekolah akan segera diperbarui.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php
get_footer();
