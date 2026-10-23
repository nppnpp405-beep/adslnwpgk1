<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

// ===== ตั้งค่าหน้านี้ =====
// 1) คัดลอกไฟล์นี้เป็นชื่อหน้าใหม่ เช่น youtube-ads.php
// 2) แก้ค่า title / description / canonical / active ให้ตรงกับไฟล์จริง
$page = [
    'title' => 'ชื่อหน้าของคุณ | ' . ADB_SITE_NAME,
    'description' => 'คำอธิบายสั้น ๆ ของหน้านี้ (ใช้กับ SEO และการแชร์ลิงก์)',
    'keywords' => 'คีย์เวิร์ดของหน้านี้',
    'canonical' => ADB_SITE_URL . '/ชื่อไฟล์.php',
    'active' => 'ชื่อไฟล์.php',
];

require __DIR__ . '/includes/header.php';
?>

<main id="main">
    <div class="adb-container">
        <nav class="adb-breadcrumb" aria-label="breadcrumb">
            <a href="index.php">หน้าแรก</a>
            <span>ชื่อหน้าของคุณ</span>
        </nav>
    </div>

    <section class="adb-page-hero">
        <div class="adb-container adb-page-hero-grid">
            <div class="adb-reveal">
                <span class="adb-eyebrow">หมวดหมู่</span>
                <h1 class="adb-title">ชื่อหน้าของคุณ</h1>
                <p class="adb-lead">คำโปรย 1–2 ประโยค อธิบายว่าหน้านี้ทำอะไร ให้ใคร และได้อะไร</p>
                <div class="adb-actions">
                    <a class="adb-btn adb-btn-primary" href="contact.html">ติดต่อประเมินงาน</a>
                    <a class="adb-btn adb-btn-secondary" href="https://www.adsblack.com/" target="_blank" rel="noopener">เรียนที่ AdsBlack.com</a>
                </div>
            </div>
            <div class="adb-card adb-reveal">
                <h3 class="adb-h3">สรุปสั้น</h3>
                <ul class="adb-list">
                    <li>จุดเด่นข้อที่ 1</li>
                    <li>จุดเด่นข้อที่ 2</li>
                    <li>จุดเด่นข้อที่ 3</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="adb-section">
        <div class="adb-container">
            <div class="adb-prose adb-reveal">
                <h2>หัวข้อเนื้อหาหลัก</h2>
                <p>เนื้อหาของหน้านี้ ใส่กี่ย่อหน้า กี่หัวข้อก็ได้ แบ่งเป็นช่วง ๆ ด้วย .adb-section</p>
                <ul class="adb-list">
                    <li>หัวข้อย่อยที่ 1</li>
                    <li>หัวข้อย่อยที่ 2</li>
                    <li>หัวข้อย่อยที่ 3</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="adb-section adb-band">
        <div class="adb-container">
            <div class="adb-grid adb-grid-3">
                <article class="adb-card adb-reveal">
                    <span class="adb-card-icon">01</span>
                    <h3 class="adb-h3">หัวข้อการ์ด 1</h3>
                    <p>คำอธิบายสั้น ๆ ของการ์ดใบนี้</p>
                </article>
                <article class="adb-card adb-reveal">
                    <span class="adb-card-icon">02</span>
                    <h3 class="adb-h3">หัวข้อการ์ด 2</h3>
                    <p>คำอธิบายสั้น ๆ ของการ์ดใบนี้</p>
                </article>
                <article class="adb-card adb-reveal">
                    <span class="adb-card-icon">03</span>
                    <h3 class="adb-h3">หัวข้อการ์ด 3</h3>
                    <p>คำอธิบายสั้น ๆ ของการ์ดใบนี้</p>
                </article>
            </div>
        </div>
    </section>

    <section class="adb-section">
        <div class="adb-container">
            <div class="adb-cta adb-reveal">
                <span class="adb-eyebrow">CTA</span>
                <h2 class="adb-h2">พร้อมเริ่มงานแล้วหรือยัง?</h2>
                <p class="adb-lead">ทักมาคุยเรื่องโฆษณาได้เลย ทีมงานประเมินงานให้ฟรี</p>
                <div class="adb-actions">
                    <a class="adb-btn adb-btn-primary" href="contact.html">ติดต่อประเมินงาน</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php';
