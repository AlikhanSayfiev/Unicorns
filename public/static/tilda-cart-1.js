function tcart__init(t,r){window.tcart__ymapApiKey=r;var o=$(".t706");if(void 0!==window.tcart_initted&&"yes"==window.tcart_initted&&o.length>1){var a='<div style="color:red;">Error: Two cart widgets on the page</div>';return $(".t706__previewmode-infobox center").append(a),void console.error("Error: Two cart widgets (block ST100) on the page. Remove a duplicate.")}var i=o.attr("data-cart-dontstore");void 0!==i&&"y"==i&&(window.tcart_dontstore="y"),i=o.attr("data-cart-oneproduct"),void 0!==i&&"y"==i&&(window.tcart_oneproduct="y"),i=o.attr("data-cart-maxstoredays"),void 0!==i&&""!=i&&i>=0&&(window.tcart_maxstoredays=i),i=o.attr("data-cart-sendevent-onadd"),void 0!==i&&"y"==i&&(window.tcart_sendevent_onadd="y"),window.tcart_initted="yes",tcart__drawBottomTotalAmount(),tcart__loadLocalObj(),tcart__reDrawCartIcon(),setTimeout(function(){tcart__addEvent__links()},500),setTimeout(function(){tcart__addEvent__links()},3e3),tcart__addEvents(),setTimeout(function(){tcart__addEvent__selectpayment()}),$("#rec"+t).attr("data-animationappear","off"),$("#rec"+t).css("opacity","1"),o.find(".t-input-group_dl").length?($(".t706__cartwin-prodamount-label").html(tcart__dict(2,"Subtotal")+":&nbsp;"),$(".t706__cartwin-totalamount-label").html(tcart__dict(3,"Total")+":&nbsp;")):($(".t706__cartwin-prodamount-label").html(tcart__dict(1,"Total")+":&nbsp;"),$(".t706__cartwin-totalamount-label").html(tcart__dict(1,"Total")+":&nbsp;")),""==$(".t706__cartwin-heading").html()&&$(".t706__cartwin-heading").html(tcart__dict(4,"Your order")+":"),"Submit"==$(".t706 .t-form__submit .t-submit").html()&&$(".t706 .t-form__submit .t-submit").html(tcart__dict(5,"Submit order")),o.find(".t-input-group_pm").length&&o.find(".t-input-group_pm").find(".t-input-title").html(tcart__dict(6,"Payment method")),$(".t-form__submit").on({mouseenter:function(){$(".t706__minimal").addClass("active")},mouseleave:function(){$(".t706__minimal").removeClass("active")}})}function tcart__dict(t){var r=[];r[1]={EN:"Total",RU:"Сумма",FR:"Total",DE:"Gesamtsumme",ES:"Total",PT:"Total",UK:"Сума",JA:"合計",ZH:"总额。"},r[2]={EN:"Subtotal",RU:"Сумма",FR:"Sous-total",DE:"Zwischensumme",ES:"Subtotal",PT:"Subtotal",UK:"Сума",JA:"小計",ZH:"小计。"},r[3]={EN:"Total",RU:"Итоговая сумма",FR:"Total",DE:"Gesamtsumme",ES:"Total",PT:"Total",UK:"Підсумкова сума",JA:"合計",ZH:"总额。"},r[4]={EN:"Your order",RU:"Ваш заказ",FR:"Votre commande",DE:"Ihre Bestellung",ES:"Su pedido",PT:"Seu pedido",UK:"Ваше замовлення",JA:"注文済",ZH:"你的订货。"},r[5]={EN:"Submit order",RU:"Оформить заказ",FR:"Commander",DE:"Bestellung abschicken",ES:"Enviar pedido",PT:"Enviar pedido",UK:"Оформити замовлення",JA:"注文を確定",ZH:"办妥订货。"},r[6]={EN:"Payment method",RU:"Способ оплаты",FR:"Mode de paiement",DE:"Zahlungsmethode",ES:"Método de pago",PT:"Método de pagamento",UK:"Спосіб оплати",JA:"支払方法",ZH:"付款方式。"},r[7]={EN:"Click to order\t",RU:"Оформить заказать",FR:"Commander",DE:"Bestellung abschicken",ES:"Enviar pedido",PT:"Enviar pedido",UK:"Оформити замовлення",JA:"注文を確定",ZH:"提交订单。"},r[8]={EN:"Subtotal with discount",RU:"Сумма со скидкой",FR:"Sous-total avec remise",DE:"Zwischensumme mit Rabatt",ES:"Subtotal con descuento",PT:"Subtotal com desconto",UK:"Сума зі знижкою",JA:"割引後小計",ZH:"减价同小计。"},r[9]={EN:"Promo code",RU:"Промокод",FR:"Code promo",DE:"Aktionscode",ES:"Código promocional",PT:"Código promocional",UK:"Промокод",JA:"プロモコード",ZH:"促销代码。"},r[10]={EN:"Discount",RU:"Скидка",FR:"Remise",DE:"Rabatt",ES:"Descuento",PT:"Desconto",UK:"Знижка",JA:"割引",ZH:"减价。"},r[11]={EN:"Minimum order",RU:"Минимальный заказ",FR:"Commande minimale",DE:"Minimale Bestellung",ES:"Pedido mínimo",PT:"Pedido mínimo",UK:"Мінімальне замовлення",JA:"最小注文価格",ZH:"最小的订货。"},r[12]={EN:"Minimum order quantity",RU:"Минимальное количество в заказе",FR:"Quantité de commande minimale",DE:"Mindestbestellmenge",ES:"Cantidad mínima del pedido",PT:"Quantidade mínima por pedido",UK:"Мінімальна кількість у замовленні",JA:"最小注文数",ZH:"最小的总数。"},r[13]={EN:"Sorry, limit has been reached. This is the maximum quantity of goods in stock",RU:"Извините, достигнут лимит. Это максимально возможное количество товаров в наличии"},r[14]={EN:"free",RU:"бесплатно",FR:"gratuit",DE:"kostenlos",ES:"gratis",PT:"livre",UK:"безкоштовно",JA:"無料で",ZH:"免费"},r[15]={EN:"Street",RU:"Улица",UK:"Вулиця"},r[16]={EN:"House",RU:"Дом",UK:"Будинок"},r[17]={EN:"Entrance",RU:"Подъезд",UK:"Під’їзд"},r[18]={EN:"Floor",RU:"Этаж",UK:"Поверх"},r[19]={EN:"Apt/Office",RU:"Квартира/офис",UK:"Квартира/офіс"},r[20]={EN:"Phone",RU:"Телефон",UK:"Телефон"},r[21]={EN:"Entrance code",RU:"Домофон",UK:"Домофон"},r[22]={EN:"Comment",RU:"Комментарий",UK:"Коментар"},r[23]={EN:"City",RU:"Город",UK:"Місто"},r[24]={EN:"Select pickup location",RU:"Выберите пункт получения",UK:"Виберіть пункт отримання"},r[25]={EN:"day",RU:"дня",UK:"дні"},r[26]={EN:"days",RU:"дней",UK:"днів"},r[27]={EN:"from",RU:"от",UK:"від"},r[28]={EN:"rubles",RU:"рублей",UK:"рублів"},r[29]={EN:"Unfortunately, delivery to your chosen city is not possible",RU:"К сожалению, в выбранный вами город доставка не осуществляется",UK:"На жаль, в обране місто доставка не здійснюється"},r[30]={EN:"Delivery",RU:"Доставка",UK:"Доставка"},r[31]={EN:"Address",RU:"Адрес",UK:"Адреса"},r[32]={EN:"Cannot find address in database",RU:"Не удается найти адрес в базе",UK:"Неможливо знайти адресу в базі"},r[33]={EN:"Pickup location",RU:"Пункт получения",UK:"Пункт отримання"},r[34]={EN:"Please select an address from the options provided",RU:"Пожалуйста, выберите адрес из предложенных вариантов",UK:"Будь ласка, виберіть адресу із запропонованих варіантів"},r[35]={EN:"Please select an city from the options provided",RU:"Пожалуйста, выберите город из предложенных вариантов",UK:"Будь ласка, виберіть місто із запропонованих варіантів"},r[36]={EN:"Order comment",RU:"Комментарий к заказу",UK:"Коментар до замовлення"},r[37]={EN:"Select",RU:"Выбрать",UK:"Вибрати"},r[38]={EN:"Phones",RU:"Телефоны",UK:"Телефони"},r[39]={EN:"Phone",RU:"Телефон",UK:"Телефон"},r[40]={EN:"Working hours",RU:"Время работы",UK:"Час роботи"},r[41]={EN:"Delivery data for manager",RU:"Данные о доставке для менеджера",UK:"Деталі доставки для менеджера"},r[42]={EN:"Delivery service temporarily unavailable. Please, leave the delivery address in comments, the manager will contact you to confirm the order as soon as possible.",RU:'К сожалению, в данный момент сервис доставки недоступен. Пожалуйста, укажите адрес доставки в свободной форме в поле "Комментарий", менеджер магазина свяжется с Вами для оформления заказа в ближайшее время по предоставленным контактным данным.',UK:"Служба доставки тимчасово не працює. Будь ласка, залиште адресу доставки в коментарях, менеджер зв’яжеться з вами, щоб підтвердити замовлення якнайшвидше."},r[43]={EN:"Receiving delivery services",RU:"Получение сервисов доставки",UK:"Отримання сервісів доставки"},r[44]={EN:"Getting a list of points of issue of orders",RU:"Получение списка пунктов выдачи заказов",UK:"Отримання списку пунктів видачі замовлень"},r[45]={EN:"No results were found for your request",RU:"По Вашему запросу ничего не найдено",UK:"За вашим запитом нічого не знайдено"},r[46]={EN:"Change",RU:"Изменить",UK:"Змінити"},r[47]={EN:"Full name",RU:"Получатель (ФИО полностью)",UK:"Одержувач (ПІБ повністю)"},r[48]={EN:"Ivanov Ivan Ivanovich",RU:"Иванов Иван Иванович",UK:"Іванов Іван Іванович"};var o=window.browserLang;return void 0!==r[t]?void 0!==r[t][o]&&""!=r[t][o]?r[t][o]:r[t].EN:"Text not found #"+t}function tcart__nullObj(){var t={products:[],prodamount:0,amount:0,system:""};return t}function tcart__loadLocalObj(){var t,r,o=null;if("object"==typeof localStorage)try{o=localStorage.getItem("tcart")}catch(t){console.error("Your web browser does not support storing a Cart data locally.")}if(window.tcart=null===o?tcart__nullObj():JSON.parse(o),void 0!==window.tcart_maxstoredays&&""!=window.tcart_maxstoredays){var a=window.tcart_maxstoredays;a>0?void 0!==window.tcart.updated&&window.tcart.updated>0&&(t=Math.floor(Date.now()/1e3),r=1*t-1*window.tcart.updated,r>86400*a&&(window.tcart=tcart__nullObj())):"0"==a&&(window.tcart=tcart__nullObj())}else void 0!==window.tcart.updated&&window.tcart.updated>0&&(t=Math.floor(Date.now()/1e3),r=1*t-1*window.tcart.updated,r>2592e3&&(window.tcart=tcart__nullObj()));void 0!==window.tcart_dontstore&&"y"==window.tcart_dontstore&&(window.tcart=tcart__nullObj()),delete window.tcart.currency,delete window.tcart.currency_txt,delete window.tcart.currency_txt_l,delete window.tcart.currency_txt_r,delete window.tcart.currency_side,delete window.tcart.currency_sep,delete window.tcart.currency_dec,window.tcart.currency="$",window.tcart.currency_side="l",window.tcart.currency_sep=".",window.tcart.currency_dec="",void 0!==window.tcart.delivery&&delete window.tcart.delivery,void 0!==window.tcart.promocode&&delete window.tcart.promocode;var i=$(".t706").attr("data-project-currency");void 0!==i&&""!=i&&(window.tcart.currency=i),window.tcart.currency_txt=window.tcart.currency,i=$(".t706").attr("data-project-currency-side"),void 0!==i&&"r"==i&&(window.tcart.currency_side="r"),"l"==window.tcart.currency_side?(window.tcart.currency_txt_l=window.tcart.currency_txt+"",window.tcart.currency_txt_r=""):(window.tcart.currency_txt_r="&nbsp;"+window.tcart.currency_txt,window.tcart.currency_txt_l=""),i=$(".t706").attr("data-project-currency-sep"),void 0===i||"."!=i&&","!=i?"$"==window.tcart.currency||"€"==window.tcart.currency||"USD"==window.tcart.currency||"EUR"==window.tcart.currency?window.tcart.currency_sep=".":window.tcart.currency_sep=",":window.tcart.currency_sep=i,i=$(".t706").attr("data-project-currency-dec"),window.tcart.currency_dec=void 0!==i&&"00"==i?i:"",delete window.tcart.system;var e=$(".t706").attr("data-payment-system");window.tcart.system=void 0!==e&&""!=e?e:"none";var c=$(".t706").attr("data-cart-minorder");void 0!==c&&""!=c&&c>0&&void 0===window.tcart_minorder&&(c*=1,window.tcart_minorder=c,$(".t706__cartwin-prodamount-wrap").prepend('<div class="t706__cartwin-prodamount-minorder t706__minimal"><span>'+tcart__dict(11,"Minimum order")+": "+tcart__showPrice(c)+"</span></div>"),$(".t706__cartwin-totalamount-wrap").prepend('<div class="t706__cartwin-prodamount-minorder t706__minimal"><span>'+tcart__dict(11,"Minimum order")+": "+tcart__showPrice(c)+"</span></div>"),$(".js-errorbox-all .t-form__errorbox-text").append('<p data-rule-filled="true" class="t-form__errorbox-item js-rule-error js-rule-error-minorder" style="display: none;">'+tcart__dict(11,"Minimum order")+": "+tcart__showPrice(c)+"</p>"));var n=$(".t706").attr("data-cart-mincntorder");void 0!==n&&""!=n&&n>0&&void 0===window.tcart_mincntorder&&(n*=1,window.tcart_mincntorder=n,$(".t706__cartwin-prodamount-wrap").prepend('<div class="t706__cartwin-prodamount-mincntorder t706__minimal"><span>'+tcart__dict(12,"Minimum quantity")+": "+n+"</span></div>"),$(".t706__cartwin-totalamount-wrap").prepend('<div class="t706__cartwin-prodamount-mincntorder t706__minimal"><span>'+tcart__dict(12,"Minimum quantity")+": "+n+"</span></div>"),$(".js-errorbox-all .t-form__errorbox-text").append('<p data-rule-filled="true"  class="t-form__errorbox-item js-rule-error js-rule-error-minquantity" style="display: none;">'+tcart__dict(12,"Minimum quantity")+": "+n+"</p>")),tcart__addDelivery(),tcart__updateTotalProductsinCartObj()}function tcart__saveLocalObj(){if(!(void 0!==window.tcart_dontstore&&"y"==window.tcart_dontstore||void 0!==window.tcart_maxstoredays&&0==window.tcart_maxstoredays)){if("object"==typeof window.tcart){window.tcart.updated=Math.floor(Date.now()/1e3);var t=JSON.stringify(window.tcart);if("object"==typeof localStorage)try{localStorage.setItem("tcart",t)}catch(t){console.error("Your web browser does not support storing a Cart data locally.")}}window.tcart_newDeliveryActive&&window.tcart.amount&&window.tcart.total&&tcart__rerenderDeliveryServices()}}function tcart__syncProductsObject__LStoObj(){if(!(void 0!==window.tcart_dontstore&&"y"==window.tcart_dontstore||void 0!==window.tcart_maxstoredays&&0==window.tcart_maxstoredays||"object"!=typeof localStorage))try{var t=localStorage.getItem("tcart"),r=JSON.parse(t);"object"==typeof r.products&&(window.tcart.products=r.products,tcart__updateTotalProductsinCartObj())}catch(t){}}function tcart__addEvents(){$(".t706__carticon").click(function(){tcart__openCart()}),$(".t706__cartwin-close").click(function(){tcart__closeCart()}),$(".t706__cartwin-closebtn").click(function(){tcart__closeCart()}),$(".t706").find(".js-form-proccess").attr("data-formcart","y"),$(".t706__cartwin").mousedown(function(t){if(t.target==this){var r=$(window).width(),o=17,a=r-o;if(t.clientX>a)return;tcart__closeCart()}})}function tcart__addEvent__links(){$('[href^="#order"]').not("[data-link-event-setted]").on("click",function(t){t.preventDefault();var r=$(this),o=r.closest("form");if(o.length){var a=window.tildaForm.validate(o);if(window.tildaForm.showErrors(o,a))return!1}if(r.attr("data-link-event-setted","yes"),void 0===r.attr("data-dbclk-prevent")||"yes"!=r.attr("data-dbclk-prevent")){r.attr("data-dbclk-prevent","yes"),setTimeout(function(){r.removeAttr("data-dbclk-prevent")},1e3),$("body").hasClass("t-body_popupshowed")&&($("body").removeClass("t-body_popupshowed"),$(".t-popup").removeClass("t-popup_show"),setTimeout(function(){$(".t-popup").not(".t-popup_show").css("display","none")},300),tcart__clearProdUrl());var i=r.attr("href"),e="0",c="",n="",d="",s="",_="",l="",w="",u="",p="",m="",v="",y="";if("#order:"==i.substring(0,7)){var f=i.substring(7);if(void 0!==f&&""!=f){if(f.indexOf(":::")>0){var h=f.indexOf(":::");if(f.indexOf("=")>0&&f.indexOf("=")<f.indexOf(":::")){var b=f.substring(h+3);f=f.substring(0,h)}}if(f.indexOf("=")>0){var g=f.split("=");void 0!==g[0]&&(c=g[0]),void 0!==g[1]&&(e=g[1]),e=tcart__cleanPrice(e)}else c=f;if(void 0!==b&&""!=b&&b.indexOf("=")>0){g=b.split("=");void 0!==g[0]&&void 0!==g[1]&&""!=g[0]&&""!=g[1]&&"image"==g[0]&&g[1].indexOf("tildacdn.com")>0&&(n=g[1])}""==l&&(l=r.closest(".r").attr("id").replace("rec",""),void 0===l&&(l=""))}}var U=$(this).closest(".js-product");if(void 0!==U){if(""==c&&(c=U.find(".js-product-name").text(),void 0===c&&(c="")),""!=e&&0!=e||(e=U.find(".js-product-price").text(),e=tcart__cleanPrice(e)),""==n)if(void 0!==U.attr("data-product-img")&&""!=U.attr("data-product-img"))n=U.attr("data-product-img");else{var E=U.find(".js-product-img");if(void 0!==E&&(E.is("img")&&(n=E.attr("src")),E.is("div"))){n="";var S=E.css("background-image");void 0!==S&&""!=S&&(n=S.replace("url(","").replace(")","").replace(/\"/gi,""))}}""==s&&(s=U.attr("data-product-lid"),void 0===s&&(s="")),""==_&&(_=U.attr("data-product-uid"),void 0===_&&(_="")),""==l&&(l=U.closest(".r").attr("id").replace("rec",""),void 0===l&&(l="")),""==w&&(w=U.attr("data-product-inv"),void 0===w&&(w=""));var k=[];U.find(".js-product-edition-option").each(function(){var t=$(this),r=t.find(".js-product-edition-option-name").text(),o=t.find("option:selected").val(),a=t.find("option:selected").attr("data-product-edition-variant-price");if(a=tcart__cleanPrice(a),void 0!==r&&void 0!==o){var i={};""!=r&&(r=tcart__escapeHtml(r)),""!=o&&(o=tcart__escapeHtml(o),o=o.replace(/(?:\r\n|\r|\n)/g,"")),r.length>1&&":"==r.charAt(r.length-1)&&(r=r.substring(0,r.length-1)),i.option=r,i.variant=o,i.price=a,k.push(i)}}),U.find(".js-product-option").each(function(){var t=$(this),r=t.find(".js-product-option-name").text(),o=t.find("option:selected").val(),a=t.find("option:selected").attr("data-product-variant-price");if(a=tcart__cleanPrice(a),void 0!==r&&void 0!==o){var i={};""!=r&&(r=tcart__escapeHtml(r)),""!=o&&(o=tcart__escapeHtml(o),o=o.replace(/(?:\r\n|\r|\n)/g,"")),r.length>1&&":"==r.charAt(r.length-1)&&(r=r.substring(0,r.length-1)),i.option=r,i.variant=o,i.price=a,k.push(i)}}),""==d&&(d=U.find(".js-product-sku").text(),void 0===d&&(d="")),""==u&&(u=U.attr("data-product-pack-label"),void 0===u&&(u="")),""==p&&(p=U.attr("data-product-pack-m"),void 0===p&&(p="")),""==m&&(m=U.attr("data-product-pack-x"),void 0===m&&(m="")),""==v&&(v=U.attr("data-product-pack-y"),void 0===v&&(v="")),""==y&&(y=U.attr("data-product-pack-z"),void 0===y&&(y=""))}var P=U.attr("data-product-url"),x=U.find('a[href="#order"]').not(".t-btn").length,j=U.find(".js-product-link").not('[href="#prodpopup"]').not('[href="#order"]').attr("href");if(void 0===P&&j?P=j:void 0===P&&l&&s&&!x?P=window.location.origin+window.location.pathname+"#!/tproduct/"+l+"-"+s:void 0===P&&(P=window.location.origin+window.location.pathname+"#rec"+l),""!=c||""!=e&&0!=e){""==c&&(c="NoName"),""==e&&(e=0),""!=c&&(c=tcart__escapeHtml(c)),""!=n&&(n=tcart__escapeHtmlImg(n));var T={};if(T.name=c,T.price=e,T.img=n,T.recid=l,T.lid=s,T.pack_label=u,T.pack_m=p,T.pack_x=m,T.pack_y=v,T.pack_z=y,T.url=P,void 0!==k&&k.length>0&&(T.options=k),void 0!==d&&""!=d&&(d=tcart__escapeHtml(d),T.sku=d),void 0!==_&&""!=_&&(T.uid=_),void 0!==s&&""!=s&&(T.lid=s),void 0!==w&&w>0&&(T.inv=parseInt(w,10)),tcart__addProduct(T),void 0!==window.tcart_sendevent_onadd&&"y"==window.tcart_sendevent_onadd)try{Tilda.sendEcommerceEvent("add",[T])}catch(t){if(window.Tilda&&"function"==typeof Tilda.sendEventToStatistics){var D="/tilda/cart/add/";l>0&&(D+=l),_&&_>0?D+="-u"+_:s&&s>0&&(D+="-"+s);var O=c,C=e;Tilda.sendEventToStatistics(D,O,window.location.href,C)}}}}})}function tcart__addProduct(t){var r=Math.floor(Date.now()/1e3);tcart__syncProductsObject__LStoObj();var o=window.tcart.products,a="";o.length>0&&$.each(o,function(o,i){if(void 0!==window.tcart_oneproduct&&"y"==window.tcart_oneproduct){if(i.name==t.name&&i.price==t.price){if(void 0===i.options&&void 0===t.options&&void 0===i.sku&&void 0===t.sku)return a="yes",!1;if(void 0===i.options&&void 0===t.options&&void 0!==i.sku&&void 0!==t.sku&&i.sku==t.sku)return a="yes",!1}}else if(i.name==t.name&&i.price==t.price){var e="y",c="";if("object"==typeof i.options&&"object"==typeof t.options&&$.each(i.options,function(r,o){if("object"==typeof o&&"object"==typeof t.options[r]){if(o.option!==t.options[r].option||o.variant!==t.options[r].variant||o.price!==t.options[r].price)return e=!1}else if(void 0===o||void 0===t.options[r])return e=!1}),(void 0===i.sku&&void 0===t.sku||i.sku==t.sku)&&(c="y"),"y"==e&&"y"==c)return window.tcart.products[o].quantity>0&&void 0!==t.inv&&t.inv>0&&window.tcart.products[o].quantity==t.inv?(alert(tcart__dict(13,"Sorry, limit reached, this is the maximum quantity of goods in stock")),a="yes",!1):(window.tcart.products[o].quantity++,window.tcart.products[o].amount=window.tcart.products[o].price*window.tcart.products[o].quantity,window.tcart.products[o].amount=tcart__roundPrice(window.tcart.products[o].amount),window.tcart.products[o].ts=r,a="yes",!1)}}),""==a&&(t.amount=t.price,t.quantity=1,t.ts=r,window.tcart.products.push(t)),tcart__updateTotalProductsinCartObj(),tcart__reDrawCartIcon(),tcart__saveLocalObj(),"yes"==$(".t706").attr("data-opencart-onorder")?setTimeout(function(){tcart__openCart()},10):($(".t706__carticon").addClass("t706__carticon_neworder"),setTimeout(function(){$(".t706__carticon").removeClass("t706__carticon_neworder")},2e3))}function tcart__updateTotalProductsinCartObj(){var t=window.tcart.products;if(t.length>0){var r=0,o=0;$.each(t,function(t,a){r+=1*a.quantity,o=1*o+1*a.amount}),o=tcart__roundPrice(o),window.tcart.total=r,window.tcart.prodamount=o;var a=o;if("object"==typeof window.tcart.promocode&&void 0!==window.tcart.promocode.promocode&&""!=window.tcart.promocode.promocode){var i=0;void 0!==window.tcart.promocode.discountsum&&window.tcart.promocode.discountsum>0?i=1*window.tcart.promocode.discountsum:void 0!==window.tcart.promocode.discountpercent&&window.tcart.promocode.discountpercent>0?i=tcart__roundPrice(a*window.tcart.promocode.discountpercent*1/100):console.error("Cart Some error."),a-=i,a=tcart__roundPrice(a),a<0&&(a=0),window.tcart.prodamount_discountsum=i,window.tcart.prodamount_withdiscount=a}"object"==typeof window.tcart.delivery&&void 0!==window.tcart.delivery.price&&window.tcart.delivery.price>0&&window.tcart.prodamount>0&&(void 0!==window.tcart.delivery.freedl&&window.tcart.delivery.freedl>0&&a>=window.tcart.delivery.freedl||(a+=1*window.tcart.delivery.price)),a>0&&(a=tcart__roundPrice(a)),window.tcart.amount=a}else window.tcart.total=0,window.tcart.prodamount=0,window.tcart.amount=0}function tcart__reDrawCartIcon(){var t=window.tcart,r=$(".t706__carticon");1==t.total&&(r.css("opacity",0),r.animate({opacity:1},300)),t.total>0?(r.addClass("t706__carticon_showed"),r.find(".t706__carticon-counter").html(t.total)):(r.removeClass("t706__carticon_showed"),r.find(".t706__carticon-counter").html("")),$(".t706__carticon-text").html("=&nbsp;"+tcart__showPrice(window.tcart.prodamount))}function tcart__openCart(){$(".t706__carticon").removeClass("t706__carticon_showed"),$("body").addClass("t706__body_cartwinshowed"),setTimeout(function(){tcart__lockScroll()},500),tcart__syncProductsObject__LStoObj();var t=$(".t706__cartwin");if(t.css("opacity",0),t.addClass("t706__cartwin_showed"),t.animate({opacity:1},300),tcart__reDrawProducts(),tcart__reDrawTotal(),$(document).keyup(tcart__keyUpFunc),"y"==window.lazy)try{t_lazyload_update()}catch(t){console.error("js lazyload not loaded")}$(".t706 .t-form .t-radio__wrapper-delivery").each(function(t,r){"y"!==$(r).attr("data-delivery-services")||window.tcart_newDeliveryActive||("undefined"!=typeof tcart_newDelivery&&"function"==typeof tcart_newDelivery.init?tcart_newDelivery.init(window.tcart__ymapApiKey):(jQuery.cachedZoomScript||(jQuery.cachedZoomScript=function(t){var r={dataType:"script",cache:!0,url:t};return jQuery.ajax(r)}),$.cachedZoomScript("https://static.tildacdn.com/js/tilda-delivery-1.0.min.js").done(function(t,r){"success"==r?tcart_newDelivery.init(window.tcart__ymapApiKey):console.log("Upload script failed, error: "+r)})))})}function tcart__reDrawProducts(){var t=$(".t706__cartwin-products"),r=window.tcart.products,o="";if(r.length>0&&$.each(r,function(t,r){""!=r.img&&(o="yes")}),r.length>0){var a="";$.each(r,function(t,r){a+='<div class="t706__product" data-cart-product-i="'+t+'">',"yes"==o&&(a+='<div class="t706__product-thumb"><div class="t706__product-imgdiv" style="background-image:url('+r.img+');"></div></div>'),a+='<div class="t706__product-title t-descr t-descr_sm">',r.url?a+='<a style="color: inherit" target="_blank" href="'+r.url+'">'+r.name+"</a>":a+=r.name,void 0!==r.options&&r.options.length>0&&(a+='<div style="opacity:0.7;font-size:12px;font-weight:400;">',$.each(r.options,function(t,r){a+="<div>"+r.option+": "+r.variant+"</div>"}),a+="</div>"),void 0!==r.sku&&""!=r.sku&&(a+='<div style="opacity:0.7;font-size:12px;font-weight:400;">',a+=r.sku,a+="</div>"),a+="</div>",void 0!==window.tcart_oneproduct&&"y"==window.tcart_oneproduct?a+='<div class="t706__product-plusminus t-descr t-descr_sm" style="display:none;"><span class="t706__product-quantity">'+r.quantity+"</span></div>":a+='<div class="t706__product-plusminus t-descr t-descr_sm"><span class="t706__product-minus"><img src="https://static.tildacdn.com/lib/linea/c8eecd27-9482-6c4f-7896-3eb09f6a1091/arrows_circle_minus.svg" style="width:16px;height:16px;border:0;"></span><span class="t706__product-quantity">'+r.quantity+'</span><span class="t706__product-plus"><img src="https://static.tildacdn.com/lib/linea/c47d1e0c-6880-dc39-ae34-521197f7fba7/arrows_circle_plus.svg" style="width:16px;height:16px;border:0;"></span></div>',a+='<div class="t706__product-amount t-descr t-descr_sm">',r.amount>0&&(a+=tcart__showPrice(r.amount)),a+="</div>",a+='<div class="t706__product-del"><img src="https://static.tildacdn.com/lib/linea/1bec3cd7-e9d1-2879-5880-19b597ef9f1a/arrows_circle_remove.svg" style="width:20px;height:20px;border:0;"></div>',a+="</div>"}),t.html(a),tcart__addEvents__forProducts()}else t.html("")}function tcart__reDrawTotal(){$(".t706__cartwin-prodamount").html(tcart__showPrice(window.tcart.prodamount)),$(".t706__cartwin-totalamount").html(tcart__showPrice(window.tcart.amount));var t,r,o=$(".t706__cartwin-totalamount-info");o.html(""),"object"!=typeof window.tcart.promocode&&"object"!=typeof window.tcart.delivery||(o.css("display","block"),t='<span class="t706__cartwin-totalamount-info_label">'+tcart__dict(2,"Subtotal")+":</span>",r='<span class="t706__cartwin-totalamount-info_value">'+tcart__showPrice(window.tcart.prodamount)+"</span>",o.append(t+r+"<br>")),"object"==typeof window.tcart.promocode&&(t='<span class="t706__cartwin-totalamount-info_label">'+tcart__dict(9,"Promo code")+":</span>",r='<span class="t706__cartwin-totalamount-info_value">'+window.tcart.promocode.promocode+(void 0!==window.tcart.promocode.discountpercent?" "+window.tcart.promocode.discountpercent+"% ":"")+"</span>",o.append(t+r+"<br>"),t='<span class="t706__cartwin-totalamount-info_label">'+tcart__dict(10,"Discount")+":</span>",r='<span class="t706__cartwin-totalamount-info_value">'+tcart__showPrice(window.tcart.prodamount_discountsum)+"</span>",o.append(t+r+"<br>"),window.tcart.prodamount_withdiscount>0?(t='<span class="t706__cartwin-totalamount-info_label">'+tcart__dict(8,"Subtotal with discount")+":</span>",r='<span class="t706__cartwin-totalamount-info_value">'+tcart__showPrice(window.tcart.prodamount_withdiscount)+"</span>",o.append(t+r+"<br>")):(t='<span class="t706__cartwin-totalamount-info_label">'+tcart__dict(8,"Subtotal with discount")+":</span>",r='<span class="t706__cartwin-totalamount-info_value"> 0<br></span>',o.append(t+r))),"object"==typeof window.tcart.delivery&&void 0!==window.tcart.delivery.name&&void 0!==window.tcart.delivery.price&&(window.tcart.delivery.price>0||window.tcart.delivery["service-id"])&&(void 0!==window.tcart.delivery.freedl&&window.tcart.delivery.freedl>0&&window.tcart.prodamount>=window.tcart.delivery.freedl&&(window.tcart.prodamount_withdiscount>=window.tcart.delivery.freedl||void 0===window.tcart.prodamount_withdiscount)?(t='<span class="t706__cartwin-totalamount-info_label">'+window.tcart.delivery.name+":</span>",r='<span class="t706__cartwin-totalamount-info_value"> 0 ('+tcart__dict(14,"free")+")<br></span>",o.append(t+r)):window.tcart.delivery.price>0&&(t='<span class="t706__cartwin-totalamount-info_label">'+window.tcart.delivery.name+":</span>",r='<span class="t706__cartwin-totalamount-info_value">'+tcart__showPrice(window.tcart.delivery.price)+"</span>",o.append(t+r+"<br>"))),0==window.tcart.prodamount?$(".t706__cartwin-prodamount-wrap").css("display","none"):$(".t706__cartwin-prodamount-wrap").css("display","block"),tcart__changeSubmitStatus(),0==window.tcart.amount?$(".t706__cartwin-totalamount-wrap").css("display","none"):window.tcart.prodamount==window.tcart.amount?$(".t706__orderform").length&&$(".t706__orderform").height()>700?$(".t706__cartwin-totalamount-wrap").css("display","block"):$(".t706__cartwin-totalamount-wrap").css("display","none"):$(".t706__cartwin-totalamount-wrap").css("display","block"),void 0!==window.tcart.promocode&&($(".t706__cartwin-totalamount-wrap").css("display","block"),0==window.tcart.amount&&$(".t706__cartwin-totalamount").html("0")),void 0!==window.tcart.delivery&&void 0!==window.tcart.delivery.price&&window.tcart.delivery.price>0&&$(".t706__cartwin-totalamount-wrap").css("display","block"),$(".t706__carticon-text").html("=&nbsp;"+tcart__showPrice(window.tcart.prodamount))}function tcart__changeSubmitStatus(){var t=window.tcart_newDeliveryActive,r=void 0!==window.tcart_minorder&&window.tcart_minorder>0,o=void 0!==window.tcart_mincntorder&&window.tcart_mincntorder>0;if(t&&window.tcart.emtpyDeliveryServices&&($(".t706 .t-form__submit button").addClass("t706__submit_disable"),$(".t706 .t-form__submit button").attr("disabled","disabled")),r&&o){if(r&&(window.tcart.prodamount>=window.tcart_minorder?$(".t706__cartwin-prodamount-minorder").css("display","none"):$(".t706__cartwin-prodamount-minorder").css("display","block")),o&&(window.tcart.total>=window.tcart_mincntorder?$(".t706__cartwin-prodamount-mincntorder").css("display","none"):$(".t706__cartwin-prodamount-mincntorder").css("display","block")),window.tcart.prodamount>=window.tcart_minorder&&window.tcart.total>=window.tcart_mincntorder){if(t&&window.tcart.emtpyDeliveryServices)return;$(".t706").find(".t-submit").removeClass("t706__submit_disable"),$(".t706 .t-form__submit button").attr("disabled",!1)}}else if(r||o){if(r)if(window.tcart.prodamount>=window.tcart_minorder){if(t&&window.tcart.emtpyDeliveryServices)return;$(".t706__cartwin-prodamount-minorder").css("display","none"),$(".t706").find(".t-submit").removeClass("t706__submit_disable"),$(".t706 .t-form__submit button").attr("disabled",!1)}else $(".t706__cartwin-prodamount-minorder").css("display","block");if(o)if(window.tcart.total>=window.tcart_mincntorder){if(t&&window.tcart.emtpyDeliveryServices)return;$(".t706__cartwin-prodamount-mincntorder").css("display","none"),$(".t706").find(".t-submit").removeClass("t706__submit_disable"),$(".t706 .t-form__submit button").attr("disabled",!1)}else $(".t706__cartwin-prodamount-mincntorder").css("display","block")}else t&&!window.tcart.emtpyDeliveryServices&&($(".t706").find(".t-submit").removeClass("t706__submit_disable"),$(".t706 .t-form__submit button").attr("disabled",!1))}function tcart__addEvents__forProducts(){$(".t706__product-plus").click(function(){tcart__product__plus($(this))}),$(".t706__product-minus").click(function(){tcart__product__minus($(this))}),$(".t706__product-del").click(function(){tcart__product__del($(this))}),$(".t706__product-quantity").click(function(){tcart__product__editquantity($(this))})}function tcart__closeCart(){$("body").removeClass("t706__body_cartwinshowed"),tcart__unlockScroll(),void 0!==window.tcart_dontstore&&"y"==window.tcart_dontstore&&("undefind"!=typeof window.tcart&&"undefind"!=typeof window.tcart.products&&(window.tcart.products=[]),tcart__updateTotalProductsinCartObj(),tcart__saveLocalObj(),$(".t706__carticon-counter").html(window.tcart.total),tcart__reDrawTotal(),tcart__reDrawProducts()),window.tcart.total>0&&$(".t706__carticon").addClass("t706__carticon_showed"),tcart__delZeroquantity_inCartObj(),$(document).unbind("keyup",tcart__keyUpFunc),$(".t706__carticon").removeClass("t706__carticon_neworder"),$(".t706__cartwin").animate({opacity:0},300),setTimeout(function(){$(".t706__cartwin").removeClass("t706__cartwin_showed"),$(".t706__cartwin").css("opacity","1")},300),void 0!==window.tcart_success&&"yes"==window.tcart_success&&location.reload()}function tcart__keyUpFunc(t){27==t.keyCode&&tcart__closeCart()}function tcart__product__plus(t){var r=t.closest(".t706__product"),o=r.attr("data-cart-product-i");window.tcart.products[o].quantity>0&&void 0!==window.tcart.products[o].inv&&window.tcart.products[o].inv>0&&window.tcart.products[o].inv==window.tcart.products[o].quantity?alert(tcart__dict(13,"Sorry, limit reached, this is the maximum quantity of goods in stock")):(window.tcart.products[o].quantity++,window.tcart.products[o].amount=window.tcart.products[o].price*window.tcart.products[o].quantity,window.tcart.products[o].amount=tcart__roundPrice(window.tcart.products[o].amount),r.find(".t706__product-quantity").html(window.tcart.products[o].quantity),window.tcart.products[o].amount>0?r.find(".t706__product-amount").html(tcart__showPrice(window.tcart.products[o].amount)):r.find(".t706__product-amount").html(""),tcart__updateTotalProductsinCartObj(),$(".t706__carticon-counter").html(window.tcart.total),tcart__reDrawTotal(),tcart__saveLocalObj())}function tcart__product__minus(t){var r=t.closest(".t706__product"),o=r.attr("data-cart-product-i");window.tcart.products[o].quantity>0&&window.tcart.products[o].quantity--,window.tcart.products[o].amount=window.tcart.products[o].price*window.tcart.products[o].quantity,window.tcart.products[o].amount=tcart__roundPrice(window.tcart.products[o].amount),r.find(".t706__product-quantity").html(window.tcart.products[o].quantity),window.tcart.products[o].amount>0&&r.find(".t706__product-amount").html(tcart__showPrice(window.tcart.products[o].amount)),0==window.tcart.products[o].quantity&&tcart__product__del(t),
tcart__updateTotalProductsinCartObj(),$(".t706__carticon-counter").html(window.tcart.total),tcart__reDrawTotal(),tcart__saveLocalObj()}function tcart__product__del(t){var r=t.closest(".t706__product"),o=r.attr("data-cart-product-i");window.tcart.products.splice(o,1),r.remove(),tcart__updateTotalProductsinCartObj(),$(".t706__carticon-counter").html(window.tcart.total),tcart__reDrawTotal(),tcart__saveLocalObj(),tcart__reDrawProducts(),0==window.tcart.products.length&&tcart__closeCart()}function tcart__product__editquantity(t){var r="";if(!t.find(".t706__product-quantity-inp").length){var o=t.closest(".t706__product"),a=o.attr("data-cart-product-i"),i=t.text();r=0==i||i>0?parseInt(i,10):1;var e='<input type="text" name="tilda-tmp-cart-qnt" class="t706__product-quantity-inp" value="'+r+'" style="width:30px;">';t.html(e),t.addClass("t706__product-quantity_editing");var c=t.find(".t706__product-quantity-inp");c.focus(function(){var t=this;setTimeout(function(){t.selectionStart=t.selectionEnd=1e4},0)}),c.focus(),c.focusout(function(){var r="",i=c.val();i=parseInt(i,10),r=i>0?i:1,tcart__product__updateQuantity(t,o,a,r),t.text(window.tcart.products[a].quantity),t.removeClass("t706__product-quantity_editing")})}}function tcart__product__updateQuantity(t,r,o,a){a>0?(void 0!==window.tcart.products[o].inv&&window.tcart.products[o].inv>0&&a>window.tcart.products[o].inv&&(alert(tcart__dict(13,"Sorry, limit reached, this is the maximum quantity of goods in stock")),a=window.tcart.products[o].inv),window.tcart.products[o].quantity=a,window.tcart.products[o].amount=window.tcart.products[o].price*window.tcart.products[o].quantity,window.tcart.products[o].amount=tcart__roundPrice(window.tcart.products[o].amount),r.find(".t706__product-quantity").html(window.tcart.products[o].quantity),window.tcart.products[o].amount>0?r.find(".t706__product-amount").html(tcart__showPrice(window.tcart.products[o].amount)):r.find(".t706__product-amount").html("")):tcart__product__del(t),tcart__updateTotalProductsinCartObj(),$(".t706__carticon-counter").html(window.tcart.total),tcart__reDrawTotal(),tcart__saveLocalObj(),0==a&&tcart__reDrawProducts()}function tcart__delZeroquantity_inCartObj(){var t=window.tcart.products,r="";t.length>0&&$.each(t,function(t,o){void 0!==o&&0==o.quantity&&(window.tcart.products.splice(t,1),r="yes")}),"yes"==r&&tcart__saveLocalObj()}function tcart__drawBottomTotalAmount(){var t="";t+='<div class="t706__cartwin-totalamount-wrap t-descr t-descr_xl">',t+='<div class="t706__cartwin-totalamount-info" style="margin-top: 10px; font-size:14px; font-weight:400;"></div>',t+='<span class="t706__cartwin-totalamount-label">'+tcart__dict(1,"Total")+":&nbsp;</span>",t+='<span class="t706__cartwin-totalamount"></span>',t+="</div>",$(".t706 .t-form__errorbox-middle").before(t)}function tcart__addDelivery(){var t=$(".t706 .t-form .t-radio__wrapper-delivery");if(0!==t.length){var r=$(".t706 .t-form .t-radio__wrapper-delivery input:checked").val(),o=$(".t706 .t-form .t-radio__wrapper-delivery input:checked").attr("data-delivery-price"),a=$(".t706 .t-form .t-radio__wrapper-delivery .t-radio_delivery:checked").attr("data-service-id");if(void 0!==r&&void 0!==o&&""!=r){o=tcart__cleanPrice(o);var i=r.indexOf("=");i>0&&(r=r.substring(0,i),r=r.trim()),window.tcart.delivery={},window.tcart.delivery.name=r,window.tcart.delivery.price=o,a&&(window.tcart.delivery.service_id=a),window.tcart_newDeliveryActive&&window.tcart_newDelivery.deliveryState.freeDeliveryThreshold?window.tcart.delivery.freedl=window.tcart_newDelivery.deliveryState.freeDeliveryThreshold:void 0!==t.attr("data-delivery-free")&&t.attr("data-delivery-free")>0&&(window.tcart.delivery.freedl=parseInt(t.attr("data-delivery-free")))}var e=$(".t706 .t-form .t-radio__wrapper-delivery input");e.length&&e.change(function(){tcart__updateDelivery()})}}function tcart__updateDelivery(){var t=$(".t706 .t-form .t-radio__wrapper-delivery input:checked").val(),r=$(".t706 .t-form .t-radio__wrapper-delivery input:checked").attr("data-delivery-price");if(void 0!==t&&void 0!==r){if(r=tcart__cleanPrice(r),""!=t){var o=t.indexOf("=");o>0&&(t=t.substring(0,o),t=t.trim())}if(window.tcart.delivery={},window.tcart.delivery.name=t,window.tcart.delivery.price=r,window.tcart_newDeliveryActive&&window.tcart_newDelivery.deliveryState.freeDeliveryThreshold)window.tcart.delivery.freedl=window.tcart_newDelivery.deliveryState.freeDeliveryThreshold;else{var a=$(".t706 .t-form .t-radio__wrapper-delivery");void 0!==a.attr("data-delivery-free")&&a.attr("data-delivery-free")>0&&(window.tcart.delivery.freedl=parseInt(a.attr("data-delivery-free")))}}else void 0!==window.tcart.delivery&&delete window.tcart.delivery;$(".t706 #customdelivery").length&&(tcart_newDelivery.fillTcartDelivery(),tcart_newDelivery.setFullAddress(tcart_newDelivery.getFullAddress())),tcart__updateTotalProductsinCartObj(),tcart__reDrawTotal()}function tcart__addPromocode(t){"object"!=typeof window.tcart.promocode?("object"==typeof t&&void 0!==t.promocode&&""!=t.promocode&&(t.discountsum>0||t.discountpercent>0)&&(window.tcart.promocode=t),tcart__updateTotalProductsinCartObj(),tcart__reDrawTotal()):console.error("Error. Promocode already activated before")}function tcart__addEvent__selectpayment(){if(0!=$(".t706").find(".t-input-group_pm").length){var t=$(".t706 .t-form .t-radio__wrapper-payment input");t.length&&(t.change(function(){var t=$(".t706 .t-form .t-radio__wrapper-payment input:checked").attr("data-payment-variant-system");void 0!==t&&""!=t||(t=""),$(".t706").attr("data-payment-variant-system",t),window.tcart.system=t}),$(".t706 .t-form .t-radio__wrapper-payment input:checked").trigger("change"))}}function tcart__escapeHtml(t){var r={"<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#039;"};return t.replace(/[<>"']/g,function(t){return r[t]})}function tcart__escapeHtmlImg(t){var r={"<":"&lt;",">":"&gt;",'"':"&quot;"};return t.replace(/[<>"]/g,function(t){return r[t]})}function tcart__cleanPrice(t){return void 0===t||""==t||0==t?t=0:(t=t.replace(",","."),t=t.replace(/[^0-9\.]/g,""),t=parseFloat(t).toFixed(2),isNaN(t)&&(t=0),t=parseFloat(t),t*=1,t<0&&(t=0)),t}function tcart__roundPrice(t){return void 0===t||""==t||0==t?t=0:(t=parseFloat(t).toFixed(2),t=parseFloat(t),t*=1,t<0&&(t=0)),t}function tcart__showPrice(t){if(void 0===t||0==t||""==t)t="";else{if(t=t.toString(),void 0!==window.tcart.currency_dec&&"00"==window.tcart.currency_dec)if(-1===t.indexOf(".")&&-1===t.indexOf(","))t+=".00";else{var r=t.substr(t.indexOf(".")+1);1===r.length&&(t+="0")}t=t.replace(/\B(?=(\d{3})+(?!\d))/g," "),void 0!==window.tcart.currency_sep&&","==window.tcart.currency_sep&&(t=t.replace(".",",")),t=window.tcart.currency_txt_l+t+window.tcart.currency_txt_r}return t}function tcart__lockScroll(){if(window.isiOS&&!window.MSStream&&""!==window.isiOSVersion&&void 0!==window.isiOSVersion&&11===window.isiOSVersion[0]){var t=$("body");if(!t.hasClass("t-body_scroll-locked")){var r=void 0!==window.pageYOffset?window.pageYOffset:(document.documentElement||document.body.parentNode||document.body).scrollTop;t.addClass("t-body_scroll-locked"),t.css("top","-"+r+"px"),t.attr("data-popup-scrolltop",r)}}}function tcart__unlockScroll(){if(window.isiOS&&!window.MSStream&&""!==window.isiOSVersion&&void 0!==window.isiOSVersion&&11===window.isiOSVersion[0]){var t=$("body");if(t.hasClass("t-body_scroll-locked")){var r=$("body").attr("data-popup-scrolltop");t.removeClass("t-body_scroll-locked"),t.css("top",""),t.removeAttr("data-popup-scrolltop"),window.scrollTo(0,r)}}}function tcart__clearProdUrl(){try{var t=window.location.href;if(r=t.indexOf("#!/tproduct/"),window.isiOS&&r<0&&(r=t.indexOf("%23!/tproduct/"),r<0&&(r=t.indexOf("#%21%2Ftproduct%2F"))),r<0){var r=t.indexOf("/tproduct/");r<0&&(r=t.indexOf("%2Ftproduct%2F"))}if(r<0)return;t=t.substring(0,r),void 0!==history.replaceState&&window.history.replaceState("","",t)}catch(t){}}