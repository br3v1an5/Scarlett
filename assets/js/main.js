/*########################################################################

main.js v2.0 - OWL Internet
Author      : JR Sarath | jrsarath.me | jrsarath@outlook.com
LICENSE     : GNU GPL V3.0 (C) 2018 Jr Sarath

########################################################################*/
!function(a){a.fn.slickAnimation=function(){function n(a,n,t,i,o){o="undefined"!=typeof o?o:!1,1==n.opacity?(a.addClass(t),a.addClass(i)):(a.removeClass(t),a.removeClass(i)),o&&a.css(n)}function t(a,n){return a?1e3*a+1e3:n?1e3*n:a||n?1e3*a+1e3*n:1e3}function i(a,n,t){var i=["animation-"+n,"-webkit-animation-"+n,"-moz-animation-"+n,"-o-animation-"+n,"-ms-animation-"+n],o={}
i.forEach(function(a){o[a]=t+"s"}),a.css(o)}var o=a(this),e=o.find(".slick-list .slick-track > div"),s=o.find('[data-slick-index="0"]'),r="animated",c={opacity:"1"},d={opacity:"0"}
return e.each(function(){var e=a(this)
e.find("[data-animation-in]").each(function(){var u=a(this)
u.css(d)
var l=u.attr("data-animation-in"),f=u.attr("data-animation-out"),h=u.attr("data-delay-in"),m=u.attr("data-duration-in"),y=u.attr("data-delay-out"),C=u.attr("data-duration-out")
f?(s.length>0&&e.hasClass("slick-current")&&(n(u,c,l,r,!0),h&&i(u,"delay",h),m&&i(u,"duration",m),setTimeout(function(){n(u,d,l,r),n(u,c,f,r),y&&i(u,"delay",y),C&&i(u,"duration",C)},t(h,m))),o.on("afterChange",function(a,o,s){e.hasClass("slick-current")&&(n(u,c,l,r,!0),h&&i(u,"delay",h),m&&i(u,"duration",m),setTimeout(function(){n(u,d,l,r),n(u,c,f,r),y&&i(u,"delay",y),C&&i(u,"duration",C)},t(h,m)))}),o.on("beforeChange",function(a,t,i){n(u,d,f,r,!0)})):(s.length>0&&e.hasClass("slick-current")&&(n(u,c,l,r,!0),h&&i(u,"delay",h),m&&i(u,"duration",m)),o.on("afterChange",function(a,t,o){e.hasClass("slick-current")&&(n(u,c,l,r,!0),h&&i(u,"delay",h),m&&i(u,"duration",m))}),o.on("beforeChange",function(a,t,i){n(u,d,l,r,!0)}))})}),this}}(jQuery)
/* #slick animation library */
/*! jquery-dateFormat */
var DateFormat={};!function(a){var b=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],c=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],d=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],e=["January","February","March","April","May","June","July","August","September","October","November","December"],f={Jan:"01",Feb:"02",Mar:"03",Apr:"04",May:"05",Jun:"06",Jul:"07",Aug:"08",Sep:"09",Oct:"10",Nov:"11",Dec:"12"},g=/\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}\.?\d{0,3}[Z\-+]?(\d{2}:?\d{2})?/;a.format=function(){function a(a){return b[parseInt(a,10)]||a}function h(a){return c[parseInt(a,10)]||a}function i(a){var b=parseInt(a,10)-1;return d[b]||a}function j(a){var b=parseInt(a,10)-1;return e[b]||a}function k(a){return f[a]||a}function l(a){var b,c,d,e,f,g=a,h="";return-1!==g.indexOf(".")&&(e=g.split("."),g=e[0],h=e[e.length-1]),f=g.split(":"),3===f.length?(b=f[0],c=f[1],d=f[2].replace(/\s.+/,"").replace(/[a-z]/gi,""),g=g.replace(/\s.+/,"").replace(/[a-z]/gi,""),{time:g,hour:b,minute:c,second:d,millis:h}):{time:"",hour:"",minute:"",second:"",millis:""}}function m(a,b){for(var c=b-String(a).length,d=0;c>d;d++)a="0"+a;return a}return{parseDate:function(a){var b,c,d={date:null,year:null,month:null,dayOfMonth:null,dayOfWeek:null,time:null};if("number"==typeof a)return this.parseDate(new Date(a));if("function"==typeof a.getFullYear)d.year=String(a.getFullYear()),d.month=String(a.getMonth()+1),d.dayOfMonth=String(a.getDate()),d.time=l(a.toTimeString()+"."+a.getMilliseconds());else if(-1!=a.search(g))b=a.split(/[T\+-]/),d.year=b[0],d.month=b[1],d.dayOfMonth=b[2],d.time=l(b[3].split(".")[0]);else switch(b=a.split(" "),6===b.length&&isNaN(b[5])&&(b[b.length]="()"),b.length){case 6:d.year=b[5],d.month=k(b[1]),d.dayOfMonth=b[2],d.time=l(b[3]);break;case 2:c=b[0].split("-"),d.year=c[0],d.month=c[1],d.dayOfMonth=c[2],d.time=l(b[1]);break;case 7:case 9:case 10:d.year=b[3],d.month=k(b[1]),d.dayOfMonth=b[2],d.time=l(b[4]);break;case 1:c=b[0].split(""),d.year=c[0]+c[1]+c[2]+c[3],d.month=c[5]+c[6],d.dayOfMonth=c[8]+c[9],d.time=l(c[13]+c[14]+c[15]+c[16]+c[17]+c[18]+c[19]+c[20]);break;default:return null}return d.date=d.time?new Date(d.year,d.month-1,d.dayOfMonth,d.time.hour,d.time.minute,d.time.second,d.time.millis):new Date(d.year,d.month-1,d.dayOfMonth),d.dayOfWeek=String(d.date.getDay()),d},date:function(b,c){try{var d=this.parseDate(b);if(null===d)return b;for(var e,f=d.year,g=d.month,k=d.dayOfMonth,l=d.dayOfWeek,n=d.time,o="",p="",q="",r=!1,s=0;s<c.length;s++){var t=c.charAt(s),u=c.charAt(s+1);if(r)"'"==t?(p+=""===o?"'":o,o="",r=!1):o+=t;else switch(o+=t,q="",o){case"ddd":p+=a(l),o="";break;case"dd":if("d"===u)break;p+=m(k,2),o="";break;case"d":if("d"===u)break;p+=parseInt(k,10),o="";break;case"D":k=1==k||21==k||31==k?parseInt(k,10)+"st":2==k||22==k?parseInt(k,10)+"nd":3==k||23==k?parseInt(k,10)+"rd":parseInt(k,10)+"th",p+=k,o="";break;case"MMMM":p+=j(g),o="";break;case"MMM":if("M"===u)break;p+=i(g),o="";break;case"MM":if("M"===u)break;p+=m(g,2),o="";break;case"M":if("M"===u)break;p+=parseInt(g,10),o="";break;case"y":case"yyy":if("y"===u)break;p+=o,o="";break;case"yy":if("y"===u)break;p+=String(f).slice(-2),o="";break;case"yyyy":p+=f,o="";break;case"HH":p+=m(n.hour,2),o="";break;case"H":if("H"===u)break;p+=parseInt(n.hour,10),o="";break;case"hh":e=0===parseInt(n.hour,10)?12:n.hour<13?n.hour:n.hour-12,p+=m(e,2),o="";break;case"h":if("h"===u)break;e=0===parseInt(n.hour,10)?12:n.hour<13?n.hour:n.hour-12,p+=parseInt(e,10),o="";break;case"mm":p+=m(n.minute,2),o="";break;case"m":if("m"===u)break;p+=n.minute,o="";break;case"ss":p+=m(n.second.substring(0,2),2),o="";break;case"s":if("s"===u)break;p+=n.second,o="";break;case"S":case"SS":if("S"===u)break;p+=o,o="";break;case"SSS":var v="000"+n.millis.substring(0,3);p+=v.substring(v.length-3),o="";break;case"a":p+=n.hour>=12?"PM":"AM",o="";break;case"p":p+=n.hour>=12?"p.m.":"a.m.",o="";break;case"E":p+=h(l),o="";break;case"'":o="",r=!0;break;default:p+=t,o=""}}return p+=q}catch(w){return console&&console.log&&console.log(w),b}},prettyDate:function(a){var b,c,d;return("string"==typeof a||"number"==typeof a)&&(b=new Date(a)),"object"==typeof a&&(b=new Date(a.toString())),c=((new Date).getTime()-b.getTime())/1e3,d=Math.floor(c/86400),isNaN(d)||0>d?void 0:60>c?"just now":120>c?"1 minute ago":3600>c?Math.floor(c/60)+" minutes ago":7200>c?"1 hour ago":86400>c?Math.floor(c/3600)+" hours ago":1===d?"Yesterday":7>d?d+" days ago":31>d?Math.ceil(d/7)+" weeks ago":d>=31?"more than 5 weeks ago":void 0},toBrowserTimeZone:function(a,b){return this.date(new Date(a),b||"MM/dd/yyyy HH:mm:ss")}}}()}(DateFormat),function(a){a.format=DateFormat.format}(jQuery);
/* jquery date format */
/* offcanvas */
(function(){var a=function(a,b){return function(){return a.apply(b,arguments)}};!function(b,c){var d,e,f;e=function(){function c(c){this.element=c,this._clickEvent=a(this._clickEvent,this),this.element=b(this.element),this.nav=this.element.closest(".nav"),this.dropdown=this.element.parent().find(".dropdown-menu"),this.element.on("click",this._clickEvent),this.nav.closest(".navbar-offcanvas").on("click",function(a){return function(){if(a.dropdown.is(".shown"))return a.dropdown.removeClass("shown").closest(".open").removeClass("open")}}(this))}return c.prototype._clickEvent=function(a){return this.dropdown.hasClass("shown")||a.preventDefault(),a.stopPropagation(),b(".dropdown-toggle").not(this.element).closest(".open").removeClass("open").find(".dropdown-menu").removeClass("shown"),this.dropdown.toggleClass("shown"),this.element.parent().toggleClass("open")},c}(),f=function(){function d(c,d,e,f){this.button=c,this.element=d,this.location=e,this.offcanvas=f,this._getFade=a(this._getFade,this),this._getCss=a(this._getCss,this),this._touchEnd=a(this._touchEnd,this),this._touchMove=a(this._touchMove,this),this._touchStart=a(this._touchStart,this),this.endThreshold=130,this.startThreshold=this.element.hasClass("navbar-offcanvas-right")?b("body").outerWidth()-60:20,this.maxStartThreshold=this.element.hasClass("navbar-offcanvas-right")?b("body").outerWidth()-20:60,this.currentX=0,this.fade=!!this.element.hasClass("navbar-offcanvas-fade"),b(document).on("touchstart",this._touchStart),b(document).on("touchmove",this._touchMove),b(document).on("touchend",this._touchEnd)}return d.prototype._touchStart=function(a){if(this.startX=a.originalEvent.touches[0].pageX,this.element.is(".in"))return this.element.height(b(c).outerHeight())},d.prototype._touchMove=function(a){var c;if(b(a.target).parents(".navbar-offcanvas").length>0)return!0;if(this.startX>this.startThreshold&&this.startX<this.maxStartThreshold){if(a.preventDefault(),c=a.originalEvent.touches[0].pageX-this.startX,c=this.element.hasClass("navbar-offcanvas-right")?-c:c,Math.abs(c)<this.element.outerWidth())return this.element.css(this._getCss(c)),this.element.css(this._getFade(c))}else if(this.element.hasClass("in")&&(a.preventDefault(),c=a.originalEvent.touches[0].pageX+(this.currentX-this.startX),c=this.element.hasClass("navbar-offcanvas-right")?-c:c,Math.abs(c)<this.element.outerWidth()))return this.element.css(this._getCss(c)),this.element.css(this._getFade(c))},d.prototype._touchEnd=function(a){var c,d,e;return b(a.target).parents(".navbar-offcanvas").length>0||(d=!1,e=a.originalEvent.changedTouches[0].pageX,Math.abs(e)!==this.startX?(c=this.element.hasClass("navbar-offcanvas-right")?Math.abs(e)>this.endThreshold+50:e<this.endThreshold+50,this.element.hasClass("in")&&c?(this.currentX=0,this.element.removeClass("in").css(this._clearCss()),this.button.removeClass("is-open"),d=!0):Math.abs(e-this.startX)>this.endThreshold&&this.startX>this.startThreshold&&this.startX<this.maxStartThreshold?(this.currentX=this.element.hasClass("navbar-offcanvas-right")?-this.element.outerWidth():this.element.outerWidth(),this.element.toggleClass("in").css(this._clearCss()),this.button.toggleClass("is-open"),d=!0):this.element.css(this._clearCss()),this.offcanvas.bodyOverflow(d)):void 0)},d.prototype._getCss=function(a){return a=this.element.hasClass("navbar-offcanvas-right")?-a:a,{"-webkit-transform":"translate3d("+a+"px, 0px, 0px)","-webkit-transition-duration":"0s","-moz-transform":"translate3d("+a+"px, 0px, 0px)","-moz-transition":"0s","-o-transform":"translate3d("+a+"px, 0px, 0px)","-o-transition":"0s",transform:"translate3d("+a+"px, 0px, 0px)",transition:"0s"}},d.prototype._getFade=function(a){return this.fade?{opacity:a/this.element.outerWidth()}:{}},d.prototype._clearCss=function(){return{"-webkit-transform":"","-webkit-transition-duration":"","-moz-transform":"","-moz-transition":"","-o-transform":"","-o-transition":"",transform:"",transition:"",opacity:""}},d}(),c.Offcanvas=d=function(){function d(c){var d;this.element=c,this.bodyOverflow=a(this.bodyOverflow,this),this._sendEventsAfter=a(this._sendEventsAfter,this),this._sendEventsBefore=a(this._sendEventsBefore,this),this._documentClicked=a(this._documentClicked,this),this._close=a(this._close,this),this._open=a(this._open,this),this._clicked=a(this._clicked,this),this._navbarHeight=a(this._navbarHeight,this),d=!!this.element.attr("data-target")&&this.element.attr("data-target"),d?(this.target=b(d),this.target.length&&!this.target.hasClass("js-offcanvas-done")&&(this.element.addClass("js-offcanvas-has-events"),this.location=this.target.hasClass("navbar-offcanvas-right")?"right":"left",this.target.addClass(this._transformSupported()?"offcanvas-transform js-offcanvas-done":"offcanvas-position js-offcanvas-done"),this.target.data("offcanvas",this),this.element.on("click",this._clicked),this.target.on("transitionend",function(a){return function(){if(a.target.is(":not(.in)"))return a.target.height("")}}(this)),b(document).on("click",this._documentClicked),this.target.hasClass("navbar-offcanvas-touch")&&new f(this.element,this.target,this.location,this),this.target.find(".dropdown-toggle").each(function(){return new e(this)}),this.target.on("offcanvas.toggle",function(a){return function(b){return a._clicked(b)}}(this)),this.target.on("offcanvas.close",function(a){return function(b){return a._close(b)}}(this)),this.target.on("offcanvas.open",function(a){return function(b){return a._open(b)}}(this)))):console.warn("Offcanvas: `data-target` attribute must be present.")}return d.prototype._navbarHeight=function(){if(this.target.is(".in"))return this.target.height(b(c).outerHeight())},d.prototype._clicked=function(a){return a.preventDefault(),this._sendEventsBefore(),b(".navbar-offcanvas").not(this.target).trigger("offcanvas.close"),this.target.toggleClass("in"),this.element.toggleClass("is-open"),this._navbarHeight(),this.bodyOverflow()},d.prototype._open=function(a){if(a.preventDefault(),!this.target.is(".in"))return this._sendEventsBefore(),this.target.addClass("in"),this.element.addClass("is-open"),this._navbarHeight(),this.bodyOverflow()},d.prototype._close=function(a){if(a.preventDefault(),!this.target.is(":not(.in)"))return this._sendEventsBefore(),this.target.removeClass("in"),this.element.removeClass("is-open"),this._navbarHeight(),this.bodyOverflow()},d.prototype._documentClicked=function(a){var c;if(c=b(a.target),!c.hasClass("offcanvas-toggle")&&0===c.parents(".offcanvas-toggle").length&&0===c.parents(".navbar-offcanvas").length&&!c.hasClass("navbar-offcanvas")&&this.target.hasClass("in"))return a.preventDefault(),this._sendEventsBefore(),this.target.removeClass("in"),this.element.removeClass("is-open"),this._navbarHeight(),this.bodyOverflow()},d.prototype._sendEventsBefore=function(){return this.target.hasClass("in")?this.target.trigger("hide.bs.offcanvas"):this.target.trigger("show.bs.offcanvas")},d.prototype._sendEventsAfter=function(){return this.target.hasClass("in")?this.target.trigger("shown.bs.offcanvas"):this.target.trigger("hidden.bs.offcanvas")},d.prototype.bodyOverflow=function(a){if(null==a&&(a=!0),this.target.is(".in")?b("body").addClass("offcanvas-stop-scrolling"):b("body").removeClass("offcanvas-stop-scrolling"),a)return this._sendEventsAfter()},d.prototype._transformSupported=function(){var a,b,c,d;return b=document.createElement("div"),d="translate3d(0px, 0px, 0px)",c=/translate3d\(0px, 0px, 0px\)/g,b.style.cssText="-webkit-transform: "+d+"; -moz-transform: "+d+"; -o-transform: "+d+"; transform: "+d,a=b.style.cssText.match(c),null!=a.length},d}(),b.fn.bsOffcanvas=function(){return this.each(function(){return new d(b(this))})},b(function(){return b('[data-toggle="offcanvas"]').each(function(){return b(this).bsOffcanvas()}),b(c).on("resize",function(){return b(".navbar-offcanvas.in").each(function(){return b(this).height("").removeClass("in")}),b(".offcanvas-toggle").removeClass("is-open"),b("body").removeClass("offcanvas-stop-scrolling")}),b(".offcanvas-toggle").each(function(){return b(this).on("click",function(a){var c,d;if(!b(this).hasClass("js-offcanvas-has-events")&&(d=b(this).attr("data-target"),c=b(d)))return c.height(""),c.removeClass("in"),b("body").css({overflow:"",position:""})})})})}(window.jQuery,window)}).call(this);
/* offcanvas */
/* blog feed
$(document).ready(function(){
        $.ajax({
          url:'https://blog.owlinternet.com/wp-json/wp/v2/posts?per_page=3',
          jsonp:"cb",
          dataType:'json',
          success: function(data) {
           //console.log(data); //dumps the data to the console to check if the callback is made successfully.
            $.each(data, function(index, item){
                var modified = new Date(item.modified);
								var fdate = $.format.date(modified, "dd MMM yyyy");
								var date = fdate;
                $('#blog').append(
									'<div class="col-sm-6 col-md-4">' +
                    '<div class="card">' +
										'<div class="article-summary">' +
											'<div class="article-img" style="background-image:url(' + item.better_featured_image.source_url +')">' +
											'</div>' +
                      '<div class="article-details">' +
											'<div class="article-title"><a href="' + item.link + '">' +item.title.rendered + '</a></div>' +
        									'<div class="article-text">' + item.excerpt.rendered + '</div>' +
                            '<div class="article-links row">' +
                                '<div class="col-xs-6">' +
                                    '<div class="date-holder">' + date + '</div>' +
                                '</div>' +
                                '<div class="col-xs-6">' +
                                    '<div class="readmore-holder">' +
                                        '<a href="' + item.link + '">Read more..</a>' +
                                    '</div>' +
                                '</div>' +
                        '</div>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>'
								);
              if (index == 2) return false; //only display 3 items
              }); //each
              //$("#blog").fadeIn();//loader hide
              //$("#blog-loader").fadeOut();//loader hide
            } //success
          }); //ajax
        });//ready
         #blog feed */
