<?php

/* page.html.twig */
class __TwigTemplate_123b02f159f163c16f9746e43f46aa5d6b16a60465446d5704264a455adc393d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["assetsUrl"] = $this->getAttribute($this->getAttribute(($context["editorData"] ?? null), "urls", array()), "assets", array());
        // line 2
        ob_start();
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["assetsUrl"] ?? null), "html", null, true);
        echo "/editor/css/editor.css?ver=";
        echo twig_escape_filter($this->env, ($context["editorVersion"] ?? null), "html", null, true);
        echo "\">
        <style id=\"brz-ed-page-curtain-style\">@keyframes spin{100%{transform:rotate(360deg)}}.brz-ed-page-curtain{position:fixed;left:0;right:0;top:0;bottom:0;background-color:#141923;z-index:1000}.brz-ed-page-spinner,.brz-ed-page-spinner:after,.brz-ed-page-spinner:before{content:'';position:absolute;top:50%;left:50%;border:3px solid transparent;border-radius:50%;animation:spin 1s linear infinite}.brz-ed-page-spinner{width:100px;height:100px;margin:-50px 0 0 -50px;border-top-color:#22b0da;animation-duration:2.5s}.brz-ed-page-spinner:after{width:80px;height:80px;margin:-40px 0 0 -40px;border-right-color:#ed2164;animation-duration:2s}.brz-ed-page-spinner:before{width:60px;height:60px;margin:-30px 0 0 -30px;border-bottom-color:#fff}</style>
        <style id=\"brz-ed-page-blocked-style\">.brz-ed-page-blocked{display:flex;position:fixed;left:0;right:0;top:0;bottom:0;background-color:#141923;z-index:1070;align-items:center;justify-content:center;flex-wrap:wrap;flex-direction:column;text-align:center;font-family:pn,\"Open Sans\",Arial,sans-serif;padding:10px}.brz-ed-page-blocked .brz-icon-svg{color:rgba(255,255,255,.2);font-size:72px;margin-bottom:39px}.brz-ed-page-blocked .brz-h1{color:#dbdbde;font-size:21px;margin-bottom:26px}.brz-ed-page-blocked .brz-p{color:#929497;font-size:15px;line-height:24px}@media (min-width:992px){.brz-ed-page-blocked .brz-p{max-width:400px}}</style>
    </head>
    <body class=\"brz brz-ed\" style=\"margin: 0;\">
        <script>
          (function() {
            var currentBrowser = detectBrowser(window.navigator.userAgent);
            if (!browserIsSupported(currentBrowser)) {
              stopExecution();
              showUnsupportedBrowserOverlay(currentBrowser);
            }

            function detectBrowser(ua) {
              if (ua.indexOf(\"Opera\") !== -1 || ua.indexOf(\"OPR\") !== -1) {
                return \"Opera\";
              } else if (ua.indexOf(\"MSIE\") !== -1 || !!document.documentMode === true) {
                return \"IE\";
              } else if (ua.indexOf(\"Edge\") !== -1) {
                return \"Edge\";
              } else if (ua.indexOf(\"Chrome\") !== -1) {
                return \"Chrome\";
              } else if (ua.indexOf(\"Safari\") !== -1) {
                return \"Safari\";
              } else if (ua.indexOf(\"Firefox\") !== -1) {
                return \"Firefox\";
              } else {
                return \"unknown\";
              }
            }

            function browserIsSupported(browser) {
              return browser === \"Chrome\" || browser === \"Firefox\";
            }

            function stopExecution() {
              if (window.stop) {
                window.stop();
              } else {
                document.execCommand(\"Stop\");
              }
            }

            function showUnsupportedBrowserOverlay(browser) {
              let html;

              switch (browser) {
                case \"IE\":
                case \"Edge\":
                  html =
                    '<div class=\"brz-ed-page-blocked\"><svg class=\"brz-icon-svg\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 48 48\" width=\"48\"  height=\"48\"><title>browser ie</title><g class=\"nc-icon-wrapper\" fill=\"currentColor\"><path fill=\"currentColor\" d=\"M44.543,11.283c4.256-11.044-4.011-10.271-4.011-10.271c-5.304,0-11.934,4.83-11.934,4.83 S20.69,3.711,12.781,8.494c-8.619,5.493-8.335,15.249-8.335,15.249c7.009-10.04,16.764-14.112,16.764-14.112v0.663 C6.814,20.138,3.405,34.54,2.552,37.476C1.7,40.412,2.268,47,8.33,47c6.062,0,12.218-4.883,12.218-4.883s1.326,0.284,4.925,0.284 C40.627,42.401,44.226,29,44.226,29H30.777c0,0-0.947,4.404-5.777,4.404c-6.63,0-6.251-6.914-6.251-6.914h25.667 C45.647,8.684,30.114,6.126,30.114,6.126s5.489-3.883,10.229-3.883c7.512,0,3.96,8.8,3.96,8.8L44.543,11.283z M19.796,41.92 c0,0-9.25,5.614-13.403,1.724c-2.225-3.89,1.39-9.399,1.39-9.399S10.842,39.918,19.796,41.92z M30.923,20.43H18.716 c0,0-0.155-5.949,6.258-5.949C31.167,14.481,30.923,20.43,30.923,20.43z\"/></g></svg><h1 class=\"brz-h1\">Sorry, ' +
                    browser +
                    ' is not supported</h1><p class=\"brz-p\">Unfortunately you can\\u2019t use Brizy Editor with ' +
                    browser +
                    '. Brizy Editor was optimized & works best on  <a class=\"brz-a\" href=\"https://www.google.com/chrome\" target=\"_blank\">Chrome</a> or <a class=\"brz-a\" href=\"https://www.mozilla.org\" target=\"_blank\">Firefox</a>.</p></div>';
                  break;
                case \"Safari\":
                  html =
                    '<div class=\"brz-ed-page-blocked\"><svg class=\"brz-icon-svg\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 48 48\" width=\"48\"height=\"48\"><title>browser safari</title><g class=\"nc-icon-wrapper\" fill=\"currentColor\"><path fill=\"currentColor\" d=\"M24,1C11.317,1,1,11.317,1,24s10.317,23,23,23s23-10.317,23-23S36.683,1,24,1z M24,45 C12.421,45,3,35.579,3,24S12.421,3,24,3s21,9.421,21,21S35.579,45,24,45z\"/><polygon data-color=\"color-2\" points=\"12,36 26,26 36,12 22,22 \"/></g></svg><h1 class=\"brz-h1\">Sorry, Safari is not supported</h1><p class=\"brz-p\">Unfortunately you can\\u2019t use Brizy Editor with Safari. Brizy Editor was optimized & works best on <a class=\"brz-a\" href=\"https://www.google.com/chrome\" target=\"_blank\">Chrome</a> or <a class=\"brz-a\" href=\"https://www.mozilla.org\" target=\"_blank\">Firefox</a>.</p></div>';
                  break;
                default:
                  html =
                    '<div class=\"brz-ed-page-blocked\"><svg class=\"brz-icon-svg\" width=\"48px\" height=\"48px\" viewBox=\"0 0 48 48\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><defs></defs><g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"currentColor\" fill-rule=\"evenodd\"><path d=\"M24,0 C10.7667097,0 0,10.7667097 0,24 C0,37.2332903 10.7667097,48 24,48 C37.2332903,48 48,37.2332903 48,24 C48,10.7667097 37.2332903,0 24,0 Z M24.1831163,3 C29.4592813,3 34.2882473,4.94413934 38,8.14671269 L8.14671269,38 C4.94413934,34.2882473 3,29.4592813 3,24.1831163 C3,12.502589 12.502589,3 24.1831163,3 Z M23.8168837,45 C18.5407187,45 13.7117527,43.0558607 10,39.8532873 L39.8532873,10 C43.0558607,13.7117527 45,18.5407187 45,23.8168837 C45,35.497411 35.497411,45 23.8168837,45 Z\" id=\"Shape\" fill=\"currentColor\" fill-rule=\"nonzero\"></path></g></svg><h1 class=\"brz-h1\">Sorry, your browser is not supported</h1><p class=\"brz-p\">Unfortunately you can\\u2019t use Brizy Editor with your current browser. Brizy Editor was optimized & works best on <a class=\"brz-a\" href=\"https://www.google.com/chrome\" target=\"_blank\">Chrome</a> or <a class=\"brz-a\" href=\"https://www.mozilla.org\" target=\"_blank\">Firefox</a>.</p></div>';
                  break;
              }

              document.body.innerHTML = html;
            }
          })();
        </script>
        <div class=\"brz-ed-page-curtain\"><div class=\"brz-ed-page-spinner\"></div></div>
        <iframe id=\"brz-ed-iframe\" class=\"brz-iframe brz-ed-iframe--desktop\" style=\"border: 0; width: 100%; min-height: 100vh; margin: 0 auto;\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["iframe_url"] ?? null), "html", null, true);
        echo "\"></iframe>
    </body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 80,  34 => 9,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.html.twig", "");
    }
}
