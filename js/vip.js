/**
 * Created by L on 3/1/2017.
 */

$('#rtgrhth_play_box').parent().hover(function(){
	$('#tongdao').stop().animate({'top':'3rem'});
},function(){
	$('#tongdao').stop().animate({'top':-60});
})

$('#tongdao a').click(function(){
	$(this).addClass('cur').siblings().removeClass('cur');
})
