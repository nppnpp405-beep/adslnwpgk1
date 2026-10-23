<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$site = ADB_SITE_URL;

$jsonLd = <<<JSON
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "{$site}/#organization",
      "name": "AdsBlack Agency",
      "url": "{$site}",
      "logo": {
        "@type": "ImageObject",
        "url": "{$site}/favicon.png"
      },
      "image": {
        "@type": "ImageObject",
        "url": "{$site}/assets/images/youtube-ads-hero.webp"
      },
      "sameAs": [
        "https://www.facebook.com/profile.php?id=61588233403271",
        "https://www.youtube.com/@khruthwy"
      ],
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "contactType": "customer support",
          "url": "{$site}/contact.html",
          "availableLanguage": ["th"]
        }
      ],
      "knowsAbout": ["YouTube Ads", "SEO YouTube", "Google Ads", "Facebook Ads", "TikTok Ads", "HTML SEO", "เครื่องมือการตลาดออนไลน์"]
    },
    {
      "@type": "WebSite",
      "@id": "{$site}/#website",
      "url": "{$site}",
      "name": "AdsBlack Agency",
      "inLanguage": "th-TH",
      "publisher": { "@id": "{$site}/#organization" }
    },
    {
      "@type": "WebPage",
      "@id": "{$site}/#webpage",
      "url": "{$site}/",
      "name": "YouTube Ads สายเทา | แอดสายเทา และ SEO YouTube | AdsBlack Agency",
      "headline": "YouTube Ads สายเทา | แอดสายเทา และ SEO YouTube | AdsBlack Agency",
      "description": "AdsBlack Agency ศูนย์รวม YouTube Ads สายเทา และแอดสายเทา พร้อม SEO YouTube การวางแผนแคมเปญ ครีเอทีฟ การวัดผล และเครื่องมือสำหรับนักโฆษณา",
      "isPartOf": { "@id": "{$site}/#website" },
      "about": { "@id": "{$site}/#organization" },
      "primaryImageOfPage": {
        "@type": "ImageObject",
        "url": "{$site}/assets/images/youtube-ads-hero.webp"
      },
      "inLanguage": "th-TH"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "YouTube Ads สายเทา คืออะไร?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "YouTube Ads สายเทา เป็นคำที่ใช้เรียกการวางแผนโฆษณา YouTube สำหรับตลาดแข่งขันสูง โดย AdsBlack Agency เน้นโครงสร้างแคมเปญ ครีเอทีฟ หน้าเป้าหมาย การวัดผล และการตรวจข้อกำหนดของแพลตฟอร์ม"
          }
        },
        {
          "@type": "Question",
          "name": "แอดสายเทา บน AdsBlack Agency ครอบคลุมอะไรบ้าง?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "แอดสายเทาบน AdsBlack Agency ครอบคลุมการวางแผนโฆษณา ครีเอทีฟ Tracking การวัดผล SEO YouTube และเครื่องมือสนับสนุนสำหรับนักโฆษณา"
          }
        },
        {
          "@type": "Question",
          "name": "Recovery เป็น Backdoor หรือไม่?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ไม่ใช่ Recovery ต้องใช้ Emergency Code ที่ถูก Hash และทำได้เฉพาะงานกู้ระบบ เช่น Reset Password, Repair Schema และ Restore Backup"
          }
        }
      ]
    }
  ]
}
</script>
JSON;

$page = [
    'title' => 'YouTube Ads สายเทา | แอดสายเทา และ SEO YouTube | AdsBlack Agency',
    'description' => 'AdsBlack Agency ศูนย์รวม YouTube Ads สายเทา และแอดสายเทา พร้อม SEO YouTube การวางแผนแคมเปญ ครีเอทีฟ การวัดผล และเครื่องมือสำหรับนักโฆษณา',
    'canonical' => $site . '/',
    'active' => 'index.php',
    'head' => '<link rel="preload" as="image" href="' . adb_asset('assets/images/youtube-ads-hero.webp') . '" fetchpriority="high">' . "\n    " . $jsonLd,
];

