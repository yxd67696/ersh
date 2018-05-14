;(function($){
    $.fn.PicPlay=function(option,obj){
        var setting={
            pic:"a",
            num:"b",
            prevBtn:"prev",
            nextBtn:"next",
            type:1,
            activeTriggerCls:'curr',
            closeBtn:"close",
            text:"t",
            intervalTime:3000,
            hoverStop:true
        };
        var opt=$.extend(setting,option||{});
        return this.each(function(){
            var mouseOn=false;
            var t=$(this),btn=$(opt.num,t),prev=$(opt.prevBtn,t),next=$(opt.nextBtn,t),pic=$(opt.pic,t),ul=pic.find("ul"),li=pic.find("li"),close=$(opt.closeBtn,t),effect=opt.type,text=opt.text,hoverStop=opt.hoverStop;
            var li_w=li.width();
            var li_h=li.height();
            var cls=opt.activeTriggerCls;
            var timer=0,_idx=0;
            var li_len=pic.find("li").length;
            var time=opt.intervalTime;
            var html='';
            for (var i = 1; i <= li_len; i++) {
                html += '<li></li>';
            }
            btn.find('ul').empty().append(html);
            btn.find("li").hover(function(){
                _idx = $(this).index();
                play();
            }).eq(0).addClass(opt.activeTriggerCls);

            if (effect == 3) {
                li.css({"position": "absolute","z-index":9}).eq(0).css({"opacity":1}).siblings().css({"opacity":0,"z-index":1});
            }
            if (effect == 1) {
                li.css({"float": "left"});
                ul.width((li_len+1) * li_w).css({"position":"absolute","left":0,"top":0});
            }
            if (effect == 2) {
                ul.height((li_len+1) * li_h).css({"position":"absolute","top":0,"left":0});
            }
            prev.click(function(){
                _idx--;
                if(_idx==-1){
                    goToLast();
                }else{
                    play();
                }
            });
            next.click(function(){
                _idx++;
                if(_idx==li_len){
                    goToFirst();
                }else{
                    play();
                }
            });
//        function start(){
//            timer = setInterval(function () {
//                _idx++;
//                if (_idx == li_len) {
//                    goToFirst();
//                }else{
//                    play();
//                }
//            }, time);
//        }
            function textChange(){
                $(text).find("li").eq(_idx).show().siblings().hide();
            }
            function play() {
                if (effect == 3) {
                    li.eq(_idx).stop().animate({"opacity":1},500,function(){$(this).css("z-index",9)}).siblings().stop().animate({"opacity":0},500,function(){$(this).css("z-index",1)});
                }
                if (effect == 1) {
                    ul.stop().animate({"left": -_idx * li_w}, 500,function(){
                    });


                }
                if (effect == 2) {
                    ul.stop().animate({"marginTop": -_idx * li_h}, 500)
                }
                textChange();
                setBtnStyle(_idx);
            }
            function goToFirst(){
                _idx=0;
                if(effect==2){
                    li.first().clone().appendTo(ul);
                    ul.stop().animate({"marginTop": -li_len * li_h}, 500,function(){
                        ul.find("li").last().remove();
                        ul.css("marginTop",0);

                    })
                }else if(effect==1){
                    li.first().clone().appendTo(ul);
                    ul.stop().animate({"left": -li_len * li_w}, 500,function(){
                        ul.find("li").last().remove();
                        ul.css("left",0);

                    })
                }else if(effect==3){
                    play()
                }
                setBtnStyle(_idx);
                textChange();
            }
            function goToLast(){
                _idx=li_len-1;
                if(effect==2){
                    li.last().clone().prependTo(ul);
                    ul.stop().css({"marginTop":-li_h}).animate({"marginTop": 0}, 500,function(){
                        ul.find("li").first().remove();
                        ul.css({"marginTop":-_idx*li_h})
                    })
                }else if(effect==1){
                    li.last().clone().prependTo(ul);
                    ul.css({"left":-li_w}).stop(false,true).animate({"left": 0}, 500,function(){
                        ul.find("li").first().remove();
                        ul.css("left",-_idx*li_w);

                    })
                }else if(effect==3){
                    play()
                }
                setBtnStyle(_idx);

            }
            function setBtnStyle(i) {
                btn.find("li").eq(i).addClass(cls).siblings().removeClass(cls)
            }
            close.click(function(){
                $(obj).remove();
                $('.mask').fadeOut();
            });

            t.hover(function(){
                if(hoverStop){
                    mouseOn=true;
                }
            },function(){
                mouseOn=false;
            });
            timer = window.setInterval(function(){
                if(!mouseOn){
                    _idx++;
                    if (_idx == li_len) {
                        goToFirst();
                    }else{
                        play();
                    }
                }
            },time);
        })
    };
})(jQuery);
