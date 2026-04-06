<?php
session_start();

$page_title = 'Contact Antfarm Tech Solutions | Website Experts in Harare';
$meta_description = 'Contact Antfarm Tech Solutions in Harare, Zimbabwe for websites, business email setup, SEO improvements, and ongoing digital support.';
$page_slug = 'contact';
$canonical_path = '/contact';

$form_errors = $_SESSION['form_errors'] ?? [];
$form_success = $_SESSION['form_success'] ?? '';
$form_data = $_SESSION['form_data'] ?? [];

unset($_SESSION['form_errors'], $_SESSION['form_success'], $_SESSION['form_data']);

include 'includes/header.php';
include 'includes/navbar.php';
?>

<main id="main-content" tabindex="-1">
    <section class="inner-hero-section position-relative overflow-hidden">
        <div class="hero-glow hero-glow-1"></div>
        <div class="hero-glow hero-glow-2"></div>
        <div class="container position-relative z-2">
            <div class="inner-hero-shell reveal-up">
                <div class="inner-hero-content">
                    <p class="hero-badge">Contact</p>
                    <h1 class="inner-hero-title">Let's plan a high-performing digital presence for your business.</h1>
                    <p class="inner-hero-text">Tell us your goals and timeline. Our Harare team will guide you with clear recommendations on website design, SEO, and digital growth.</p>
                    <div class="inner-hero-meta">
                        <span class="inner-meta-pill">Fast Response</span>
                        <span class="inner-meta-pill">Conversion-Focused Strategy</span>
                        <span class="inner-meta-pill">Local Harare Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad section-transition-soft">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    <article class="contact-panel reveal-up h-100">
                        <p class="section-label">Send a Message</p>
                        <h2 class="section-title h3 mb-3">Start with a short project brief.</h2>
                        <p class="section-text mb-4">Share your requirements and we will send practical next steps tailored to your business.</p>

                        <?php if (!empty($form_success)): ?>
                            <div class="alert alert-success" role="status"><?php echo htmlspecialchars($form_success, ENT_QUOTES, 'UTF-8'); ?></div>
                        <?php endif; ?>

                        <?php if (!empty($form_errors)): ?>
                            <div class="alert alert-danger" role="alert">
                                <p class="mb-2"><strong>Please correct the following:</strong></p>
                                <ul class="mb-0">
                                    <?php foreach ($form_errors as $error): ?>
                                        <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form class="premium-form" action="forms/contact-form.php" method="post" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full name</label>
                                <input type="text" class="form-control" id="name" name="name" autocomplete="name" required maxlength="100" value="<?php echo htmlspecialchars($form_data['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Business email</label>
                                <input type="email" class="form-control" id="email" name="email" autocomplete="email" required maxlength="120" value="<?php echo htmlspecialchars($form_data['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone or WhatsApp (optional)</label>
                                <input type="tel" class="form-control" id="phone" name="phone" autocomplete="tel" maxlength="30" value="<?php echo htmlspecialchars($form_data['phone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="service" class="form-label">Service needed</label>
                                <select class="form-control" id="service" name="service" required>
                                    <option value="">Select a service</option>
                                    <?php
                                    $service_options = ['Website Development', 'Professional Email Setup', 'Hosting & Domains', 'Software Solutions', 'Full Digital Package'];
                                    $selected_service = $form_data['service'] ?? '';
                                    foreach ($service_options as $option):
                                    ?>
                                        <option value="<?php echo htmlspecialchars($option, ENT_QUOTES, 'UTF-8'); ?>" <?php echo $selected_service === $option ? 'selected' : ''; ?>><?php echo htmlspecialchars($option, ENT_QUOTES, 'UTF-8'); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Project details</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required maxlength="2000"><?php echo htmlspecialchars($form_data['message'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                            </div>
                            <input type="text" name="website" class="visually-hidden" tabindex="-1" autocomplete="off" aria-hidden="true">
                            <button type="submit" class="btn btn-premium btn-lg px-4">Request My Proposal</button>
                        </form>
                    </article>
                </div>
                <div class="col-lg-5">
                    <aside class="contact-panel reveal-up h-100">
                        <p class="section-label">Company Details</p>
                        <h2 class="section-title h3 mb-3">Antfarm Tech Solutions</h2>
                        <ul class="contact-detail-list list-unstyled mb-4">
                            <li><strong>Address:</strong> 31 Tweed Road, Eastlea, Harare, Zimbabwe</li>
                            <li><strong>Phone / WhatsApp:</strong> <a href="tel:+263713409369">0713 409 369</a></li>
                            <li><strong>Email:</strong> <a href="mailto:hello@antfarm.co.zw">hello@antfarm.co.zw</a></li>
                            <li><strong>Serving:</strong> Harare and businesses across Zimbabwe</li>
                        </ul>
                        <a href="https://wa.me/263713409369" target="_blank" rel="noopener" class="btn btn-outline-premium w-100 mb-4">Chat on WhatsApp</a>
                        <div class="map-placeholder" role="img" aria-label="Map marker for Antfarm Tech Solutions office in Eastlea, Harare, Zimbabwe">
                            <span>Eastlea Office — Harare, Zimbabwe</span>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <section class="section-pad section-transition-top">
        <div class="container">
            <article class="premium-panel text-center reveal-up">
                <p class="section-label">Prefer a Quick Route?</p>
                <h2 class="section-title h3">Call, WhatsApp, or send your brief and we will take it from there.</h2>
                <p class="section-text section-text-center mb-4">Need more detail first? Explore our <a href="/services">services</a> or compare website packages on the <a href="/pricing">pricing page</a>.</p>
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                    <a href="tel:+263713409369" class="btn btn-outline-premium px-4">Call Us Directly</a>
                    <a href="https://wa.me/263713409369" target="_blank" rel="noopener" class="btn btn-premium px-4">Continue on WhatsApp</a>
                </div>
            </article>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