/* smooth scrool*/
$('.smooth-scroll').click(function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
});
  /* #smooth scrool */
$("div").css('background', function () { //or for code's consistency, i'd use background-color instead
    return $(this).data('bg-color')
});
 var domaintlds = [".com", ".net", ".org", ".in "];
 var domaincounter = 0;
 setInterval(changetld, 4000);
 function changetld() {
   //$("#domaintld").text(domaintlds[domaincounter]).animate({'opacity': 1}, 400);
   $('#domaintld').animate({'opacity' : 0},400, function(){$(this).html(domaintlds[domaincounter]).animate({'opacity': 1}, 400);});
   domaincounter++;
   if (domaincounter >= domaintlds.length) {
    domaincounter = 0;
  }
 };
 // Start of Tawk.to Script
 var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/595fe3de6edc1c10b0344e38/1cg6ljerc';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
 // embed end
 Tawk_API = Tawk_API || {};
 Tawk_API.onStatusChange = function (status){
   if(status === 'online') {
     $("#livechat-or-email, #get_support").attr("href", "javascript:void(Tawk_API.toggle())");
     $("#livechat-or-email, #get_support").html('chat with us');
   } else if(status === 'away') {
     $("#livechat-or-email").html('email us');
     $("#livechat-or-email").attr("href", "mailto:contact@owlinternet.com");
     $("#get_support").html('get support');
     $("#get_support").attr('href', 'support');
   } else if(status === 'offline'){
     $("#livechat-or-email").html('email us');
     $("#livechat-or-email").attr("href", "mailto:contact@owlinternet.com");
     $("#get_support").html('get support');
     $("#get_support").attr('href', 'support');
   }
 };
 // End of Tawk.to Script
$(document).ready(function(){
   $('[data-toggle="tooltip"]').tooltip();
  // analytics
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102233242-1', 'auto');
  ga('send', 'pageview');
  // end analytics
  //  Scroll to Top
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn();
        } else {
            $('#return-to-top').fadeOut()
        }
    });
    $('#return-to-top').click(function() {
        $('body,html').animate({
            scrollTop : 0
        }, 1000);
    });
    // language dropdown
    /*$(function(){
        $('.select-language').selectpicker();
        $('.select-currency').selectpicker();
    });*/
    var player = document.getElementsByClassName("header-video-bg");
    if(player.paused == true) {
      console.log("paused");
      player.play();
    }
    // hide loader
    $(".loader-container").delay(1500).fadeOut(600);
});
