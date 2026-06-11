<?php
// =============================================
// ORION - Reusable Components
// =============================================

function render_head(string $page_title, string $extra_css = ''): void {
    global $site;
    $title = htmlspecialchars($page_title . ' — ' . $site['name']);
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{$title}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/orion/assets/css/main.css">
  {$extra_css}
</head>
<body>
HTML;
}

function render_navbar(string $active_page = ''): void {
    global $nav_links, $site;
    $name = htmlspecialchars($site['name']);

    echo '<header class="site-header" id="site-header">';
    echo '<nav class="navbar container">';
    echo '<a href="/orion/index.php" class="logo"><span class="logo-icon">◎</span>' . $name . '</a>';
    echo '<button class="nav-toggle" id="nav-toggle" aria-label="Toggle menu"><span></span><span></span><span></span></button>';
    echo '<ul class="nav-links" id="nav-links">';
    foreach ($nav_links as $link) {
        $label = htmlspecialchars($link['label']);
        $href  = htmlspecialchars($link['href']);
        $active = ($active_page === $label) ? ' class="active"' : '';
        echo "<li><a href=\"{$href}\"{$active}>{$label}</a></li>";
    }
    echo '</ul></nav></header>';
}

function render_footer(): void {
    global $site;
    $name    = htmlspecialchars($site['name'] ?? 'Orion');
    $email   = htmlspecialchars($site['email']);
    $phone   = htmlspecialchars($site['phone']);
    $address = htmlspecialchars($site['address']);

    echo <<<HTML
<footer class="site-footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a href="/orion/index.php" class="logo logo--light"><span class="logo-icon">◎</span>{$name}</a>
      <p>Empowering learners of all ages to reach their academic and personal goals.</p>
    </div>
    <div class="footer-links">
      <h4>Navigate</h4>
      <ul>
        <li><a href="/orion/index.php">Home</a></li>
        <li><a href="/orion/pages/about.php">About Us</a></li>
        <li><a href="/orion/pages/courses.php">Courses</a></li>
        <li><a href="/orion/pages/tutors.php">Tutors</a></li>
        <li><a href="/orion/pages/contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="footer-contact">
      <h4>Get in Touch</h4>
      <p>📧 {$email}</p>
      <p>📞 {$phone}</p>
      <p>📍 {$address}</p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2026 {$name} Learning Centre. All rights reserved.</p>
  </div>
</footer>
<script src="/orion/assets/js/main.js"></script>
</body>
</html>
HTML;
}

function render_page_hero(string $title, string $subtitle = ''): void {
    $t = htmlspecialchars($title);
    $s = $subtitle ? '<p>' . htmlspecialchars($subtitle) . '</p>' : '';
    echo <<<HTML
<section class="page-hero">
  <div class="container">
    <h1>{$t}</h1>
    {$s}
  </div>
</section>
HTML;
}



function render_header($data) {
?>
<header class="container header">
    <div class="first-header">

        <div class="logo">
            <a href="/">
                <img src="<?= e($data["logo"]) ?>" alt="">
            </a>
        </div>

        <div class="header-nav">
            <?php foreach ($data["nav"] as $item): ?>
                <a href="<?= e($item["link"]) ?>">
                    <?= e($item["text"]) ?>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</header>
        <?php
}

function render_about($data) {
?>
<section class="container About">
    <div class="about-us">

        <div class="name">
            <h3><?= e($data["title"]) ?></h3>
        </div>

        <div class="second-part">

            <div class="photo">
                <img src="<?= e($data["image"]) ?>" alt="About Orion">
            </div>

            <div class="text">
                <?php foreach ($data["text"] as $paragraph): ?>
                    <p><?= e($paragraph) ?></p>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</section>
<?php
}



function render_underline($data) {
    if (!$data["enabled"]) return;
?>
<section class="container row">
    <div class="underline"></div>
</section>
<?php
}

function render_hero($data) {
?>
<section class="container hero">

    <div class="hero-orbs">
        <span></span><span></span><span></span>
    </div>

    <div class="container">
        <div class="hero-content">

            <div class="hero-tag">
                <?= e($data["tag"]) ?>
            </div>

            <h1>
                <?= str_replace(
                    $data["title_emphasis"],
                    "<em>{$data["title_emphasis"]}</em>",
                    e($data["title"])
                ) ?>
            </h1>

            <p><?= e($data["text"]) ?></p>

            <div class="hero-cta">
                <?php foreach ($data["cta"] as $btn): ?>
                    <a href="<?= e($btn["link"]) ?>">
                        <?= e($btn["text"]) ?>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

</section>
<?php
}



function render_courses($data) {
?>
<section class="courses">

    <div class="name">
        <h3><?= e($data["title"]) ?></h3>
    </div>

    <div class="subjects">
        <?php foreach ($data["items"] as $item): ?>
            <a href="<?= e($item["link"]) ?>">
                <?= e($item["icon"]) ?> <?= e($item["name"]) ?>
            </a>
        <?php endforeach; ?>
    </div>

</section>
<?php
}



function render_cta($data) {
?>
<section class="section">
  <div class="container text-center" style="max-width:660px">
    <h2><?= e($data["title"]) ?></h2>
    <p class="section-sub" style="margin-top:12px">
      <?= e($data["text"]) ?>
    </p>
    <a href="<?= e($data["button_link"]) ?>" class="btn btn-primary">
      <?= e($data["button_text"]) ?>
    </a>
  </div>
</section>
<?php
}



function render_thank_you() {
?>
<div class="thank-you">
  <h2>Thank you! 🎉</h2>
  <p>Your message has been sent.</p>
</div>
<?php
}






