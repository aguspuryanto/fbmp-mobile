<?php
function format_rupiah($angka){
  $rupiah=number_format($angka,0,',','.');
  return $rupiah;
}

function getUploadPathProduct($product = []) {
  $baseUrl = base_url('uploads/');
  if(isset($product['created_at']) && !empty($product['created_at'])) {
    $created_at = $product['created_at'];
    $baseUrl .= date('Y', strtotime($created_at)) . '/' . date('m', strtotime($created_at)) . '/';
  }

  return $baseUrl;
}

function getCurrency($price) {
  return 'Rp. ' . format_rupiah($price);
}

function getHeaderSeo()
{
    return '<!-- Header SEO -->
    <link rel="preload" as="image" href="' . base_url() . 'wp-content/uploads/2018/04/logo-blog.png" fetchpriority="high">
    <meta name="description" content="Dapatkan panduan praktis untuk mengembangkan website, toko online, dan blog Anda. Raih kesuksesan online bersama Niagahoster! 1" />
    <link rel="canonical" href="' . base_url() . '" />
    <link rel="next" href="' . base_url() . '/page/2/" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Niagahoster Blog" />
    <meta property="og:description" content="Dapatkan panduan praktis untuk mengembangkan website, toko online, dan blog Anda. Raih kesuksesan online bersama Niagahoster! 1" />
    <meta property="og:url" content="' . base_url() . '" />
    <meta property="og:site_name" content="Niagahoster Blog" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"CollectionPage","@id":"' . base_url() . '","url":"' . base_url() . '","name":"Niagahoster Blog - Tutorial Website, Bisnis Online, dan Blog","isPartOf":{"@id":"' . base_url() . '#website"},"about":{"@id":"' . base_url() . '#organization"},"description":"Dapatkan panduan praktis untuk mengembangkan website, toko online, dan blog Anda. Raih kesuksesan online bersama Niagahoster! 1","breadcrumb":{"@id":"' . base_url() . '#breadcrumb"},"inLanguage":"id"},{"@type":"BreadcrumbList","@id":"' . base_url() . '#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"' . base_url() . '#website","url":"' . base_url() . '","name":"Niagahoster Blog","description":"Tutorial Website, Hosting dan Bisnis Online","publisher":{"@id":"' . base_url() . '#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"' . base_url() . '?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"id"},{"@type":"Organization","@id":"' . base_url() . '#organization","name":"Niagahoster","url":"' . base_url() . '","logo":{"@type":"ImageObject","inLanguage":"id","@id":"' . base_url() . '#/schema/logo/image/","url":"' . base_url() . '/wp-content/uploads/2018/04/logo-blog.png","contentUrl":"' . base_url() . '/wp-content/uploads/2018/04/logo-blog.png","width":606,"height":67,"caption":"Niagahoster"},"image":{"@id":"' . base_url() . '#/schema/logo/image/"},"sameAs":["https://www.facebook.com/Niagahoster/","https://x.com/niagahoster","https://www.instagram.com/niagahoster.id/","https://www.linkedin.com/company/niagahoster","https://www.youtube.com/channel/UCEj5t40X7DDIptSCsm4cryw"]}]}</script>
    <meta name="google-site-verification" content="ZOn9xV9B_Og4icr8w_EyV15wHGe9ELUXVcxf26HN5S0" />
    <meta property="og:video" content="https://www.youtube.com/embed/7M4KtvvilVU" />
    <meta property="og:video:type" content="text/html" />
    <meta property="og:video:duration" content="140" />
    <meta property="og:video:width" content="480" />
    <meta property="og:video:height" content="270" />
    <meta property="ya:ovs:adult" content="false" />
    <meta property="ya:ovs:allow_embed" content="true" />
    <!-- / Header SEO. -->';

    // return view('login');
}

function getGoogleTagManager($id = "GTM-NQKR456") {
    return "<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','".$id."');</script>
    <!-- End Google Tag Manager -->";
}

function getGoogleAnalytics($id = "UA-XXXXX-Y") {
    return "<!-- Google Analytics -->
    <script>window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', '".$id."', 'auto');ga('send', 'pageview');</script>
    <script async src=\"https://www.google-analytics.com/analytics.js\"></script>
    <!-- End Google Analytics -->";
}

function getFacebookPixel($id = "123456789012345") {
    return "<!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '".$id."');
    fbq('track', 'PageView');
    </script>
    <noscript>
    <img height=\"1\" width=\"1\" style=\"display:none\"
    src=\"https://www.facebook.com/tr?id=".$id."&ev=PageView&noscript=1\" />
    </noscript>
    <!-- End Facebook Pixel Code -->";
}

function getGoogleAdsense($google_ad_client = "ca-pub-123456789012345") {
    return "<!-- Google Adsense -->
    <script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: \".$google_ad_client.\",
    enable_page_level_ads: true
    });
    </script>
    <!-- End Google Adsense -->";
}

function getHomePageIcon() {
    // return '<link rel="icon" href="favicon.png" sizes="32x32" />
    // <link rel="icon" href="favicon.png" sizes="192x192" />
    // <link rel="apple-touch-icon" href="favicon.png" />
    // <meta name="msapplication-TileImage" content="favicon.png" />';

    return '<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">';
}

function getManifest() {
    // return '<link rel="manifest" href="site.webmanifest" />';
    $meta = '<meta name="theme-color" content="#f45">';
    $manifest = '<link rel="manifest" href="manifest.json" />';

    return $meta . $manifest;
}

function getServiceWorker() {
    // return '<script src="sw.js"></script>';
    return "<script>
        var BASE_URL = '" . base_url() . "';
        document.addEventListener('DOMContentLoaded', init, false);
        function init() {
            if ('serviceWorker' in navigator && navigator.onLine) {
                navigator.serviceWorker.register( BASE_URL + 'service-worker.js')
                .then((reg) => {
                    console.log('Registrasi service worker Berhasil', reg);
                }, (err) => {
                    console.error('Registrasi service worker Gagal', err);
                });
            }
        }
    </script>";
}
?>