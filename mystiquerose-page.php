<?php
/**
 * Template Name: Mytique Rose page
 */
get_header();
?>

<!-- ORIGINAL CODE - COMMENTED OUT FOR UNDER CONSTRUCTION PAGE
<section class="mystique-rose-page">
    <?php
        // while ( have_posts() ) : the_post();
        //     the_content();
        // endwhile;
    ?>
</section>
-->

<!-- UNDER CONSTRUCTION PAGE -->
<style>
    .under-construction-wrapper {
        position: relative;
        min-height: 85vh;
        background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 50%, #2a2a2a 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 40px 20px;
    }

    /* Animated background particles */
    .particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }

    .particle {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        animation: float 20s infinite;
    }

    .particle:nth-child(1) { width: 80px; height: 80px; left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { width: 60px; height: 60px; left: 20%; animation-delay: 2s; }
    .particle:nth-child(3) { width: 100px; height: 100px; left: 30%; animation-delay: 4s; }
    .particle:nth-child(4) { width: 70px; height: 70px; left: 40%; animation-delay: 6s; }
    .particle:nth-child(5) { width: 90px; height: 90px; left: 50%; animation-delay: 8s; }
    .particle:nth-child(6) { width: 50px; height: 50px; left: 60%; animation-delay: 10s; }
    .particle:nth-child(7) { width: 110px; height: 110px; left: 70%; animation-delay: 12s; }
    .particle:nth-child(8) { width: 65px; height: 65px; left: 80%; animation-delay: 14s; }
    .particle:nth-child(9) { width: 85px; height: 85px; left: 90%; animation-delay: 16s; }

    @keyframes float {
        0%, 100% {
            transform: translateY(100vh) scale(0);
            opacity: 0;
        }
        10% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            transform: translateY(-100vh) scale(1);
        }
    }

    /* Glowing lines */
    .glow-lines {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .glow-line {
        position: absolute;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        animation: glowMove 8s infinite;
    }

    .glow-line:nth-child(1) {
        width: 200%;
        height: 2px;
        top: 20%;
        left: -100%;
        animation-delay: 0s;
    }

    .glow-line:nth-child(2) {
        width: 200%;
        height: 2px;
        top: 60%;
        left: -100%;
        animation-delay: 4s;
    }

    @keyframes glowMove {
        0% { left: -100%; }
        100% { left: 100%; }
    }

    /* Main content */
    .construction-content {
        position: relative;
        z-index: 10;
        text-align: center;
        color: #fff;
        max-width: 800px;
        animation: fadeInUp 1.2s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .mystique-logo {
        font-size: 4rem;
        font-family: "Rutan-Light", sans-serif;
        font-weight: 300;
        letter-spacing: 8px;
        margin-bottom: 30px;
        text-transform: uppercase;
        background: linear-gradient(135deg, #fff 0%, #e0e0e0 50%, #fff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: shimmer 3s infinite;
        position: relative;
    }

    @keyframes shimmer {
        0% { background-position: -200% center; }
        100% { background-position: 200% center; }
    }

    .rose-icon {
        font-size: 5rem;
        margin-bottom: 20px;
        animation: pulse 2s ease-in-out infinite;
        filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.3));
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }

    .construction-title {
        font-size: 2.5rem;
        font-family: "Rutan-Light", sans-serif;
        font-weight: 300;
        margin-bottom: 20px;
        letter-spacing: 4px;
        text-transform: uppercase;
        color: #fff;
    }

    .construction-subtitle {
        font-size: 1.2rem;
        font-family: "Rutan-Light", sans-serif;
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 40px;
        line-height: 1.8;
        letter-spacing: 2px;
    }

    /* Countdown or progress indicator */
    .progress-container {
        margin: 50px 0;
    }

    .progress-bar-custom {
        width: 100%;
        height: 3px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        overflow: hidden;
        position: relative;
    }

    .progress-bar-fill {
        height: 100%;
        background: linear-gradient(90deg, #fff, #e0e0e0, #fff);
        animation: progressAnimation 2s ease-in-out infinite;
        width: 60%;
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }

    @keyframes progressAnimation {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(300%); }
    }

    .construction-message {
        font-size: 1rem;
        font-family: "Rutan-Regular", sans-serif;
        color: rgba(255, 255, 255, 0.7);
        margin-top: 30px;
        letter-spacing: 1px;
    }

    /* Email notification form */
    .notify-form {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-top: 40px;
        flex-wrap: wrap;
    }

    .notify-input {
        padding: 15px 25px;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 50px;
        color: #fff;
        font-family: "Rutan-Light", sans-serif;
        font-size: 1rem;
        min-width: 300px;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .notify-input:focus {
        outline: none;
        border-color: rgba(255, 255, 255, 0.6);
        background: rgba(255, 255, 255, 0.15);
    }

    .notify-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .notify-button {
        padding: 15px 40px;
        background: #fff;
        color: #000;
        border: none;
        border-radius: 50px;
        font-family: "Rutan-Regular", sans-serif;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .notify-button:hover {
        background: #e0e0e0;
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.2);
    }

    /* Social icons */
    .social-links-construction {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 60px;
    }

    .social-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.5rem;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .social-icon:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.2);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .mystique-logo {
            font-size: 2.5rem;
            letter-spacing: 4px;
        }

        .construction-title {
            font-size: 1.8rem;
            letter-spacing: 2px;
        }

        .construction-subtitle {
            font-size: 1rem;
            letter-spacing: 1px;
        }

        .rose-icon {
            font-size: 3.5rem;
        }

        .notify-input {
            min-width: 250px;
            width: 100%;
        }

        .notify-button {
            width: 100%;
        }

        .notify-form {
            flex-direction: column;
            width: 100%;
            max-width: 350px;
            margin: 40px auto 0;
        }
    }

    @media (max-width: 480px) {
        .mystique-logo {
            font-size: 2rem;
            letter-spacing: 3px;
        }

        .construction-title {
            font-size: 1.5rem;
        }

        .rose-icon {
            font-size: 3rem;
        }
    }
