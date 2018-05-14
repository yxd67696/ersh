/**
 * Created by Administrator on 2016/8/8.
 */
$(function () {
    
    /*详情tab切换*/
    var tabsLink = $(".goods-detail-nav li");
    var tabsCon = $(".lwx_goods_tab_ct");
    $(window).scroll(function () {
        var scrollHei = $(document).scrollTop();
        tabsCon.each(function (index) {
            var offsetHei = $(this).offset().top;
            if(offsetHei < (scrollHei + 150)) {
                tabsLink.find("a").removeClass("curr");
                tabsLink.eq(index).find("a").addClass("curr");
            }
        })
    })
    /*模拟锚点定位*/
    tabsLink.click(function(){
    	var nav_height=$('.goods-detail-nav').height();
    	var index=tabsLink.index(this);
    	var obj_pos_top=tabsCon.eq(index).offset().top;
    	$(document).scrollTop(obj_pos_top-nav_height);
    })
})