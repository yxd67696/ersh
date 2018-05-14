/**
 * User: lyq
 * Date: 14-7-26
 * Time: 上午10:53
 */
function cTab(obj1,obj2){
   obj1.click(function(){
    var _idx=$(this).index();
       $(this).addClass('active').siblings().removeClass("active");
       obj2.eq(_idx).show().siblings().hide();

   })
}

function hTab(obj1,obj2){
    obj1.hover(function(){
        var _idx=$(this).index();
        $(this).addClass('active').siblings().removeClass("active");
        obj2.eq(_idx).show().siblings().hide();

    })
}
$.fn.slide=function(o){
    var t=$(this);
    t.each(function(){
        var setting={},timer;
        var opt= $.extend({},setting,0);
        var ul= t.find('.slide_ul'),li= ul.find("li"),liLen=li.length,liH=li.height();
        ul.css("height",liH*liLen);
        function move(){
            ul.animate({"marginTop":-liH},function(){
                $(this).find('li').first().appendTo(ul);
                ul.css("marginTop",0)
            });
        }
        function interValMove(){
            timer=setInterval(function(){
                move();
            },2000);
        }
        interValMove();
        t.hover(function(){
            clearInterval(timer);
        },function(){
            interValMove();
        })
    });
};