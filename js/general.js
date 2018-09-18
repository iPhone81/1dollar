var partnum=setInterval(function(){--$(".partnum")[0].innerText>=10000&&clearInterval(partnum)},15000);
setTimeout(function(){$('.barrain').css('width','25%');},1500);
function randomNumber(){var a=200+~~(300*Math.random());$(".vistas span").html(a)}
function pad(t){return t<10?"0"+t:t}$(function(){var t=$("#contador"),e=t.html().split(':'),n=$('#horas').text(),i=$('#minutos').text(),a=$('#segundos').text();2===e.length&&e.unshift(0);var s=60*n*60*1e3;if(s+=60*i*1e3,(s+=1e3*a)>0)var d=new Date(Date.now()+s),o=setInterval(function(){var e=d.getTime()-Date.now();if(e<=0)clearInterval(o);else{var n=new Date(e);hh=pad(n.getUTCHours()),mm=pad(n.getMinutes()),ss=pad(n.getSeconds()),t.html('<div id="dias">00</div><div id="horas">'+hh+'</div><div id="minutos">'+mm+'</div><div id="segundos">'+ss+"</div>")}},300)});
randomNumber();
var id=window.setInterval(function(){randomNumber();},5000);
$('.slider-for').slick({slidesToShow:1,slidesToScroll:1,infinite:!0,arrows:!1,dots:!1,asNavFor:'.slider-nav'}),$('.slider-nav').slick({slidesToShow:3,slidesToScroll:3,asNavFor:'.slider-for',infinite:!0,dots:!1,arrows:!1,centerMode:!0,focusOnSelect:!0});