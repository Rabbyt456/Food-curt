
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusEats – Skip the Lunch Queue</title>
    <link rel="stylesheet" href="landing.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts: Outfit -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

    <!-- ================= 1. NAVBAR ================= -->
    <header class="navbar">
        <div class="logo">
            <span class="logo-icon">🍽</span> CampusEats
        </div>

       

        <?php if (isset($_SESSION['user'])): ?>
            <a href="logout.php" class="sign-in-btn">Logout (<?php echo htmlspecialchars($_SESSION['user']); ?>)</a>
        <?php else: ?>



           <?php if (isset($_SESSION['user'])): ?>
        <a href="logout.php" class="sign-in-btn">Logout (<?php echo htmlspecialchars($_SESSION['user']); ?>)</a>
    <?php else: ?>
        <a href="login.php" class="sign-in-btn">Sign In</a>
    <?php endif; ?>





        <?php endif; ?>
    </header>

    <!-- ================= 2. HERO ================= -->
    <!-- ================= 2. HERO ================= -->
<section class="hero">
    <div class="hero-container">

        <!-- Left: Text -->
        <div class="hero-left">
            <div class="hero-badge">● MADE FOR STUDENTS</div>

            <h1 class="hero-title">
                Skip the<br>
                <span class="highlight">Lunch Queue.</span>
            </h1>

            <p class="hero-sub">
                Order your favorite campus meals ahead, skip the queue, and spend more time on what matters — classes, friends, and everything in between.
            </p>

            <div class="hero-buttons">
              <a href="home.php" class="btn-primary">Get Started →</a>
                <a href="menu.php" class="btn-outline">Explore CampusEats</a>
            </div>

            <!-- Feature Row -->
            <div class="hero-features">
                <div class="hero-feature">
                    <span class="feature-icon">⚡</span>
                    <div>
                        <strong>Fast Pickup</strong>
                        <p>Order ahead and avoid long queues. Ready in minutes.</p>
                    </div>
                </div>
                <div class="hero-feature">
                    <span class="feature-icon">🍱</span>
                    <div>
                        <strong>Multiple Kitchens</strong>
                        <p>Choose from different campus kitchens, all in one place.</p>
                    </div>
                </div>
                <div class="hero-feature">
                    <span class="feature-icon">🎓</span>
                    <div>
                        <strong>Made for Students</strong>
                        <p>Affordable meals built around your schedule and campus.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Image + Floating Badges -->
        <div class="hero-right">
            <div class="hero-image-wrapper">
               <img src="canteen.jpg" alt="Campus cafeteria" class="hero-image">

                <div class="float-badge badge-rating">
                    ⭐ <strong>4.9 Rating</strong>
                    <span>2,400+ students</span>
                </div>

                <div class="float-badge badge-time">
                    ⚡ <strong>Avg 12 min</strong>
                    <span>Pickup ready</span>
                </div>

                <div class="float-badge badge-student">
                    🎓 <strong>Student Friendly</strong>
                </div>
            </div>
        </div>

    </div>