require __DIR__ . '/includes/header.php';
?>
    <main id="main">
        <section class="adb-hero">
            <div class="adb-container adb-hero-grid">
                <div class="adb-hero-copy adb-reveal">
                    <span class="adb-eyebrow">ADSBLACK AGENCY • YOUTUBE FIRST</span>
                    <h1 class="adb-title">YouTube Ads สายเทา<br><span class="accent">แอดสายเทา และ SEO YouTube</span></h1>
                    <p class="adb-lead">วางโครงสร้างโฆษณา YouTube การค้นหาบน YouTube การวัดผล และงานแอดสายเทาแบบเข้าใจระบบจริง พร้อม SEO YouTube และคลังเครื่องมือสำหรับนักโฆษณาและนักเรียน AdsBlack</p>
                    <div class="adb-actions">
                        <a class="adb-btn adb-btn-primary" href="youtube-ads.html">YouTube Ads สายเทา</a>
                        <a class="adb-btn adb-btn-secondary" href="tools/">เปิด AdsBlack Tools</a>
                    </div>
                    <div class="adb-kicker-row">
                        <span class="adb-chip">SEO YouTube AI</span>
                        <span class="adb-chip">Tools แยกเป็นโมดูล</span>
                        <span class="adb-chip">MySQL ฐานเดียวได้ครับ</span>
                    </div>
                </div>
                <div class="adb-hero-media adb-reveal">
                    <div class="adb-hero-frame"><img src="<?= adb_e(adb_asset('assets/images/youtube-ads-hero.webp')) ?>" alt="YouTube Ads สายเทา และแอดสายเทา โดย AdsBlack Agency" fetchpriority="high" decoding="async"></div>
                    <div class="adb-floating-card">
                        <strong>Learn → Work → Tools</strong>
                        <span>เรียนที่ AdsBlack.com ใช้งานและรับบริการที่ AdsBlack.agency</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="adb-section-sm adb-band">
            <div class="adb-container">
                <div class="adb-metrics adb-reveal">
                    <div class="adb-metric"><strong>Shared</strong><span>Header + Footer กลาง</span></div>
                    <div class="adb-metric"><strong>PHP 8+</strong><span>ระบบและเครื่องมือ</span></div>
                    <div class="adb-metric"><strong>1 DB</strong><span>บริหารข้อมูลรวม</span></div>
                    <div class="adb-metric"><strong>Recovery</strong><span>กู้ระบบและรหัส</span></div>
                </div>
            </div>
        </section>

        <section class="adb-section">
            <div class="adb-container">
                <div class="adb-section-head adb-reveal">
                    <span class="adb-eyebrow">CORE POSITIONING</span>
                    <h2 class="adb-h2">YouTube Ads สายเทา และแอดสายเทา คือแกนหลักของ AdsBlack Agency</h2>
                    <p class="adb-lead">ให้ YouTube Ads สายเทา และแอดสายเทาเป็นหัวข้อหลัก แล้วเชื่อมงานโฆษณา การสอน และเครื่องมือเข้าด้วยกัน</p>
                </div>
                <div class="adb-grid adb-grid-3">
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">YT</span>
                        <h3 class="adb-h3">YouTube Ads สายเทา</h3>
                        <p>วางโครงสร้างแคมเปญ กลุ่มเป้าหมาย ครีเอทีฟ หน้าเป้าหมาย และการวัดผล</p>
                        <a class="adb-card-link" href="youtube-ads.html">ดูรายละเอียด</a>
                    </article>
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">SEO</span>
                        <h3 class="adb-h3">SEO YouTube</h3>
                        <p>จัดหัวข้อ Title, Description, Tags, Playlist และเส้นทางค้นพบวิดีโอ</p>
                        <a class="adb-card-link" href="youtube-seo.html">ดูรายละเอียด</a>
                    </article>
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">AB</span>
                        <h3 class="adb-h3">แอดสายเทา</h3>
                        <p>รวมแนวคิดแอดสายเทา ครีเอทีฟ Tracking และการบริหารความเสี่ยง โดยเชื่อมหลักสูตรเต็มไป AdsBlack.com</p>
                        <a class="adb-card-link" href="ads-course.html">ดูรายละเอียด</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="adb-section adb-band">
            <div class="adb-container">
                <div class="adb-section-head center adb-reveal">
                    <span class="adb-eyebrow">ADSBLACK TOOLS</span>
                    <h2 class="adb-h2">เครื่องมือที่ใช้งานจริง</h2>
                    <p class="adb-lead">เครื่องมือฝั่งเบราว์เซอร์ไม่เก็บข้อมูลลับ ส่วน Short URL และเว็บฝากไฟล์ใช้ฐานข้อมูลกลางเดียวกัน</p>
                </div>
                <div class="adb-grid adb-grid-3">
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">RAND</span>
                        <h3 class="adb-h3">โปรแกรมสุ่มข้อมูลไทย</h3>
                        <p>สุ่มชื่อ ที่อยู่ อีเมล Username Password PIN UUID ออเดอร์ และคู่สีสำหรับทดสอบระบบ</p>
                        <a class="adb-card-link" href="tools/random-generator/">เปิดเครื่องมือ</a>
                    </article>
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">2FA</span>
                        <h3 class="adb-h3">2FA / TOTP</h3>
                        <p>สร้างรหัสในเบราว์เซอร์ ไม่บันทึก Secret Key</p>
                        <a class="adb-card-link" href="tools/2fa/">ดูรายละเอียด</a>
                    </article>
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">UTM</span>
                        <h3 class="adb-h3">UTM Builder</h3>
                        <p>สร้าง Campaign URL และส่งต่อไป Short URL</p>
                        <a class="adb-card-link" href="tools/utm/">ดูรายละเอียด</a>
                    </article>
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">URL</span>
                        <h3 class="adb-h3">Short URL</h3>
                        <p>ตั้ง Slug, Password, Expire และนับคลิก</p>
                        <a class="adb-card-link" href="tools/short-url/">ดูรายละเอียด</a>
                    </article>
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">FILE</span>
                        <h3 class="adb-h3">ฝากไฟล์</h3>
                        <p>ตั้งรหัสผ่าน วันหมดอายุและจำนวนดาวน์โหลด</p>
                        <a class="adb-card-link" href="tools/file/">ดูรายละเอียด</a>
                    </article>
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">YT</span>
                        <h3 class="adb-h3">YouTube Tools</h3>
                        <p>Title, Description, Tags และ Timestamp</p>
                        <a class="adb-card-link" href="tools/youtube/">ดูรายละเอียด</a>
                    </article>
                    <article class="adb-card adb-reveal">
                        <span class="adb-card-icon">CAL</span>
                        <h3 class="adb-h3">Ads Calculator</h3>
                        <p>คำนวณ CPM, CPC, CPA, ROAS และ ROI</p>
                        <a class="adb-card-link" href="tools/calculator/">ดูรายละเอียด</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="adb-section">
            <div class="adb-container">
                <div class="adb-cta adb-reveal">
                    <span class="adb-eyebrow">SUPPORT ADSBLACK.COM</span>
                    <h2 class="adb-h2">ต้องการเรียนระบบแบบเต็ม?</h2>
                    <p class="adb-lead">AdsBlack.com เป็นศูนย์กลางหลักสูตรและองค์ความรู้ ส่วน AdsBlack.agency เป็นฝั่ง YouTube งานโฆษณา และเครื่องมือสนับสนุน</p>
                    <div class="adb-actions">
                        <a class="adb-btn adb-btn-primary" href="https://www.adsblack.com/" target="_blank" rel="noopener">ไปที่ AdsBlack.com</a>
                        <a class="adb-btn adb-btn-secondary" href="contact.html">ติดต่อเรื่องงานโฆษณา</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="adb-section adb-band">
            <div class="adb-narrow">
                <div class="adb-section-head center">
                    <span class="adb-eyebrow">FAQ</span>
                    <h2 class="adb-h2">คำถามสำคัญ</h2>
                </div>
                <div class="adb-faq">
                    <details>
                        <summary>YouTube Ads สายเทา คืออะไร?</summary>
                        <p>YouTube Ads สายเทา เป็นคำที่ใช้เรียกการวางแผนโฆษณา YouTube สำหรับตลาดแข่งขันสูง โดย AdsBlack Agency เน้นโครงสร้างแคมเปญ ครีเอทีฟ หน้าเป้าหมาย การวัดผล และการตรวจข้อกำหนดของแพลตฟอร์ม</p>
                    </details>
                    <details>
                        <summary>แอดสายเทา บน AdsBlack Agency ครอบคลุมอะไรบ้าง?</summary>
                        <p>แอดสายเทาบน AdsBlack Agency ครอบคลุมการวางแผนโฆษณา ครีเอทีฟ Tracking การวัดผล SEO YouTube และเครื่องมือสนับสนุนสำหรับนักโฆษณา</p>
                    </details>
                    <details>
                        <summary>Recovery เป็น Backdoor หรือไม่?</summary>
                        <p>ไม่ใช่ Recovery ต้องใช้ Emergency Code ที่ถูก Hash และทำได้เฉพาะงานกู้ระบบ เช่น Reset Password, Repair Schema และ Restore Backup</p>
                    </details>
                </div>
            </div>
        </section>
    </main>
<?php require __DIR__ . '/includes/footer.php';
