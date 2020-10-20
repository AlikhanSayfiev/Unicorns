<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!--metatextblock-->
  <title>{{ $settings->brand }}</title>
  @if($block1)
  <meta name="description"
    content="{{ $block1->title }}">
  @endif
  <meta property="og:url" content="https://unicorns.uz">
<meta property="og:title" content="{{ $settings->brand }}">
  @if($block1)
  <meta name="description"
    content="{{ $block1->title }}">
  @endif
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{$settings->headerimage}}">
  <link rel="canonical" href="https://unicorns.uz">
  <!--/metatextblock-->
  <link rel="shortcut icon"
    href="https://static.tildacdn.com/tild3633-6363-4633-b563-663637356465/Iconsmind-Outline-Do.ico"
    type="image/x-icon">
  <!-- Assets static/-->
  <link rel="stylesheet"
    href="{{asset('static/tilda-grid-3.css') }}"
    type="text/css" media="all">
  <link rel="stylesheet"
    href="{{asset('static/tilda-blocks-2.css') }}"
    type="text/css" media="all">
  <link rel="stylesheet"
    href="{{asset('static/tilda-animation-1.css') }}"
    type="text/css" media="all">
  <link rel="stylesheet"
    href="{{asset('static/tilda-menusub-1.css') }}"
    type="text/css" media="all">
  <link rel="stylesheet"
    href="{{asset('static/tilda-popup-1.css') }}"
    type="text/css" media="all">
  <link rel="stylesheet"
    href="{{asset('static/css.css') }}"
    type="text/css">
  <script type="text/javascript" async=""
    src="{{asset('static/js_002.js') }}"></script>
  <script charset="UTF-8" async=""
    src="{{asset('static/init.html') }}"></script>
  <script type="text/javascript" async=""
    src="{{asset('static/analytics.js') }}"></script>
  <script type="text/javascript" async=""
    src="{{asset('static/analytics.js') }}"></script>
  <script type="text/javascript" async="" id="tildastatscript"
    src="{{asset('static/tildastat-0.js') }}"></script>
  <script async=""
    src="{{asset('static/tag.js') }}"></script>
  <script async=""
    src="{{asset('static/gtm.js') }}"></script>
  <script
    src="{{asset('static/303040077044326.js') }}"
    async=""></script>
  <script
    src="{{asset('static/2378827035727474.js') }}"
    async=""></script>
  <script async=""
    src="{{asset('static/fbevents.js') }}"></script>
  <script id="facebook-jssdk"
    src="{{asset('static/xfbml.js') }}"></script>
  <script
    src="{{asset('static/jquery-1.js') }}"></script>
  <script
    src="{{asset('static/tilda-scripts-2.js') }}"></script>
  <script
    src="{{asset('static/tilda-blocks-2.js') }}"></script>
  <script
    src="{{asset('static/lazyload-1.js') }}"
    charset="utf-8"></script>
  <script
    src="{{asset('static/tilda-animation-1.js') }}"
    charset="utf-8"></script>
  <script
    src="{{asset('static/tilda-menusub-1.js') }}"
    charset="utf-8"></script>
  <script
    src="{{asset('static/tilda-forms-1.js') }}"
    charset="utf-8"></script>
  <script
    src="{{asset('static/tilda-cart-1.js') }}"
    charset="utf-8"></script><!-- Load Facebook SDK for JavaScript -->
  <script type="text/javascript" async=""
    src="{{asset('static/openapi.js') }}"></script>
  <style type="text/css">
    @media screen and (min-width: 980px) {
      .t-records {
        opacity: 0;
      }

      .t-records_animated {
        -webkit-transition: opacity ease-in-out .2s;
        -moz-transition: opacity ease-in-out .2s;
        -o-transition: opacity ease-in-out .2s;
        transition: opacity ease-in-out .2s;
      }

      .t-records.t-records_visible {
        opacity: 1;
      }
    }
  </style>
  <style type="text/css">
    .ya-share2,
    .ya-share2 * {
      line-height: normal;
    }

    .ya-share2 :link:hover,
    .ya-share2 :visited:hover {
      color: #000 !important;
    }

    .ya-share2 input {
      color: inherit;
      font: inherit;
      margin: 0;
      line-height: normal;
    }

    .ya-share2__container_size_m {
      font-size: 13px;
    }

    .ya-share2__container_size_m .ya-share2__icon {
      height: 24px;
      width: 24px;
      background-size: 24px 24px;
    }

    .ya-share2__container_size_m .ya-share2__title {
      line-height: 24px;
    }

    .ya-share2__container_size_m .ya-share2__item {
      margin: 5px 4px 5px 0;
    }

    .ya-share2__container_size_m .ya-share2__item:last-child {
      margin-right: 0;
    }

    .ya-share2__container_size_m .ya-share2__counter {
      font-size: 12px;
      line-height: 24px;
      padding: 0 8px;
    }

    .ya-share2__container_size_m .ya-share2__counter:before {
      margin-left: -8px;
    }

    .ya-share2__container_size_m .ya-share2__icon_more:before {
      font-size: 12px;
      line-height: 24px;
    }

    .ya-share2__container_size_m .ya-share2__popup {
      padding: 5px 10px;
    }

    .ya-share2__container_size_m .ya-share2__popup_direction_bottom {
      top: 28px;
    }

    .ya-share2__container_size_m .ya-share2__popup_direction_top {
      bottom: 28px;
    }

    .ya-share2__container_size_m .ya-share2__input_copy {
      width: 140px;
    }

    .ya-share2__container_size_m .ya-share2__badge+.ya-share2__title {
      margin-left: 10px;
    }

    .ya-share2__container_size_s {
      font-size: 12px;
    }

    .ya-share2__container_size_s .ya-share2__icon {
      height: 18px;
      width: 18px;
      background-size: 18px 18px;
    }

    .ya-share2__container_size_s .ya-share2__title {
      line-height: 18px;
    }

    .ya-share2__container_size_s .ya-share2__item {
      margin: 3px 4px 3px 0;
    }

    .ya-share2__container_size_s .ya-share2__item:last-child {
      margin-right: 0;
    }

    .ya-share2__container_size_s .ya-share2__counter {
      font-size: 10px;
      line-height: 18px;
      padding: 0 6px;
    }

    .ya-share2__container_size_s .ya-share2__counter:before {
      margin-left: -6px;
    }

    .ya-share2__container_size_s .ya-share2__icon_more:before {
      font-size: 10px;
      line-height: 18px;
    }

    .ya-share2__container_size_s .ya-share2__popup {
      padding: 3px 6px;
    }

    .ya-share2__container_size_s .ya-share2__popup_direction_bottom {
      top: 21px;
    }

    .ya-share2__container_size_s .ya-share2__popup_direction_top {
      bottom: 21px;
    }

    .ya-share2__container_size_s .ya-share2__input_copy {
      width: 110px;
    }

    .ya-share2__container_size_s .ya-share2__badge+.ya-share2__title {
      margin-left: 6px;
    }

    .ya-share2__list_direction_horizontal>.ya-share2__item {
      display: inline-block;
      vertical-align: top;
      margin-top: 0;
      margin-bottom: 0;
    }

    .ya-share2__list_direction_horizontal>.ya-share2__item>.ya-share2__link>.ya-share2__title {
      display: none;
    }

    .ya-share2__list_direction_vertical>.ya-share2__item {
      display: block;
      margin-right: 0;
    }

    .ya-share2__list_direction_vertical>.ya-share2__item>.ya-share2__link>.ya-share2__badge>.ya-share2__counter {
      display: none;
    }

    .ya-share2__list {
      display: inline-block;
      vertical-align: top;
      padding: 0;
      margin: 0;
      list-style-type: none;
    }

    .ya-share2__item {
      font-family: Arial, sans;
      display: inline-block;
    }

    .ya-share2__item:hover {
      opacity: 0.9;
    }

    .ya-share2__link {
      display: inline-block;
      vertical-align: top;
      text-decoration: none;
      white-space: nowrap;
    }

    .ya-share2__badge {
      display: inline-block;
      vertical-align: top;
      border-radius: 2px;
      color: #fff;
      overflow: hidden;
      position: relative;
    }

    .ya-share2__icon {
      display: inline-block;
      vertical-align: top;
    }

    .ya-share2__icon:active {
      box-shadow: inset 0 2px 0 0 rgba(0, 0, 0, 0.1);
    }

    .ya-share2__counter {
      display: none;
    }

    .ya-share2__counter:before {
      content: "";
      position: absolute;
      width: 1px;
      top: 2px;
      bottom: 2px;
      background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX///+nxBvIAAAAAXRSTlMz/za5cAAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=") 0 0 repeat-y;
    }

    .ya-share2__counter_visible {
      display: inline-block;
    }

    .ya-share2__counter_total-counter {
      color: #000;
      position: absolute;
      top: 0;
      left: 0;
    }

    .ya-share2__item_total-counter.ya-share2__item_total-counter {
      display: none;
    }

    .ya-share2__item_total-counter.ya-share2__item_total-counter_visible {
      display: inline-block;
    }

    .ya-share2__title {
      display: inline-block;
      color: #000;
      vertical-align: bottom;
    }

    .ya-share2__title:hover {
      color: #f00;
    }

    .ya-share2__item_more {
      position: relative;
    }

    .ya-share2__item_more:hover {
      opacity: 1;
    }

    .ya-share2__icon_more,
    .ya-share2__icon_total-counter {
      background-color: #fff;
      border: 1px solid #cdcdcd;
      box-sizing: border-box;
      position: relative;
    }

    .ya-share2__icon_more:before {
      content: '•••';
      color: #a0a0a0;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      position: absolute;
      text-align: center;
    }

    .ya-share2__popup {
      position: absolute;
      display: none;
      border: 1px solid #e6e6e6;
      z-index: 9999;
      background-color: #fff;
    }

    .ya-share2__popup_direction_bottom {
      box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.4);
    }

    .ya-share2__popup_direction_top {
      box-shadow: 0 0 20px -5px rgba(0, 0, 0, 0.4);
    }

    .ya-share2__popup_list-direction_horizontal {
      right: 0;
    }

    .ya-share2__popup_list-direction_vertical {
      left: 0;
    }

    .ya-share2__popup_visible {
      display: block;
    }

    .ya-share2__popup_clipboard .ya-share2__input_copy,
    .ya-share2__link_copy {
      display: none;
    }

    .ya-share2__popup_clipboard .ya-share2__link_copy {
      display: inline-block;
    }

    .ya-share2__item_service_blogger .ya-share2__badge {
      background-color: #fb8f3d;
    }

    .ya-share2__item_service_blogger .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M19.896 14.833A5.167 5.167 0 0 1 14.729 20H9.166A5.167 5.167 0 0 1 4 14.833V9.167A5.166 5.166 0 0 1 9.166 4h2.608a5.167 5.167 0 0 1 5.167 5.167l.002.011c.037.536.484.96 1.03.96l.018-.002h.872c.57 0 1.034.463 1.034 1.034l-.001 3.663zM9.038 10.176h2.926a.993.993 0 0 0 0-1.987H9.038a.994.994 0 0 0 0 1.987zm5.867 3.83H9.032a.94.94 0 0 0 0 1.879h5.873a.94.94 0 1 0 0-1.88z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_collections .ya-share2__badge {
      background-color: #eb1c00;
    }

    .ya-share2__item_service_collections .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7 18l5-2.71L17 18V6H7v12z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_delicious .ya-share2__badge {
      background-color: #31a9ff;
    }

    .ya-share2__item_service_delicious .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 12h8v8H4zm8-8h8v8h-7.984z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_digg .ya-share2__badge {
      background-color: #000;
    }

    .ya-share2__item_service_digg .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.555 10.814V14.1h.96s.18.005.18-.222v-3.287h-.96s-.18-.006-.18.222zm8.032 3.065v-3.287h-.96s-.18-.006-.18.222V14.1h.96s.18.006.18-.222zm-5.306 1.32c0 .227-.18.222-.18.222H4V9.497c0-.227.18-.222.18-.222h2.514V7.222c0-.227.18-.222.18-.222h1.408l-.001 8.199zm2.065 0c0 .227-.18.221-.18.221H8.761V9.496c0-.226.18-.221.18-.221h1.406v5.924zm0-7.103c0 .227-.18.222-.18.222H8.76V7.222c0-.227.18-.222.18-.222h1.408l-.001 1.096zm4.827 9.21c0 .228-.18.223-.18.223h-4.1v-1.096c0-.227.18-.222.18-.222h2.513v-.79h-2.694V9.497c0-.227.18-.222.18-.222l4.102.003v8.029zm4.826 0c0 .228-.18.223-.18.223h-4.1v-1.096c0-.227.18-.222.18-.222h2.514v-.79h-2.695V9.497c0-.227.18-.222.18-.222L20 9.279v8.028zm-1.585-3.427v-3.287h-.96s-.18-.006-.18.222V14.1h.96s.18.006.18-.222z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_evernote .ya-share2__badge {
      background-color: #24d666;
    }

    .ya-share2__item_service_evernote .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M6.277 7.109h1.517c.08 0 .16-.08.16-.16V5.313c0-.28.08-.559.159-.758l.04-.12L5.2 7.348l.16-.08c.239-.12.558-.16.917-.16zm11.654-.28c-.12-.638-.479-.917-.838-1.037-.36-.12-.718-.28-1.676-.4-.759-.08-1.557-.12-2.116-.12-.16-.438-.399-.917-1.317-1.156-.638-.16-1.796-.12-2.155-.08-.559.08-.758.319-.918.479-.16.16-.28.598-.28.878v1.556c0 .48-.318.838-.877.838H6.397c-.32 0-.559.04-.758.12-.16.12-.32.28-.4.4-.2.279-.239.598-.239.957 0 0 0 .28.08.798.04.4.479 3.033.878 3.911.16.36.28.48.599.639.718.32 2.354.639 3.152.758.759.08 1.278.32 1.557-.279 0 0 .04-.16.12-.36a6.3 6.3 0 0 0 .28-1.915c0-.04.079-.04.079 0 0 .36-.08 1.557.838 1.876.36.12 1.118.24 1.876.32.678.079 1.197.358 1.197 2.114 0 1.078-.24 1.238-1.397 1.238-.958 0-1.317.04-1.317-.759 0-.598.599-.558 1.078-.558.2 0 .04-.16.04-.52 0-.398.24-.598 0-.598-1.557-.04-2.475 0-2.475 1.956 0 1.796.679 2.115 2.914 2.115 1.756 0 2.354-.04 3.073-2.275.16-.439.479-1.796.678-4.03.16-1.478-.12-5.788-.319-6.866zm-3.033 4.75c-.2 0-.32 0-.519.04h-.08s-.04 0-.04-.04v-.04c.08-.4.28-.878.878-.878.639.04.799.599.799 1.038v.04c0 .04-.04.04-.04.04-.04 0-.04 0-.04-.04-.28-.08-.599-.12-.958-.16z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_facebook .ya-share2__badge {
      background-color: #3b5998;
    }

    .ya-share2__item_service_facebook .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M13.423 20v-7.298h2.464l.369-2.845h-2.832V8.042c0-.824.23-1.385 1.417-1.385h1.515V4.111A20.255 20.255 0 0 0 14.148 4c-2.183 0-3.678 1.326-3.678 3.76v2.097H8v2.845h2.47V20h2.953z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_linkedin .ya-share2__badge {
      background-color: #0083be;
    }

    .ya-share2__item_service_linkedin .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4.246 8.954h3.41v10.281h-3.41zm1.725-4.935c-1.167 0-1.929.769-1.929 1.776 0 .987.74 1.777 1.884 1.777h.022c1.19 0 1.93-.79 1.93-1.777-.023-1.007-.74-1.776-1.907-1.776zm10.052 4.715c-1.81 0-2.62.997-3.073 1.698V8.976H9.54c.045.965 0 10.281 0 10.281h3.41v-5.742c0-.307.022-.614.112-.834.246-.613.807-1.25 1.75-1.25 1.233 0 1.727.944 1.727 2.325v5.501h3.41v-5.896c0-3.158-1.683-4.627-3.926-4.627z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_lj .ya-share2__badge {
      background-color: #0d425a;
    }

    .ya-share2__item_service_lj .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cpath d='M17.815 13.3c.438 2.114.868 4.221 1.306 6.336.037.178-.148.385-.334.311-2.025-.741-4.006-1.49-6.01-2.24a.625.625 0 0 1-.318-.23l-7.39-8.903c-.067-.082-.082-.215-.06-.32.312-1.23.72-2.143 1.752-3.019C7.799 4.36 8.779 4.1 10.047 4.004c.156-.015.223.014.312.133 2.418 2.909 4.837 5.817 7.248 8.725a.888.888 0 0 1 .208.438z' fill='%23FFF'/%3E%3Cpath d='M6.175 8.462c.69-1.795 2.3-3.004 3.835-3.301l-.185-.223a4.242 4.242 0 0 0-3.85 3.272l.2.252z' fill='%230D425A'/%3E%3Cpath d='M10.53 5.792c-1.744.326-3.124 1.513-3.851 3.271l.905 1.091c.787-1.78 2.3-2.997 3.836-3.302l-.89-1.06zm2.76 7.827L9.364 8.9a6.119 6.119 0 0 0-1.269 1.87l4.89 5.89c.289-.385.867-2.359.303-3.041zM9.647 8.633l3.947 4.748c.445.542 2.456.327 3.086-.193l-4.756-5.72c-.793.156-1.587.564-2.277 1.165zm7.308 5.045c-.609.46-1.9.735-2.931.527.074.823-.096 1.892-.616 2.745l1.885.712 1.528.564c.223-.378.542-.608.913-.764l-.35-1.692-.43-2.092z' fill='%230D425A'/%3E%3C/g%3E%3C/svg%3E");
    }

    .ya-share2__item_service_moimir .ya-share2__badge {
      background-color: #168de2;
    }

    .ya-share2__item_service_moimir .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8.889 9.667a1.333 1.333 0 1 0 0-2.667 1.333 1.333 0 0 0 0 2.667zm6.222 0a1.333 1.333 0 1 0 0-2.667 1.333 1.333 0 0 0 0 2.667zm4.77 6.108l-1.802-3.028a.879.879 0 0 0-1.188-.307.843.843 0 0 0-.313 1.166l.214.36a6.71 6.71 0 0 1-4.795 1.996 6.711 6.711 0 0 1-4.792-1.992l.217-.364a.844.844 0 0 0-.313-1.166.878.878 0 0 0-1.189.307l-1.8 3.028a.844.844 0 0 0 .312 1.166.88.88 0 0 0 1.189-.307l.683-1.147a8.466 8.466 0 0 0 5.694 2.18 8.463 8.463 0 0 0 5.698-2.184l.685 1.151a.873.873 0 0 0 1.189.307.844.844 0 0 0 .312-1.166z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_odnoklassniki .ya-share2__badge {
      background-color: #eb722e;
    }

    .ya-share2__item_service_odnoklassniki .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23FFF' fill-rule='evenodd'%3E%3Cpath d='M11.674 6.536a1.69 1.69 0 0 0-1.688 1.688c0 .93.757 1.687 1.688 1.687a1.69 1.69 0 0 0 1.688-1.687 1.69 1.69 0 0 0-1.688-1.688zm0 5.763a4.08 4.08 0 0 1-4.076-4.075 4.08 4.08 0 0 1 4.076-4.077 4.08 4.08 0 0 1 4.077 4.077 4.08 4.08 0 0 1-4.077 4.075zM10.025 15.624a7.633 7.633 0 0 1-2.367-.98 1.194 1.194 0 0 1 1.272-2.022 5.175 5.175 0 0 0 5.489 0 1.194 1.194 0 1 1 1.272 2.022 7.647 7.647 0 0 1-2.367.98l2.279 2.28a1.194 1.194 0 0 1-1.69 1.688l-2.238-2.24-2.24 2.24a1.193 1.193 0 1 1-1.689-1.689l2.279-2.279'/%3E%3C/g%3E%3C/svg%3E");
    }

    .ya-share2__item_service_pinterest .ya-share2__badge {
      background-color: #c20724;
    }

    .ya-share2__item_service_pinterest .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M6 9.742c0 1.58.599 2.986 1.884 3.51.21.087.4.003.46-.23.043-.16.144-.568.189-.738.06-.23.037-.31-.133-.512-.37-.436-.608-1.001-.608-1.802 0-2.322 1.74-4.402 4.53-4.402 2.471 0 3.829 1.508 3.829 3.522 0 2.65-1.174 4.887-2.917 4.887-.963 0-1.683-.795-1.452-1.77.276-1.165.812-2.421.812-3.262 0-.752-.405-1.38-1.24-1.38-.985 0-1.775 1.017-1.775 2.38 0 .867.293 1.454.293 1.454L8.69 16.406c-.352 1.487-.053 3.309-.028 3.492.015.11.155.136.22.054.09-.119 1.262-1.564 1.66-3.008.113-.409.647-2.526.647-2.526.32.61 1.254 1.145 2.248 1.145 2.957 0 4.964-2.693 4.964-6.298C18.4 6.539 16.089 4 12.576 4 8.204 4 6 7.13 6 9.742z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_pocket .ya-share2__badge {
      background-color: #ee4056;
    }

    .ya-share2__item_service_pocket .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17.9 5c1.159 0 2.1.948 2.1 2.117v5.862c0 .108-.008.215-.024.32.016.156.024.314.024.473 0 3.36-3.582 6.085-8 6.085s-8-2.724-8-6.085c0-.159.008-.317.024-.473a2.148 2.148 0 0 1-.024-.32V7.117C4 5.948 4.94 5 6.1 5h11.8zM8.596 9.392L12 12.795l3.404-3.403a1.063 1.063 0 0 1 1.502 1.502l-4.132 4.131c-.21.21-.486.314-.76.311-.284.01-.571-.094-.788-.31l-4.132-4.132a1.063 1.063 0 0 1 1.502-1.502z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_qzone .ya-share2__badge {
      background-color: #f5b53c;
    }

    .ya-share2__item_service_qzone .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17.367 14.463s-.105.148-.457.299l-.553.222.597 3.273c.062.282.25.983-.082 1.062-.17.04-.307-.067-.395-.121l-.769-.445-2.675-1.545c-.204-.122-.78-.546-1.093-.489-.205.038-.336.127-.483.216l-.77.445-2.39 1.386-.883.508c-.123.06-.301.058-.394-.025-.07-.063-.09-.253-.063-.388l.19-1.004.572-3.02c.047-.2.237-.975.166-1.137-.048-.107-.173-.196-.261-.267l-.61-.565-2.13-1.983c-.189-.153-.345-.345-.533-.496l-.235-.216c-.062-.078-.165-.235-.09-.369.142-.248.974-.218 1.335-.28l2.682-.31.82-.09c.146-.024.299-.004.413-.063.239-.123.51-.809.636-1.087l1.31-2.714c.151-.297.286-.603.431-.896.075-.15.133-.308.305-.356.162-.045.257.105.312.178.177.235.325.685.451.973l1.29 2.853c.104.238.363.964.54 1.074.266.166.858.108 1.227.172l2.841.292c.355.062 1.245.01 1.36.267.076.17-.072.314-.152.394l-.864.814-1.983 1.868c-.185.164-.77.637-.833.858-.04.14.02.414.088.722-.096-.001-.39-.007-1.182-.029-.63-.007-2.616-.17-2.713-.178l-.84-.076c-.14-.023-.326.012-.4-.076v-.02c1.727-1.168 3.407-2.416 5.142-3.578l-.006-.044c-.146-.072-.359-.059-.54-.095-.385-.077-.79-.078-1.208-.147-.75-.124-1.59-.114-2.434-.114-1.172 0-2.329.03-3.35.21-.45.079-.894.095-1.309.197-.172.042-.358.03-.49.108l.007.012c.1.027.253.02.381.02l.928.019.808.025.813.032.591.032c.486.075 1.007.036 1.475.114.404.068.804.065 1.182.14.113.022.245.015.33.064v.006c-.039.094-.336.255-.432.318l-1.055.743-2.256 1.62-1.417.992c.003.048.024.035.045.061 1.15.167 2.52.258 3.77.262 1.298.005 2.465-.094 3.118-.193.561-.086 1.082-.147 1.653-.287.325-.08.521-.148.521-.148z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_reddit .ya-share2__badge {
      background-color: #ff4500;
    }

    .ya-share2__item_service_reddit .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M16.542 10.63c-1.105-.636-2.494-1.033-4.025-1.118l.808-2.393 2.182.637c0 .963.78 1.742 1.743 1.742.964 0 1.758-.779 1.758-1.742C19.008 6.78 18.214 6 17.25 6c-.609 0-1.148.326-1.459.793l-2.65-.764a.482.482 0 0 0-.61.311l-1.063 3.172c-1.516.085-2.905.482-4.01 1.119a1.987 1.987 0 0 0-1.46-.623A1.995 1.995 0 0 0 4 12.004c0 .75.425 1.403 1.035 1.742-.029.17-.043.34-.043.51 0 2.62 3.146 4.744 7.015 4.744 3.855 0 7-2.124 7-4.744 0-.17-.013-.34-.042-.51A1.974 1.974 0 0 0 20 12.004a1.995 1.995 0 0 0-1.998-1.996c-.581 0-1.091.24-1.46.623zM9.499 12.5a1.01 1.01 0 0 1 1.006 1.006.998.998 0 0 1-1.006.991.986.986 0 0 1-.992-.991c0-.553.439-1.006.992-1.006zm5.002 0a.998.998 0 0 0-.992 1.006c0 .552.44.991.992.991a.998.998 0 0 0 1.006-.991 1.01 1.01 0 0 0-1.006-1.006zm-5.3 3.597a.484.484 0 0 1-.085-.694c.156-.226.482-.255.694-.085.567.44 1.474.68 2.197.68.709 0 1.616-.24 2.197-.68a.484.484 0 0 1 .694.085.496.496 0 0 1-.085.694c-.737.58-1.885.907-2.806.907-.935 0-2.07-.326-2.806-.907zm8.05-7.59c-.411 0-.752-.34-.752-.75 0-.426.34-.752.751-.752s.752.326.752.751c0 .41-.34.75-.752.75z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_renren .ya-share2__badge {
      background-color: #1760a7;
    }

    .ya-share2__item_service_renren .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.019 15.562l-.001-.003-.018.002a.055.055 0 0 0 .019.001zM7.71 12.398l.146-.68c.048-.205.03-.452.03-.692V9.812L7.88 8c-.139 0-.278.043-.393.076-.358.102-.666.201-.962.352-1.158.59-2.022 1.565-2.387 2.944-.343 1.297-.007 2.652.522 3.507.118.19.269.48.44.61.135-.02.272-.15.375-.217a6.06 6.06 0 0 0 .622-.452l.24-.229c.63-.506 1.075-1.346 1.373-2.193zm4.276 3.164h.02a.382.382 0 0 0-.019-.003v.003zm-3.01-.888l-.258-.575-.088-.264H8.62l-.264.498c-.176.288-.358.574-.557.839a6.5 6.5 0 0 1-.85.944l-.517.422.012.024.287.14c.206.091.43.173.657.235.788.217 1.811.177 2.545-.053.178-.055.643-.194.739-.305v-.017c-.177-.092-.324-.254-.47-.381a5.573 5.573 0 0 1-1.225-1.507zm10.884-3.302c-.365-1.379-1.23-2.354-2.387-2.944-.296-.15-.604-.25-.962-.352-.115-.033-.254-.077-.393-.076l-.005 1.812v1.214c0 .24-.019.487.029.692l.147.68c.297.847.741 1.687 1.372 2.193l.24.23c.196.164.402.309.622.45.103.067.24.198.375.218.171-.13.322-.42.44-.61.529-.855.865-2.21.522-3.507zm-3.66 3.8c-.2-.265-.381-.55-.557-.839l-.264-.498h-.011l-.088.264-.258.575a5.576 5.576 0 0 1-1.226 1.507c-.145.127-.292.29-.469.38v.018c.096.111.561.25.739.305.734.23 1.757.27 2.545.053a4.85 4.85 0 0 0 .657-.234l.287-.141a1.31 1.31 0 0 0 .012-.024l-.516-.422a6.5 6.5 0 0 1-.85-.944zm-1.653-2.727c.068-.192.097-.402.146-.61.05-.21.024-.484.024-.727V9.753l-.006-1.741c-.015-.008-.02-.01-.047-.012-.197.047-.326.05-.592.14-.357.102-.685.275-.985.44-.289.16-.53.388-.78.587-.097.077-.199.19-.308.312l.01.01a1.19 1.19 0 0 0-.01.012l.36.47c.232.359.445.763.581 1.213.326 1.079.182 2.411-.235 3.273a4.9 4.9 0 0 1-.445.75l-.258.323a.018.018 0 0 1-.003.007c.004.007.01.016.012.022h.008c.395-.215.686-.574 1.027-.844.189-.15.354-.35.504-.54.404-.514.755-1.046.997-1.73zm-2.55 3.085l-.259-.323a4.903 4.903 0 0 1-.445-.75c-.417-.862-.561-2.194-.235-3.273.136-.45.35-.854.58-1.214L12 9.501l-.01-.011.01-.01a2.791 2.791 0 0 0-.308-.313c-.25-.2-.491-.427-.78-.586-.3-.166-.628-.339-.985-.44-.266-.09-.395-.094-.592-.141-.026.001-.032.004-.047.012l-.006 1.741v1.355c0 .243-.026.517.024.727.049.208.078.418.146.61.242.684.593 1.216.997 1.73.15.19.315.39.505.54.34.27.63.629 1.026.844h.008c.001-.006.008-.015.012-.022a.019.019 0 0 1-.003-.007z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_sinaWeibo .ya-share2__badge {
      background-color: #c53220;
    }

    .ya-share2__item_service_sinaWeibo .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Ctitle%3EsinaWeibo%3C/title%3E%3Cpath d='M10.266 14.696c-.103.421.55.447.64.063.037-.191-.103-.332-.282-.332-.167 0-.333.128-.358.269zm-.128.945c.102-.498-.307-.869-.793-.843-.46.038-.843.358-.92.754-.115.511.307.882.793.844.46-.026.843-.345.92-.755zm3.797-3.157c-1.586-.997-3.707-1.01-5.42-.447-.857.28-1.764.818-2.301 1.495-.627.793-.882 1.815-.23 2.8.958 1.431 3.413 2.033 5.675 1.508 1.33-.307 2.749-1.048 3.35-2.326.562-1.177-.052-2.378-1.074-3.03zm-3.17.498c.945.167 1.7.755 1.827 1.739.243 1.854-2.173 3.336-4.026 2.327a1.933 1.933 0 0 1-.742-2.723c.435-.767 1.266-1.266 2.148-1.355a2.75 2.75 0 0 1 .793.012zm6.11-.37c-.268-.18-.538-.281-.856-.383-.308-.103-.359-.154-.243-.46.076-.218.14-.41.166-.666.14-1.15-.793-1.495-1.854-1.406-.498.039-.92.167-1.355.307-.281.09-.806.384-.92.205-.064-.09.013-.23.038-.32.166-.626.23-1.496-.384-1.88-.447-.28-1.227-.204-1.7-.038-2.556.87-6.455 4.552-5.663 7.479.18.664.55 1.163.908 1.521 1.061 1.061 2.71 1.65 4.231 1.866 1.112.154 2.263.14 3.375-.064 1.815-.332 3.554-1.15 4.679-2.607.754-.972.997-2.352 0-3.235a3.334 3.334 0 0 0-.422-.319zm1.623-3.682c.652 1.483-.064 2.148.166 2.66.192.421.767.46 1.023.14.191-.243.294-.959.307-1.278a4.193 4.193 0 0 0-1.125-3.12c-.984-1.073-2.276-1.444-3.694-1.303-.256.025-.46.064-.601.217-.332.358-.166.882.294.959.384.063 1.342-.23 2.416.396.498.307.971.792 1.214 1.33zm-3.45-.562c-.282.345-.078.87.408.856.294-.012.358-.05.677.051.307.103.626.448.64.857.025.268-.282.895.32 1.061a.523.523 0 0 0 .536-.166c.115-.128.166-.371.192-.575.089-.857-.333-1.598-1.01-2.02-.384-.23-1.445-.46-1.764-.064z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_skype .ya-share2__badge {
      background-color: #00aff0;
    }

    .ya-share2__item_service_skype .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M19.537 13.698c.115-.52.176-1.06.176-1.614 0-4.155-3.415-7.524-7.63-7.524-.444 0-.88.038-1.304.11A4.444 4.444 0 0 0 8.425 4C5.981 4 4 5.954 4 8.364c0 .805.222 1.56.608 2.207a7.428 7.428 0 0 0-.155 1.513c0 4.156 3.416 7.4 7.63 7.4.477 0 .944-.044 1.397-.126.623.33 1.335.642 2.092.642 2.444 0 4.425-1.953 4.425-4.364 0-.695-.166-1.354-.46-1.938zm-3.974 1.457c-.294.418-.725.747-1.293.984-.567.238-1.239.356-2.016.356-.933 0-1.702-.162-2.308-.486a2.986 2.986 0 0 1-1.047-.934c-.268-.39-.403-.768-.403-1.137 0-.213.08-.395.242-.547a.855.855 0 0 1 .615-.229c.202 0 .373.059.512.178.14.119.26.294.358.527.12.278.25.51.39.695.139.185.336.34.589.46.254.12.587.18 1 .18.566 0 1.027-.12 1.382-.364.354-.243.532-.547.532-.91a.919.919 0 0 0-.287-.702 1.88 1.88 0 0 0-.741-.412 13.21 13.21 0 0 0-1.216-.303c-.678-.146-1.247-.318-1.703-.513-.458-.196-.822-.463-1.09-.8-.269-.34-.403-.759-.403-1.26 0-.48.142-.904.426-1.275.283-.372.693-.658 1.23-.858.537-.2 1.17-.299 1.895-.299.58 0 1.082.066 1.505.198.423.133.774.309 1.053.528.28.22.484.45.612.691.13.24.194.477.194.705 0 .21-.08.4-.241.567a.8.8 0 0 1-.603.252c-.22 0-.386-.05-.5-.151-.114-.101-.237-.266-.37-.495a2.27 2.27 0 0 0-.618-.768c-.241-.184-.627-.276-1.16-.276-.494 0-.893.1-1.196.3-.303.199-.455.44-.455.72 0 .173.053.324.155.45.103.128.245.235.426.326.18.091.363.162.547.214.185.052.49.126.916.225a15.47 15.47 0 0 1 1.446.38c.432.138.8.307 1.103.503.302.198.54.45.709.752.17.302.255.673.255 1.111 0 .525-.148.998-.442 1.417z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_surfingbird .ya-share2__badge {
      background-color: #30baff;
    }

    .ya-share2__item_service_surfingbird .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M17.315 8.49l-.214 1.987-3.436 3.382h-1.826l-.698 1.826v2.523l-2.47-.698 2.846-5.1L4 8.167l5.638.752L6.899 5l7.463 4.027 2.202-2.47h1.02L20 7.631z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_telegram .ya-share2__badge {
      background-color: #64a9dc;
    }

    .ya-share2__item_service_telegram .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.92 6.089L4.747 11.555c-.967.388-.962.928-.176 1.168l3.534 1.104 1.353 4.146c.164.454.083.634.56.634.368 0 .53-.168.736-.368.13-.127.903-.88 1.767-1.719l3.677 2.717c.676.373 1.165.18 1.333-.628l2.414-11.374c.247-.99-.378-1.44-1.025-1.146zM8.66 13.573l7.967-5.026c.398-.242.763-.112.463.154l-6.822 6.155-.265 2.833-1.343-4.116z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_tencentWeibo .ya-share2__badge {
      background-color: #53a9d7;
    }

    .ya-share2__item_service_tencentWeibo .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8.813 6.01a4.397 4.397 0 0 0-4.326 6.121c.087.199.312.29.511.2a.382.382 0 0 0 .206-.51 3.566 3.566 0 0 1-.286-1.668A3.616 3.616 0 0 1 8.76 6.79a3.615 3.615 0 0 1 3.366 3.84 3.615 3.615 0 0 1-4.65 3.218.39.39 0 0 0-.486.263.394.394 0 0 0 .262.485c.315.093.647.152.977.174a4.397 4.397 0 0 0 4.677-4.087A4.398 4.398 0 0 0 8.813 6.01zm-1.348 5.658a1.67 1.67 0 1 0-.46-.655c-.274.27-.565.59-.854.966-1.022 1.315-2.224 3.694-2.148 7.007.006.204.157.484.355.497l.04.002c.213.015.394-.301.391-.516-.064-2.458.6-4.662 1.955-6.423.242-.316.488-.626.72-.878zm12.388 4.106c-1.307-.48-2.302-1.27-2.95-2.352a4.873 4.873 0 0 1-.354-.71.819.819 0 0 0 .337-.36.829.829 0 0 0-.395-1.098.822.822 0 0 0-1.098.392.822.822 0 0 0 .724 1.177c.091.237.218.516.39.81.483.812 1.431 1.912 3.196 2.558a.226.226 0 0 0 .278-.113c0-.006.005-.01.007-.022a.224.224 0 0 0-.135-.282zm-3.767-1.676a2.04 2.04 0 0 1-1.707-3.042 2.039 2.039 0 0 1 2.784-.787 2.04 2.04 0 0 1 .786 2.783 1.92 1.92 0 0 1-.268.378.223.223 0 0 0 .014.314c.09.082.234.074.313-.016a2.489 2.489 0 1 0-4.017-2.89 2.493 2.493 0 0 0 2.08 3.708.224.224 0 0 0 .015-.448z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_tumblr .ya-share2__badge {
      background-color: #547093;
    }

    .ya-share2__item_service_tumblr .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.72 7.7h3.699v2.857h-3.7v4.102c0 .928-.01 1.463.087 1.726.098.262.343.534.61.69.355.213.758.32 1.214.32.81 0 1.616-.264 2.417-.79v2.522c-.683.322-1.302.55-1.857.678a7.94 7.94 0 0 1-1.798.195 4.905 4.905 0 0 1-1.724-.276 4.215 4.215 0 0 1-1.438-.79c-.399-.343-.673-.706-.826-1.09-.154-.386-.23-.945-.23-1.676v-5.611H7V8.29c.628-.203 1.357-.496 1.804-.877.45-.382.809-.84 1.08-1.374.272-.534.459-1.214.56-2.039h2.276v3.7z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_twitter .ya-share2__badge {
      background-color: #00aced;
    }

    .ya-share2__item_service_twitter .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 7.539a6.56 6.56 0 0 1-1.885.517 3.294 3.294 0 0 0 1.443-1.816 6.575 6.575 0 0 1-2.085.796 3.283 3.283 0 0 0-5.593 2.994A9.32 9.32 0 0 1 5.114 6.6a3.28 3.28 0 0 0 1.016 4.382 3.274 3.274 0 0 1-1.487-.41v.041a3.285 3.285 0 0 0 2.633 3.218 3.305 3.305 0 0 1-1.482.056 3.286 3.286 0 0 0 3.066 2.28A6.585 6.585 0 0 1 4 17.524 9.291 9.291 0 0 0 9.032 19c6.038 0 9.34-5 9.34-9.337 0-.143-.004-.285-.01-.425A6.672 6.672 0 0 0 20 7.538z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_viber .ya-share2__badge {
      background-color: #7b519d;
    }

    .ya-share2__item_service_viber .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23FFF' fill-rule='evenodd'%3E%3Cpath d='M18.434 15.574c-.484-.391-1.002-.743-1.511-1.102-1.016-.718-1.945-.773-2.703.38-.426.648-1.021.677-1.644.392-1.718-.782-3.044-1.989-3.821-3.743-.344-.777-.34-1.473.465-2.022.425-.29.854-.634.82-1.268-.045-.828-2.043-3.593-2.832-3.885a1.429 1.429 0 0 0-.984 0C4.373 4.95 3.606 6.48 4.34 8.292c2.19 5.405 6.043 9.167 11.349 11.463.302.13.638.183.808.23 1.208.012 2.623-1.158 3.032-2.318.393-1.117-.438-1.56-1.096-2.093zM12.485 4.88c3.879.6 5.668 2.454 6.162 6.38.045.363-.09.909.426.919.538.01.408-.528.413-.89.045-3.699-3.163-7.127-6.888-7.253-.281.04-.863-.195-.9.438-.024.427.466.357.787.406z'/%3E%3Cpath d='M13.244 5.957c-.373-.045-.865-.222-.953.299-.09.546.458.49.811.57 2.395.538 3.23 1.414 3.624 3.802.057.349-.057.89.532.8.436-.066.278-.53.315-.802.02-2.293-1.936-4.38-4.329-4.669z'/%3E%3Cpath d='M13.464 7.832c-.249.006-.493.033-.585.3-.137.4.152.496.446.544.983.158 1.5.74 1.598 1.725.027.268.195.484.452.454.356-.043.389-.361.378-.664.017-1.106-1.227-2.385-2.289-2.359z'/%3E%3C/g%3E%3C/svg%3E");
    }

    .ya-share2__item_service_vkontakte .ya-share2__badge {
      background-color: #48729e;
    }

    .ya-share2__item_service_vkontakte .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.785 16.241s.288-.032.436-.194c.136-.148.132-.427.132-.427s-.02-1.304.576-1.496c.588-.19 1.341 1.26 2.14 1.818.605.422 1.064.33 1.064.33l2.137-.03s1.117-.071.587-.964c-.043-.073-.308-.661-1.588-1.87-1.34-1.264-1.16-1.059.453-3.246.983-1.332 1.376-2.145 1.253-2.493-.117-.332-.84-.244-.84-.244l-2.406.015s-.178-.025-.31.056c-.13.079-.212.262-.212.262s-.382 1.03-.89 1.907c-1.07 1.85-1.499 1.948-1.674 1.832-.407-.267-.305-1.075-.305-1.648 0-1.793.267-2.54-.521-2.733-.262-.065-.454-.107-1.123-.114-.858-.009-1.585.003-1.996.208-.274.136-.485.44-.356.457.159.022.519.099.71.363.246.341.237 1.107.237 1.107s.142 2.11-.33 2.371c-.325.18-.77-.187-1.725-1.865-.489-.859-.859-1.81-.859-1.81s-.07-.176-.198-.272c-.154-.115-.37-.151-.37-.151l-2.286.015s-.343.01-.469.161C3.94 7.721 4.043 8 4.043 8s1.79 4.258 3.817 6.403c1.858 1.967 3.968 1.838 3.968 1.838h.957z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }

    .ya-share2__item_service_whatsapp .ya-share2__badge {
      background-color: #65bc54;
    }

    .ya-share2__item_service_whatsapp .ya-share2__icon {
      background: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 11.794c0 4.304-3.517 7.794-7.855 7.794a7.87 7.87 0 0 1-3.796-.97L4 20l1.418-4.182a7.714 7.714 0 0 1-1.127-4.024C4.29 7.489 7.807 4 12.145 4S20 7.49 20 11.794zm-7.855-6.553c-3.641 0-6.603 2.94-6.603 6.553 0 1.434.467 2.762 1.258 3.842l-.825 2.433 2.537-.806a6.6 6.6 0 0 0 3.633 1.084c3.642 0 6.604-2.94 6.604-6.553s-2.962-6.553-6.604-6.553zm3.967 8.348c-.049-.08-.177-.128-.37-.223-.192-.095-1.139-.558-1.315-.621-.177-.064-.305-.096-.434.095a10.92 10.92 0 0 1-.61.749c-.112.128-.224.143-.416.048-.193-.096-.813-.297-1.549-.948a5.76 5.76 0 0 1-1.07-1.323c-.113-.191-.013-.295.084-.39.086-.086.192-.223.289-.334.096-.112.128-.191.192-.319s.032-.239-.016-.335c-.048-.095-.433-1.035-.594-1.418-.16-.382-.32-.318-.433-.318-.112 0-.24-.016-.369-.016a.71.71 0 0 0-.513.239c-.177.19-.674.653-.674 1.593s.69 1.848.786 1.976c.096.127 1.332 2.119 3.289 2.884 1.958.764 1.958.51 2.31.477.353-.031 1.14-.461 1.3-.908.16-.446.16-.829.113-.908z' fill='%23FFF' fill-rule='evenodd'/%3E%3C/svg%3E");
    }
  </style>
  <style type="text/css"
    data-fbcssmodules="css:fb.css.basecss:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
    .fb_hidden {
      position: absolute;
      top: -10000px;
      z-index: 10001
    }

    .fb_reposition {
      overflow: hidden;
      position: relative
    }

    .fb_invisible {
      display: none
    }

    .fb_reset {
      background: none;
      border: 0;
      border-spacing: 0;
      color: #000;
      cursor: auto;
      direction: ltr;
      font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
      font-size: 11px;
      font-style: normal;
      font-variant: normal;
      font-weight: normal;
      letter-spacing: normal;
      line-height: 1;
      margin: 0;
      overflow: visible;
      padding: 0;
      text-align: left;
      text-decoration: none;
      text-indent: 0;
      text-shadow: none;
      text-transform: none;
      visibility: visible;
      white-space: normal;
      word-spacing: normal
    }

    .fb_reset>div {
      overflow: hidden
    }

    @keyframes fb_transform {
      from {
        opacity: 0;
        transform: scale(.95)
      }

      to {
        opacity: 1;
        transform: scale(1)
      }
    }

    .fb_animate {
      animation: fb_transform .3s forwards
    }

    .fb_dialog {
      background: rgba(82, 82, 82, .7);
      position: absolute;
      top: -10000px;
      z-index: 10001
    }

    .fb_dialog_advanced {
      border-radius: 8px;
      padding: 10px
    }

    .fb_dialog_content {
      background: #fff;
      color: #373737
    }

    .fb_dialog_close_icon {
      background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
      cursor: pointer;
      display: block;
      height: 15px;
      position: absolute;
      right: 18px;
      top: 17px;
      width: 15px
    }

    .fb_dialog_mobile .fb_dialog_close_icon {
      left: 5px;
      right: auto;
      top: 5px
    }

    .fb_dialog_padding {
      background-color: transparent;
      position: absolute;
      width: 1px;
      z-index: -1
    }

    .fb_dialog_close_icon:hover {
      background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
    }

    .fb_dialog_close_icon:active {
      background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
    }

    .fb_dialog_iframe {
      line-height: 0
    }

    .fb_dialog_content .dialog_title {
      background: #6d84b4;
      border: 1px solid #365899;
      color: #fff;
      font-size: 14px;
      font-weight: bold;
      margin: 0
    }

    .fb_dialog_content .dialog_title>span {
      background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
      float: left;
      padding: 5px 0 7px 26px
    }

    body.fb_hidden {
      height: 100%;
      left: 0;
      margin: 0;
      overflow: visible;
      position: absolute;
      top: -10000px;
      transform: none;
      width: 100%
    }

    .fb_dialog.fb_dialog_mobile.loading {
      background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
      min-height: 100%;
      min-width: 100%;
      overflow: hidden;
      position: absolute;
      top: 0;
      z-index: 10001
    }

    .fb_dialog.fb_dialog_mobile.loading.centered {
      background: none;
      height: auto;
      min-height: initial;
      min-width: initial;
      width: auto
    }

    .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
      width: 100%
    }

    .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
      background: none
    }

    .loading.centered #fb_dialog_loader_close {
      clear: both;
      color: #fff;
      display: block;
      font-size: 18px;
      padding-top: 20px
    }

    #fb-root #fb_dialog_ipad_overlay {
      background: rgba(0, 0, 0, .4);
      bottom: 0;
      left: 0;
      min-height: 100%;
      position: absolute;
      right: 0;
      top: 0;
      width: 100%;
      z-index: 10000
    }

    #fb-root #fb_dialog_ipad_overlay.hidden {
      display: none
    }

    .fb_dialog.fb_dialog_mobile.loading iframe {
      visibility: hidden
    }

    .fb_dialog_mobile .fb_dialog_iframe {
      position: sticky;
      top: 0
    }

    .fb_dialog_content .dialog_header {
      background: linear-gradient(from(#738aba), to(#2c4987));
      border-bottom: 1px solid;
      border-color: #043b87;
      box-shadow: white 0 1px 1px -1px inset;
      color: #fff;
      font: bold 14px Helvetica, sans-serif;
      text-overflow: ellipsis;
      text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
      vertical-align: middle;
      white-space: nowrap
    }

    .fb_dialog_content .dialog_header table {
      height: 43px;
      width: 100%
    }

    .fb_dialog_content .dialog_header td.header_left {
      font-size: 12px;
      padding-left: 5px;
      vertical-align: middle;
      width: 60px
    }

    .fb_dialog_content .dialog_header td.header_right {
      font-size: 12px;
      padding-right: 5px;
      vertical-align: middle;
      width: 60px
    }

    .fb_dialog_content .touchable_button {
      background: linear-gradient(from(#4267B2), to(#2a4887));
      background-clip: padding-box;
      border: 1px solid #29487d;
      border-radius: 3px;
      display: inline-block;
      line-height: 18px;
      margin-top: 3px;
      max-width: 85px;
      padding: 4px 12px;
      position: relative
    }

    .fb_dialog_content .dialog_header .touchable_button input {
      background: none;
      border: none;
      color: #fff;
      font: bold 12px Helvetica, sans-serif;
      margin: 2px -12px;
      padding: 2px 6px 3px 6px;
      text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
    }

    .fb_dialog_content .dialog_header .header_center {
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      line-height: 18px;
      text-align: center;
      vertical-align: middle
    }

    .fb_dialog_content .dialog_content {
      background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
      border: 1px solid #4a4a4a;
      border-bottom: 0;
      border-top: 0;
      height: 150px
    }

    .fb_dialog_content .dialog_footer {
      background: #f5f6f7;
      border: 1px solid #4a4a4a;
      border-top-color: #ccc;
      height: 40px
    }

    #fb_dialog_loader_close {
      float: left
    }

    .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
      text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
    }

    .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
      visibility: hidden
    }

    #fb_dialog_loader_spinner {
      animation: rotateSpinner 1.2s linear infinite;
      background-color: transparent;
      background-image: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
      background-position: 50% 50%;
      background-repeat: no-repeat;
      height: 24px;
      width: 24px
    }

    @keyframes rotateSpinner {
      0% {
        transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    .fb_iframe_widget {
      display: inline-block;
      position: relative
    }

    .fb_iframe_widget span {
      display: inline-block;
      position: relative;
      text-align: justify
    }

    .fb_iframe_widget iframe {
      position: absolute
    }

    .fb_iframe_widget_fluid_desktop,
    .fb_iframe_widget_fluid_desktop span,
    .fb_iframe_widget_fluid_desktop iframe {
      max-width: 100%
    }

    .fb_iframe_widget_fluid_desktop iframe {
      min-width: 220px;
      position: relative
    }

    .fb_iframe_widget_lift {
      z-index: 1
    }

    .fb_iframe_widget_fluid {
      display: inline
    }

    .fb_iframe_widget_fluid span {
      width: 100%
    }

    .fb_mpn_mobile_landing_page_slide_in {
      animation-duration: 200ms;
      animation-name: fb_mpn_landing_page_slide_in;
      transition-timing-function: ease-in
    }

    .fb_mpn_mobile_landing_page_slide_out {
      animation-duration: 200ms;
      animation-name: fb_mpn_landing_page_slide_out;
      transition-timing-function: ease-in
    }

    .fb_mpn_mobile_bounce_in {
      animation-duration: 300ms;
      animation-name: fb_mpn_bounce_in;
      transition-timing-function: ease-in
    }

    .fb_mpn_mobile_bounce_out {
      animation-duration: 300ms;
      animation-name: fb_mpn_bounce_out;
      transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_in_v2 {
      animation-duration: 300ms;
      animation-name: fb_bounce_in_v2;
      transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_in_from_left {
      animation-duration: 300ms;
      animation-name: fb_bounce_in_from_left;
      transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_out_v2 {
      animation-duration: 300ms;
      animation-name: fb_bounce_out_v2;
      transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_out_from_left {
      animation-duration: 300ms;
      animation-name: fb_bounce_out_from_left;
      transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_in_v2_mobile_chat_started {
      animation-duration: 300ms;
      animation-name: fb_bounce_in_v2_mobile_chat_started;
      transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_out_v2_mobile_chat_started {
      animation-duration: 300ms;
      animation-name: fb_bounce_out_v2_mobile_chat_started;
      transition-timing-function: ease-in
    }

    .fb_customer_chat_bubble_pop_in {
      animation-duration: 250ms;
      animation-name: fb_customer_chat_bubble_bounce_in_animation
    }

    .fb_customer_chat_bubble_animated_no_badge {
      box-shadow: 0 3px 12px rgba(0, 0, 0, .15);
      transition: box-shadow 150ms linear
    }

    .fb_customer_chat_bubble_animated_no_badge:hover {
      box-shadow: 0 5px 24px rgba(0, 0, 0, .3)
    }

    .fb_customer_chat_bubble_animated_with_badge {
      box-shadow: -5px 4px 14px rgba(0, 0, 0, .15);
      transition: box-shadow 150ms linear
    }

    .fb_customer_chat_bubble_animated_with_badge:hover {
      box-shadow: -5px 8px 24px rgba(0, 0, 0, .2)
    }

    .fb_invisible_flow {
      display: inherit;
      height: 0;
      overflow-x: hidden;
      width: 0
    }

    .fb_mobile_overlay_active {
      background-color: #fff;
      height: 100%;
      overflow: hidden;
      position: fixed;
      visibility: hidden;
      width: 100%
    }

    .fb_new_ui_mobile_overlay_active {
      overflow: hidden
    }

    @keyframes fb_mpn_landing_page_slide_in {
      0% {
        border-radius: 50%;
        margin: 0 24px;
        width: 60px
      }

      40% {
        border-radius: 18px
      }

      100% {
        margin: 0 12px;
        width: 100% - 24px
      }
    }

    @keyframes fb_mpn_landing_page_slide_out {
      0% {
        margin: 0 12px;
        transform: scale(1);
        width: 100% - 24px
      }

      60% {
        border-radius: 18px
      }

      100% {
        border-radius: 50%;
        margin: 0 24px;
        transform: scale(1.2);
        width: 60px
      }
    }

    @keyframes fb_mpn_bounce_in {
      0% {
        opacity: .5;
        top: 100%
      }

      100% {
        opacity: 1;
        top: 0
      }
    }

    @keyframes fb_mpn_bounce_out {
      0% {
        opacity: 1;
        top: 0
      }

      100% {
        opacity: .5;
        top: 100%
      }
    }

    @keyframes fb_bounce_in_v2 {
      0% {
        opacity: 0;
        transform: scale(0, 0);
        transform-origin: bottom right
      }

      50% {
        transform: scale(1.03, 1.03);
        transform-origin: bottom right
      }

      100% {
        opacity: 1;
        transform: scale(1, 1);
        transform-origin: bottom right
      }
    }

    @keyframes fb_bounce_in_from_left {
      0% {
        opacity: 0;
        transform: scale(0, 0);
        transform-origin: bottom left
      }

      50% {
        transform: scale(1.03, 1.03);
        transform-origin: bottom left
      }

      100% {
        opacity: 1;
        transform: scale(1, 1);
        transform-origin: bottom left
      }
    }

    @keyframes fb_bounce_in_v2_mobile_chat_started {
      0% {
        opacity: 0;
        top: 20px
      }

      100% {
        opacity: 1;
        top: 0
      }
    }

    @keyframes fb_bounce_out_v2 {
      0% {
        opacity: 1;
        transform: scale(1, 1);
        transform-origin: bottom right
      }

      100% {
        opacity: 0;
        transform: scale(0, 0);
        transform-origin: bottom right
      }
    }

    @keyframes fb_bounce_out_from_left {
      0% {
        opacity: 1;
        transform: scale(1, 1);
        transform-origin: bottom left
      }

      100% {
        opacity: 0;
        transform: scale(0, 0);
        transform-origin: bottom left
      }
    }

    @keyframes fb_bounce_out_v2_mobile_chat_started {
      0% {
        opacity: 1;
        top: 0
      }

      100% {
        opacity: 0;
        top: 20px
      }
    }

    @keyframes fb_customer_chat_bubble_bounce_in_animation {
      0% {
        bottom: 6pt;
        opacity: 0;
        transform: scale(0, 0);
        transform-origin: center
      }

      70% {
        bottom: 18pt;
        opacity: 1;
        transform: scale(1.2, 1.2)
      }

      100% {
        transform: scale(1, 1)
      }
    }
  </style>
</head>

<body style="margin:0;" class="t-body">
  <script type="text/javascript">if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof (sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y') {
      var style = document.createElement('style'); style.type = 'text/css'; style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}'; document.getElementsByTagName('head')[0].appendChild(style); $(document).ready(function () { $('.t-records').addClass('t-records_animated'); setTimeout(function () { $('.t-records').addClass('t-records_visible'); sessionStorage.setItem('visited', 'y'); }, 400); });
    }</script>
  <!--allrecords-->
  <div id="allrecords" class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node"
    data-tilda-project-id="1188119" data-tilda-page-id="5147070" data-tilda-page-alias="main"
    data-tilda-formskey="089eb43547d155c67efc2eb444511bab">
    <div id="rec93482235" class="r t-rec t-rec_pt_0 t-rec_pb_0"
      style="padding-top: 0px; padding-bottom: 0px; opacity: 1;" data-animationappear="off" data-record-type="450">
      <div class="t450__burger_container t450__small " data-appearoffset="" data-hideoffset="" style="top:15px; ">
        <div class="t450__burger_bg t450__burger_cirqle" style="; opacity:0.50;"></div>
        <div class="t450__burger">
          <span style="background-color:#ffffff;"></span>
          <span style="background-color:#ffffff;"></span>
          <span style="background-color:#ffffff;"></span>
          <span style="background-color:#ffffff;"></span>
        </div>
      </div><!-- t450 -->
      <div id="nav93482235marker"></div>
      <div class="t450__overlay ">
        <div class="t450__overlay_bg" style=" "></div>
      </div>
      <div id="nav93482235" class="t450 " data-tooltip-hook="#menuopen" style="max-width: 260px;">
        <div class="t450__close t450_opened ">
          <div class="t450__close_icon">
            <span style="background-color:#ffffff;"></span>
            <span style="background-color:#ffffff;"></span>
            <span style="background-color:#ffffff;"></span>
            <span style="background-color:#ffffff;"></span>
          </div>
        </div>
        <div class="t450__container t-align_left">
          <div class="t450__top">
            <div class="t450__logowrapper">
              <a href="/" target="_blank" style="">
              <div class="t450__logo t-heading t-heading_xs" field="title" style="">{{ $settings->brand }}</div>
              </a>
            </div>
            <div class="t450__menu">
              <ul class="t450__list">
                @foreach($menus as $menu)
                  <li class="t450__list_item">
                    <a class="t-menu__link-item " href="{{ $menu->url }}" data-menu-submenu-hook=""
                    style="color:#ffffff;font-size:24px;" data-menu-item-number="1">{{ $menu->name }}</a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="t450__rightside">
            <div class="t450__rightcontainer">
              <div class="t450__right_descr t-descr t-descr_xs" field="descr" style="">
                <div style="font-size:18px;color:#ffffff;" data-customstyle="yes">
                  <a href="mailto:{{$settings->email}}" style="color: rgb(255, 255, 255);">
                  {{ $settings->email }}<br><br>
                  </a>
                  <a href="tel:{{$settings->phone}}" style="color: rgb(255, 255, 255);">
                    <span style="color: rgb(255, 255, 255);">{{$settings->phone}}</span>
                  </a>
                  <a href="tel:8(499)350-07-47" style="color: rgb(255, 255, 255);">
                    <strong></strong>
                  </a>
                </div>
              </div>
              <div class="t450__right_share_buttons t450__white-black">
                <script type="text/javascript"
                  src="{{asset('static/ya-share.js')}}"
                  charset="utf-8"></script>
                <div class="ya-share2 ya-share2_inited" data-access-token:facebook="" data-yasharel10n="en"
                  data-services="facebook,vkontakte,twitter" data-counter="">
                  <div class="ya-share2__container ya-share2__container_size_m">
                    <ul class="ya-share2__list ya-share2__list_direction_horizontal">
                      <li class="ya-share2__item ya-share2__item_service_facebook">
                        <a class="ya-share2__link"
                          href="https://www.facebook.com/sharer.php?src=sp&amp;u=https%3A%2F%2Funitedinvestors.ru%2F&amp;title=United%20Investors%20%E2%80%94%20%D0%BF%D1%80%D1%8F%D0%BC%D1%8B%D0%B5%20%D0%B8%D0%BD%D0%B2%D0%B5%D1%81%D1%82%D0%B8%D1%86%D0%B8%D0%B8%20%D0%B2%20%D1%80%D0%B0%D1%81%D1%82%D1%83%D1%89%D0%B8%D0%B5%20%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81%D1%8B&amp;utm_source=share2"
                          rel="nofollow noopener" target="_blank" title="Facebook">
                          <span class="ya-share2__badge">
                            <span class="ya-share2__icon"></span>
                            <span class="ya-share2__counter"></span>
                          </span>
                          <span class="ya-share2__title">Facebook</span>
                        </a>
                      </li>
                      <li class="ya-share2__item ya-share2__item_service_vkontakte">
                        <a class="ya-share2__link"
                          href="https://vk.com/share.php?url=https%3A%2F%2Funitedinvestors.ru%2F&amp;title=United%20Investors%20%E2%80%94%20%D0%BF%D1%80%D1%8F%D0%BC%D1%8B%D0%B5%20%D0%B8%D0%BD%D0%B2%D0%B5%D1%81%D1%82%D0%B8%D1%86%D0%B8%D0%B8%20%D0%B2%20%D1%80%D0%B0%D1%81%D1%82%D1%83%D1%89%D0%B8%D0%B5%20%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81%D1%8B&amp;utm_source=share2"
                          rel="nofollow noopener" target="_blank" title="ВКонтакте">
                          <span class="ya-share2__badge">
                            <span class="ya-share2__icon"></span>
                            <span class="ya-share2__counter"></span>
                          </span>
                          <span class="ya-share2__title">ВКонтакте</span>
                        </a>
                      </li>
                      <li class="ya-share2__item ya-share2__item_service_twitter">
                        <a class="ya-share2__link"
                          href="https://twitter.com/intent/tweet?text=United%20Investors%20%E2%80%94%20%D0%BF%D1%80%D1%8F%D0%BC%D1%8B%D0%B5%20%D0%B8%D0%BD%D0%B2%D0%B5%D1%81%D1%82%D0%B8%D1%86%D0%B8%D0%B8%20%D0%B2%20%D1%80%D0%B0%D1%81%D1%82%D1%83%D1%89%D0%B8%D0%B5%20%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81%D1%8B&amp;url=https%3A%2F%2Funitedinvestors.ru%2F&amp;utm_source=share2"
                          rel="nofollow noopener" target="_blank" title="Twitter">
                          <span class="ya-share2__badge">
                            <span class="ya-share2__icon"></span>
                          </span>
                          <span class="ya-share2__title">Twitter</span>
                        </a>
                      </li>
                    </ul>
                    <iframe class="ya-share2__iframe"
                      src="{{asset('static/frame.html')}}"
                      style="border: 0; display: none; position: absolute; left: -9999px;"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <script type="text/javascript">$(document).ready(function () {
          $("#rec93482235").attr('data-animationappear', 'off'); $("#rec93482235").css('opacity', '1'); t450_initMenu('93482235');
        });</script>


      <script
        type="text/javascript"> $(document).ready(function () { setTimeout(function () { t_menusub_init('93482235'); }, 500); });</script>


      <style>
        @media screen and (max-width: 980px) {
          #rec93482235 .t-menusub__menu .t-menusub__link-item {
            color: #ffffff !important;
          }

          #rec93482235 .t-menusub__menu .t-menusub__link-item.t-active {
            color: #ffffff !important;
          }
        }
      </style>
    </div>
    <div id="rec93434651" class="r t-rec t-rec_pt_60 t-rec_pb_60 r_anim"
      style="padding-top:60px;padding-bottom:60px; " data-record-type="563">
      <!-- T563 -->
      <div class="t563">
        <div class="t-section__container t-container">
          <div class="t-col t-col_12">
            <div class="t-section__topwrapper t-align_center">
              <img src="/static/unicorns.png" alt="Unicorns.uz"/ height="100">
              <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSegoj6T2YS38dsv7NAxfNtQGp5-kXtPPy3Ct128pYkJU3cKuw/viewform?embedded=true" width="100%" height="1850" frameborder="0" marginheight="0" marginwidth="0">Загрузка…</iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--footer-->
    <div id="t-footer" class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node"
      data-tilda-project-id="1188119" data-tilda-page-id="8848517" data-tilda-page-alias="footer"
      data-tilda-formskey="089eb43547d155c67efc2eb444511bab">
      <div id="rec153002989" class="r t-rec t-rec_pt_75 t-rec_pb_75"
        style="padding-top:75px;padding-bottom:75px;background-color:#111111; " data-animationappear="off"
        data-record-type="447" data-bg-color="#111111">
        <!-- T447 -->
        <div class="t447">
          <div class="t-container t-align_left">
            <div class="t447__col t-col t-col_3">
              <div class="t447__title t-name t-name_xs t447__title_uppercase" field="title"
                style="color: #525252;text-transform:uppercase;">@lang('home.contact')</div>
              <div class="t447__descr t-descr t-descr_xxs" field="descr" style="color: #ffffff;">
                <ul>
                <li><a href="mailto:{{ $settings->email }}"
                      style="color: rgb(255, 133, 98); font-family: Arial, Arial, sans-serif; font-size: 14px; font-weight: 600; background-color: rgb(17, 17, 17);">{{ $settings->email }}</a>
                  </li>
                  <li></li>
                  <li><a href="tel:{{ $settings->phone }}"
                      style="color: rgb(255, 255, 255); font-family: Arial, Arial, sans-serif; font-size: 14px; font-weight: 600; background-color: rgb(17, 17, 17);"><span
                        style="color: rgb(255, 255, 255);">{{ $settings->phone }}</span></a></li>
                  <li></li>
                  <li></li>
                </ul>
                <ul> </ul>
              </div>
            </div>
            <div class="t447__col t-col t-col_3">
              <div class="t447__title t-name t-name_xs t447__title_uppercase" field="title2"
                style="color: #525252;text-transform:uppercase;">@lang('home.invest')</div>
                @if ($settings->button1 or $settings->button2)
              <div class="t447__descr t-descr t-descr_xxs" field="descr2" style="color: #ffffff;">
                <ul>
                <li><a href="{{$settings->url1}}" style="" target="_blank">{{$settings->button1}}</a></li>
                <li><a href="{{$settings->url2}}" target="_blank" style="">{{$settings->button2}}</a></li>
                </ul>
              </div>
              @endif
            </div>
            <div class="t447__floatbeaker_lr3"></div>
            <div>
              <div class="t447__col t-col t-col_3">
                <div class="t447__title t-name t-name_xs t447__title_uppercase" field="title4"
                  style="color: #525252;text-transform:uppercase;">@lang('home.news')</div>
                <div class="t-sociallinks">
                  <div class="t-sociallinks__wrapper">
                    <div class="t-sociallinks__item"> 
                      <a href="https://www.facebook.com/unitedinvestors.ru/"
                        target="_blank"> <svg class="t-sociallinks__svg" version="1.1" id="Layer_1"
                          xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48"
                          xml:space="preserve">
                          <desc>Facebook</desc>
                          <path style="fill:#525252;"
                            d="M21.1 7.8C22.5 6.5 24.5 6 26.4 6h6v6.3h-3.9c-.8-.1-1.6.6-1.8 1.4v4.2h5.7c-.1 2-.4 4.1-.7 6.1h-5v18h-7.4V24h-3.6v-6h3.6v-5.9c.1-1.7.7-3.3 1.8-4.3z">
                          </path>
                        </svg> </a>
                        <a href="https://www.facebook.com/unitedinvestors.ru/"
                        target="_blank"> <svg class="t-sociallinks__svg" version="1.1" id="Layer_1"
                          xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48"
                          xml:space="preserve">
                          <desc>Instagram</desc>
                          <path style="fill:#525252;"
                            d="M21.1 7.8C22.5 6.5 24.5 6 26.4 6h6v6.3h-3.9c-.8-.1-1.6.6-1.8 1.4v4.2h5.7c-.1 2-.4 4.1-.7 6.1h-5v18h-7.4V24h-3.6v-6h3.6v-5.9c.1-1.7.7-3.3 1.8-4.3z">
                          </path>
                        </svg> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="t-row t-clear">
              <div class="t447__col t-col t-col_3">
              <div class="t447__text t-descr t-descr_xxs" style="" field="text">© 2020 {{ $settings->brand }}</div>
              </div>
              <div class="t447__col t-col t-col_3">
                <div class="t447__text t-descr t-descr_xxs" style="" field="text">
                  @if (app()->getLocale() === "uz")
                    <a href="/ru" style="font-size: 17px; color: white; font-weight: bold;">
                      <img src="{{ asset('static/ru.png') }}" alt="Russian"> Русский
                    </a>
                  @else
                    <a href="/uz" style="font-size: 17px; color: white; font-weight: bold;">
                      <img src="{{ asset('static/uz.png') }}" alt="Uzbekistan"> O'zbekcha
                    </a>
                  @endif
                </div>
              </div>
              <div class="t447__col t-col t-col_3 t-prefix_6"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/footer-->
  </div>
  <!--/allrecords-->

</body>

</html>