</style>

<section class="under-construction-wrapper">
    <!-- Animated particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Glowing lines -->
    <div class="glow-lines">
        <div class="glow-line"></div>
        <div class="glow-line"></div>
    </div>

    <!-- Main content -->
    <div class="construction-content">
        <div class="rose-icon">🌹</div>
        <h1 class="mystique-logo">Mystique Rose</h1>
        <h2 class="construction-title">Coming Soon</h2>
        <p class="construction-subtitle">
            We're crafting something beautiful.<br>
            A new experience is blooming.
        </p>

        <div class="progress-container">
            <div class="progress-bar-custom">
                <div class="progress-bar-fill"></div>
            </div>
        </div>

        <p class="construction-message">
            Our team is working tirelessly to bring you an extraordinary collection.<br>
            Stay tuned for the grand reveal.
        </p>

        <!-- Email notification form -->
        <form class="notify-form" action="#" method="post">
            <input type="email" class="notify-input" placeholder="Enter your email" required>
            <button type="submit" class="notify-button">Notify Me</button>
        </form>

        <!-- Social media links -->
        <?php
        $all_generalFields = get_fields('options');
        $social_media_links = $all_generalFields['social_links'];
        if($social_media_links):
        ?>
        <div class="social-links-construction">
            <?php if($social_media_links['instagram']): ?>
                <a href="<?php echo $social_media_links['instagram']; ?>" target="_blank" class="social-icon">
                    <i class="icon-social-instagram"></i>
                </a>
            <?php endif; ?>
            <?php if($social_media_links['facebook']): ?>
                <a href="<?php echo $social_media_links['facebook']; ?>" target="_blank" class="social-icon">
                    <i class="icon-social-facebook"></i>
                </a>
            <?php endif; ?>
            <?php if($social_media_links['twitter_x']): ?>
                <a href="<?php echo $social_media_links['twitter_x']; ?>" target="_blank" class="social-icon">
                    <i class="icon-social-twitter_x"></i>
                </a>
            <?php endif; ?>
            <?php if($social_media_links['pinterest']): ?>
                <a href="<?php echo $social_media_links['pinterest']; ?>" target="_blank" class="social-icon">
                    <i class="icon-social-pinterest"></i>
                </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- END UNDER CONSTRUCTION PAGE -->

<?php
get_footer();