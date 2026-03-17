

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name='robots' content='max-image-preview:large' />
    <title><?php echo $pagetitle; ?></title>
    <!-- <link rel="alternate" type="application/rss+xml" title="ispyn &raquo; Feed" href="index.php/feed/index.html" /> -->
    <!-- <link rel="alternate" type="application/rss+xml" title="ispyn &raquo; Comments Feed"
        href="index.php/comments/feed/index.html" /> -->
    <!-- <style id='wp-block-library-inline-css'>
        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px;
            --wp-block-synced-color: #7a00df;
            --wp-block-synced-color--rgb: 122, 0, 223;
            --wp-bound-block-color: #9747ff
        }

        @media (min-resolution:192dpi) {
            :root {
                --wp-admin-border-width-focus: 1.5px
            }
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131
        }

        :root .has-very-light-gray-color {
            color: #eee
        }

        :root .has-very-dark-gray-color {
            color: #313131
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3)
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec)
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671)
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59)
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf)
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc)
        }

        .has-regular-font-size {
            font-size: 1em
        }

        .has-larger-font-size {
            font-size: 2.625em
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal)
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge)
        }

        .has-text-align-center {
            text-align: center
        }

        .has-text-align-left {
            text-align: left
        }

        .has-text-align-right {
            text-align: right
        }

        #end-resizable-editor-section {
            display: none
        }

        .aligncenter {
            clear: both
        }

        .items-justified-left {
            justify-content: flex-start
        }

        .items-justified-center {
            justify-content: center
        }

        .items-justified-right {
            justify-content: flex-end
        }

        .items-justified-space-between {
            justify-content: space-between
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            clip: auto !important;
            -webkit-clip-path: none;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        html :where(.has-border-color) {
            border-style: solid
        }

        html :where([style*=border-top-color]) {
            border-top-style: solid
        }

        html :where([style*=border-right-color]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-color]) {
            border-left-style: solid
        }

        html :where([style*=border-width]) {
            border-style: solid
        }

        html :where([style*=border-top-width]) {
            border-top-style: solid
        }

        html :where([style*=border-right-width]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-width]) {
            border-left-style: solid
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        :where(figure) {
            margin: 0 0 1em
        }

        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
        }

        @media screen and (max-width:600px) {
            html :where(.is-position-sticky) {
                --wp-admin--admin-bar--position-offset: 0px
            }
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--base: #ffffff;
            --wp--preset--color--contrast: #000000;
            --wp--preset--color--primary: #9DFF20;
            --wp--preset--color--secondary: #345C00;
            --wp--preset--color--tertiary: #F6F6F6;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.227), 1rem);
            --wp--preset--font-size--medium: clamp(1rem, 1rem + ((1vw - 0.2rem) * 0.227), 1.125rem);
            --wp--preset--font-size--large: clamp(1.75rem, 1.75rem + ((1vw - 0.2rem) * 0.227), 1.875rem);
            --wp--preset--font-size--x-large: 2.25rem;
            --wp--preset--font-size--xx-large: clamp(4rem, 4rem + ((1vw - 0.2rem) * 10.909), 10rem);
            --wp--preset--font-family--dm-sans: "DM Sans", sans-serif;
            --wp--preset--font-family--ibm-plex-mono: 'IBM Plex Mono', monospace;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--system-font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            --wp--preset--font-family--source-serif-pro: "Source Serif Pro", serif;
            --wp--preset--spacing--30: clamp(1.5rem, 5vw, 2rem);
            --wp--preset--spacing--40: clamp(1.8rem, 1.8rem + ((1vw - 0.48rem) * 2.885), 3rem);
            --wp--preset--spacing--50: clamp(2.5rem, 8vw, 4.5rem);
            --wp--preset--spacing--60: clamp(3.75rem, 10vw, 7rem);
            --wp--preset--spacing--70: clamp(5rem, 5.25rem + ((1vw - 0.48rem) * 9.096), 8rem);
            --wp--preset--spacing--80: clamp(7rem, 14vw, 11rem);
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(body .is-layout-flow)> :first-child:first-child {
            margin-block-start: 0;
        }

        :where(body .is-layout-flow)> :last-child:last-child {
            margin-block-end: 0;
        }

        :where(body .is-layout-flow)>* {
            margin-block-start: 1.5rem;
            margin-block-end: 0;
        }

        :where(body .is-layout-constrained)> :first-child:first-child {
            margin-block-start: 0;
        }

        :where(body .is-layout-constrained)> :last-child:last-child {
            margin-block-end: 0;
        }

        :where(body .is-layout-constrained)>* {
            margin-block-start: 1.5rem;
            margin-block-end: 0;
        }

        :where(body .is-layout-flex) {
            gap: 1.5rem;
        }

        :where(body .is-layout-grid) {
            gap: 1.5rem;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style> -->
    <link rel='stylesheet' id='oxygen-css' href='../assets/css/oxygenef85.css' />
    <script src="../assets/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <!-- <link rel="https://api.w.org/" href="index.php/wp-json/index.html" /> -->
    <link rel="alternate" type="application/json" href="index.php/wp-json/wp/v2/pages/47.json" />
    <!-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="alternate" type="application/json+oembed"
        href="index.php/wp-json/oembed/1.0/embeda22b.json?url=https%3A%2F%2Fispyn.co.id%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="index.php/wp-json/oembed/1.0/embed34a5?url=https%3A%2F%2Fispyn.co.id%2F&amp;format=xml" /> -->

    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-touch-icon.png">
    <link rel="mask-icon" href="../assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- <meta name="msapplication-config" content="/wp-content/uploads/fbrfg/browserconfig.xml"> -->

    <!-- <style id='wp-fonts-local'>
        @font-face {
            font-family: "DM Sans";
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/dm-sans/DMSans-Regular.html') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: "DM Sans";
            font-style: italic;
            font-weight: 400;
            font-display: fallback;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/dm-sans/DMSans-Regular-Italic.html') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: "DM Sans";
            font-style: normal;
            font-weight: 700;
            font-display: fallback;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/dm-sans/DMSans-Bold.html') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: "DM Sans";
            font-style: italic;
            font-weight: 700;
            font-display: fallback;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/dm-sans/DMSans-Bold-Italic.html') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: "IBM Plex Mono";
            font-style: normal;
            font-weight: 300;
            font-display: block;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/ibm-plex-mono/IBMPlexMono-Light.html') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: "IBM Plex Mono";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/ibm-plex-mono/IBMPlexMono-Regular.html') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: "IBM Plex Mono";
            font-style: italic;
            font-weight: 400;
            font-display: block;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/ibm-plex-mono/IBMPlexMono-Italic.html') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: "IBM Plex Mono";
            font-style: normal;
            font-weight: 700;
            font-display: block;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/ibm-plex-mono/IBMPlexMono-Bold.html') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 200 900;
            font-display: fallback;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/inter/Inter-VariableFont_slnt%2cwght.html') format('truetype');
            font-stretch: normal;
        }

        @font-face {
            font-family: "Source Serif Pro";
            font-style: normal;
            font-weight: 200 900;
            font-display: fallback;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/source-serif-pro/SourceSerif4Variable-Roman.ttf.html') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: "Source Serif Pro";
            font-style: italic;
            font-weight: 200 900;
            font-display: fallback;
            src: url('wp-content/themes/oxygen-is-not-a-theme/assets/fonts/source-serif-pro/SourceSerif4Variable-Italic.ttf.html') format('woff2');
            font-stretch: normal;
        }
    </style> -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900|Poppins:100,200,300,400,500,600,700,800,900|Array:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
    <link rel='stylesheet' href='../assets/css/main.css' />
    <link rel='stylesheet' href='../assets/css/universal.css' />