function render_line() {
?>
<section class="container line">
    <div class="underline"></div>
</section>
<?php
}



function render_why_choose($data) {
?>
<section class="container us">
    <div class="why">

        <div class="choosing">
            <h2><?= e($data["title"]) ?></h2>
        </div>

        <div class="reasons">
            <?php foreach ($data["items"] as $item): ?>
                <a href="#"><?= e($item) ?></a>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<?php
}



function render_mission($data) {
?>
<section class="section">
  <div class="container text-center">

    <h2 class="section-title"><?= e($data["title"]) ?></h2>

    <p class="section-sub" style="max-width:640px;margin-inline:auto">
      <?= e($data["text"]) ?>
    </p>

    <div class="about-values">

      <?php foreach ($data["values"] as $v): ?>
        <div class="value-card">
          <div class="icon"><?= e($v["icon"]) ?></div>
          <h3><?= e($v["title"]) ?></h3>
          <p><?= e($v["text"]) ?></p>
        </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>
<?php

}






function render_contact($site, $courses) {
?>
<section class="container section section--alt">

  <div class="contact-grid">

    <!-- Info -->
    <div class="contact-info">
      <h3>Contact Information</h3>

      <div class="contact-item">
        <div class="contact-item-icon">📧</div>
        <div class="contact-item-text">
          <strong>Email</strong>
          <span><?= e($site['email']) ?></span>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-item-icon">📞</div>
        <div class="contact-item-text">
          <strong>Phone</strong>
          <span><?= e($site['phone']) ?></span>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-item-icon">📍</div>
        <div class="contact-item-text">
          <strong>Location</strong>
          <span><?= e($site['address']) ?></span>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-item-icon">🕐</div>
        <div class="contact-item-text">
          <strong>Hours</strong>
          <span>Mon–Fri: 9:00 – 20:00<br>Sat: 10:00 – 16:00</span>
        </div>
      </div>

    </div>

    <!-- Form -->
    <div class="contact-form">
      <h3>Send Us a Message</h3>

      <div id="contact-form">

        <div class="form-row">
          <div class="form-group">
            <label>First Name</label>
            <input type="text">
          </div>

          <div class="form-group">
            <label>Last Name</label>
            <input type="text">
          </div>
        </div>

        <div class="form-group">
          <label>Email Address</label>
          <input type="email">
        </div>

        <div class="form-group">
          <label>Subject</label>
          <select>
            <option>— Select a subject —</option>

            <?php foreach ($courses as $c): ?>
              <option><?= e($c['name']) ?></option>
            <?php endforeach; ?>

            <option>Other / General Inquiry</option>
          </select>
        </div>

        <div class="form-group">
          <label>Message</label>
          <textarea placeholder="Tell us about your learning goals…"></textarea>
        </div>

        <button type="button" class="btn btn-primary" onclick="handleSubmit(this)">
          Send Message →
        </button>

      </div>
    </div>

  </div>

</section>

<script>
function handleSubmit(btn) {
  btn.textContent = '✓ Sent!';
  btn.disabled = true;

  setTimeout(() => {
    btn.textContent = 'Send Message →';
    btn.disabled = false;
  }, 3000);
}
</script>
<?php
}






function render_contact_section($data)
{
?>
<section class="container section section--alt">

    <div class="contact-grid">

        <div class="contact-info">

            <h3><?= e($data['title']) ?></h3>

            <?php foreach ($data['info'] as $item): ?>
                <div class="contact-item">

                    <div class="contact-item-icon">
                        <?= $item['icon'] ?>
                    </div>

                    <div class="contact-item-text">
                        <strong><?= e($item['label']) ?></strong>
                        <span><?= $item['value'] ?></span>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

        <div class="contact-form">

            <h3><?= e($data['form_title']) ?></h3>

            <div id="contact-form">

                <div class="form-row">

                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text"
                               id="fname"
                               name="fname"
                               placeholder="Ana"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text"
                               id="lname"
                               name="lname"
                               placeholder="Beridze"
                               required>
                    </div>

                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email"
                           id="email"
                           name="email"
                           placeholder="you@example.com"
                           required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject of Interest</label>

                    <select id="subject" name="subject">

                        <option value="">
                            — Select a subject —
                        </option>

                        <?php foreach ($data['subjects'] as $course): ?>
                            <option value="<?= e($course['name']) ?>">
                                <?= e($course['name']) ?>
                            </option>
                        <?php endforeach; ?>

                        <option value="other">
                            Other / General Inquiry
                        </option>

                    </select>

                </div>

                <div class="form-group">
                    <label for="message">Message</label>

                    <textarea id="message"
                              name="message"
                              placeholder="Tell us about your learning goals…"
                              required></textarea>
                </div>

                <button
                    type="button"
                    class="btn btn-primary"
                    style="width:100%;justify-content:center"
                    onclick="handleSubmit(this)"
                >
                    Send Message →
                </button>

            </div>

        </div>

    </div>

</section>
<?php
}



function render_contact_script(): void {
?>
<script>
function handleSubmit(btn) {
  btn.textContent = '✓ Sent!';
  btn.disabled = true;
  btn.style.background = '#2b7a78';

  setTimeout(() => {
    btn.textContent = 'Send Message →';
    btn.disabled = false;
    btn.style.background = '';
  }, 3000);
}
</script>
<?php
}


function getTutorsSection($tutors) {
    echo '<section class="container tutors-section">';
    echo '<h2 class="section-title">Our Tutors</h2>';
    echo '<div class="tutors-grid">';
    
    renderTutors($tutors);
    
    echo '</div>';
    echo '</section>';
}