</section>

    <!-- ================= 3. POPULAR CATEGORIES ================= -->
    <section class="section">
        <div class="section-header center">
            <span class="section-subtitle">BROWSE MENU</span>
            <h2 class="section-title">Popular Categories</h2>
        </div>

        <div class="category-grid">
            <?php
            $categories = [
                ['icon' => '🍔', 'name' => 'Burgers',      'count' => 12],
                ['icon' => '🍕', 'name' => 'Pizza',        'count' => 8],
                ['icon' => '🍚', 'name' => 'Rice & Meals', 'count' => 15],
                ['icon' => '🍟', 'name' => 'Snacks',       'count' => 20],
                ['icon' => '🥤', 'name' => 'Drinks',       'count' => 10],
                ['icon' => '🍰', 'name' => 'Desserts',     'count' => 6],
            ];
            foreach ($categories as $cat): ?>
                <div class="category-card">
                    <div class="category-img"><?php echo $cat['icon']; ?></div>
                    <h3><?php echo $cat['name']; ?></h3>
                    <p><?php echo $cat['count']; ?> items</p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 4. POPULAR ON CAMPUS ================= -->
    <section class="section">
        <div class="section-header">
            <div>
                <span class="section-subtitle">FEATURED</span>
                <h2 class="section-title">Popular on Campus</h2>
            </div>
            <a href="menu.php" class="view-all">View All →</a>
        </div>

        <div class="product-grid">
            <?php
            $products = [
                ['img' => 'burger.jpg',   'badge' => 'Best Seller', 'rating' => '4.8', 'name' => 'Classic Beef Burger',      'desc' => 'Juicy beef, fresh veggies, toasted bun',    'price' => '6.50'],
                ['img' => 'chicken.jpg',  'badge' => 'Campus Fav',  'rating' => '4.9', 'name' => 'Chicken Nasi Lemak',       'desc' => 'Fragrant rice with spicy chicken sambal',  'price' => '5.50'],
                ['img' => 'pizza.jpg',    'badge' => 'Popular',     'rating' => '4.7', 'name' => 'Margherita Pizza Slice',   'desc' => 'Classic cheese and tomato on crispy crust','price' => '3.00'],
                ['img' => 'salmon.jpg',   'badge' => 'Best Seller', 'rating' => '4.9', 'name' => 'Teriyaki Salmon Bowl',     'desc' => 'Fresh salmon with teriyaki glaze',         'price' => '8.50'],
                ['img' => 'cheeses.jpg',  'badge' => 'Campus Fav',  'rating' => '4.7', 'name' => 'Loaded Cheese Fries',      'desc' => 'Crispy fries loaded with melted cheese',   'price' => '4.50'],
                ['img' => 'mangotea.jpg', 'badge' => 'New',         'rating' => '4.6', 'name' => 'Mango Taro Bubble Tea',    'desc' => 'Sweet mango with chewy tapioca pearls',   'price' => '3.50'],
            ];
            foreach ($products as $p): ?>
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <span class="product-badge"><?php echo $p['badge']; ?></span>
                        <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['name']; ?>" class="product-image">
                        <span class="rating-pill">⭐ <?php echo $p['rating']; ?></span>
                    </div>
                    <div class="product-body">
                        <h3><?php echo $p['name']; ?></h3>
                        <p><?php echo $p['desc']; ?></p>
                        <div class="product-bottom">
                            <span class="price">$<?php echo $p['price']; ?></span>
                            <button class="add-btn">+ Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 5. WHY CHOOSE ================= -->
    <section class="section">
        <div class="section-header center">
            <span class="section-subtitle">WHY US</span>
            <h2 class="section-title">Why Choose CampusEats?</h2>
        </div>

        <div class="why-grid">
            <?php
            $why = [
                ['icon' => '⚡', 'title' => 'Skip the Queue',           'desc' => 'Order ahead and skip long lunch lines completely.'],
                ['icon' => '📅', 'title' => 'Scheduled Pickup',         'desc' => 'Choose a pickup time that fits your class schedule.'],
                ['icon' => '📡', 'title' => 'Real-Time Order Status',   'desc' => 'Track your order from kitchen to pickup counter.'],
                ['icon' => '💰', 'title' => 'Affordable Student Meals', 'desc' => 'Enjoy delicious food at prices made for students.'],
            ];
            foreach ($why as $w): ?>
                <div class="why-card">
                    <div class="why-icon"><?php echo $w['icon']; ?></div>
                    <h3><?php echo $w['title']; ?></h3>
                    <p><?php echo $w['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 6. HOW IT WORKS ================= -->
    <section class="section">
        <div class="section-header center">
            <span class="section-subtitle">SIMPLE PROCESS</span>
            <h2 class="section-title">How It Works</h2>
        </div>

        <div class="steps-wrapper">
            <div class="step-line"></div>
            <?php
            $steps = [
                ['num' => '01', 'icon' => 'fa-utensils',      'title' => 'Choose Your Meal',    'desc' => 'Browse our menu and pick your favorite dishes.'],
                ['num' => '02', 'icon' => 'fa-cart-shopping', 'title' => 'Place Your Order',    'desc' => 'Confirm your order and choose a pickup time.'],
                ['num' => '03', 'icon' => 'fa-bag-shopping',  'title' => 'Pick Up When Ready',  'desc' => 'Grab your food and get back to your day.'],
            ];
            foreach ($steps as $s): ?>
                <div class="step">
                    <div class="step-circle">
                        <span class="step-num"><?php echo $s['num']; ?></span>
                        <i class="fa-solid <?php echo $s['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $s['title']; ?></h3>
                    <p><?php echo $s['desc']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 7. TODAY'S SPECIAL ================= -->
    <section class="section">
        <div class="special-banner">
            <div class="special-left">
                <div class="special-badge">TODAY ONLY</div>
                <h2>Grilled Chicken <span class="highlight">Combo Meal</span></h2>
                <p>Grilled chicken, fresh salad, and a drink — all in one combo.</p>
                <div class="special-price">
                    <span class="new-price">$4.50</span>
                    <span class="old-price">$7.00</span>
                    <span class="save-pill">Save 36%</span>
                </div>
                <a href="menu.php" class="btn-primary">Order Today's Special →</a>
            </div>
            <div class="special-right">
                <img src="images/special-bowl.jpg" alt="Special Bowl" class="special-image">
                <div class="sold-badge">
                    🔥 58 sold today
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 8. TESTIMONIALS ================= -->
    <section class="testimonial-section">
        <div class="section-header center">
            <span class="section-subtitle">SOCIAL PROOF</span>
            <h2 class="section-title">What Students Say</h2>
        </div>

        <div class="testimonial-grid">
            <?php
            $testimonials = [
                ['stars' => '★★★★★', 'quote' => 'I order from CampusEats literally every day between lectures. The 10-minute pickup is so clutch when you only have a 20-minute break.', 'avatar' => '👩🏽‍💻', 'name' => 'Priya S.',  'dept' => 'BSc Computer Science'],
                ['stars' => '★★★★★', 'quote' => 'Team ordering with my study group changed everything. We all chip in, one person pays, split is automatic. Honestly genius.',       'avatar' => '👨🏿‍🎓', 'name' => 'Marcus T.', 'dept' => 'BEng Mechanical Engineering'],
                ['stars' => '★★★★★', 'quote' => 'The reward points add up fast. I got a free meal after just two weeks. This app genuinely saves me money.',                          'avatar' => '👩🏾‍🏫', 'name' => 'Aisha R.',  'dept' => 'BA Economics'],
                ['stars' => '★★★★☆', 'quote' => 'Finally a canteen app that looks good and actually works. The real-time status means I stop checking every 30 seconds.',              'avatar' => '👨🏻‍💻', 'name' => 'Jin W.',    'dept' => 'MSc Data Science'],
            ];
            foreach ($testimonials as $t): ?>
                <div class="testimonial-card">
                    <div class="stars"><?php echo $t['stars']; ?></div>
                    <p class="quote">"<?php echo $t['quote']; ?>"</p>
                    <div class="user-info">
                        <div class="user-avatar"><?php echo $t['avatar']; ?></div>
                        <div class="user-details">
                            <strong><?php echo $t['name']; ?></strong>
                            <span><?php echo $t['dept']; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ================= 9. FINAL CTA ================= -->
    <section class="cta-section">
        <div class="cta-box">
            <div class="cta-icon icon-tl">🍔</div>
            <div class="cta-icon icon-tr">🥤</div>
            <div class="cta-icon icon-br">🍕</div>

            <div class="cta-content">
                <div class="cta-badge">
                    <span class="cta-dot"></span> JOIN 2,400+ STUDENTS
                </div>
                <h2 class="cta-title">Ready to Skip<br>the Queue?</h2>
                <p class="cta-sub">
                    Order your favorite campus meals before you arrive. Get 100 welcome points when you sign up — free.
                </p>
                <div class="cta-buttons">
                    <a href="menu.php" class="cta-btn-primary">Order Now →</a>
                    <a href="login.php" class="cta-btn-secondary">Sign In Free</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= 10. FOOTER ================= -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">

                <div class="footer-col footer-brand">
                    <div class="footer-logo">
                        <div class="footer-logo-icon">🍽</div>
                        <span class="logo-campus">Campus</span><span class="logo-eats">Eats</span>
                    </div>
                    <p class="footer-desc">
                        The smartest way to eat on campus. Order ahead, skip the queue, and spend more time doing what you love.
                    </p>
                    <div class="social-icons">
                        <a href="#" class="social-icon">X</a>
                        <a href="#" class="social-icon">in</a>
                        <a href="#" class="social-icon">ig</a>
                        <a href="#" class="social-icon">yf</a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4 class="footer-heading">QUICK LINKS</h4>
                    <a href="landing.php" class="footer-link">Home</a>
                    <a href="menu.php" class="footer-link">All Kitchens</a>
                    <a href="#" class="footer-link">Team Ordering</a>
                    <a href="#" class="footer-link">Order History</a>
                    <a href="#" class="footer-link">Rewards</a>
                    <a href="#" class="footer-link">About Us</a>
                </div>

                <div class="footer-col">
                    <h4 class="footer-heading">CATEGORIES</h4>
                    <a href="menu.php" class="footer-link">Burgers</a>
                    <a href="menu.php" class="footer-link">Pizza</a>
                    <a href="menu.php" class="footer-link">Rice & Meals</a>
                    <a href="menu.php" class="footer-link">Snacks</a>
                    <a href="menu.php" class="footer-link">Drinks</a>
                    <a href="menu.php" class="footer-link">Desserts</a>
                </div>

                <div class="footer-col">
                    <h4 class="footer-heading">CONTACT</h4>
                    <div class="contact-item">
                        <span class="contact-icon">📍</span>
                        <span class="contact-text">Campus Food Hub, Block D, Student Centre</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">✉️</span>
                        <span class="contact-text">hello@campuseats.edu</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📞</span>
                        <span class="contact-text">+1 (555) 012-3456</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">🕒</span>
                        <span class="contact-text">Mon–Fri 7:30am – 8:00pm</span>
                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                <p class="footer-copy">© <?php echo date('Y'); ?> CampusEats · Made for students, by students.</p>
                <div class="footer-legal">
                    <a href="#" class="footer-link-small">Privacy Policy</a>
                    <a href="#" class="footer-link-small">Terms of Service</a>
                    <a href="#" class="footer-link-small">Cookie Settings</a>
                    <a href="#" class="footer-link-small">Support</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
