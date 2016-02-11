/*   
  @jose .... montenegro
*/

$(document).ready(function () {

        var controller = $.superscrollorama();
        
        controller.addTween(300, TweenMax.to($('.bt_hover_home:eq(0)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(350, TweenMax.to($('.bt_hover_home:eq(1)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(400, TweenMax.to($('.bt_hover_home:eq(2)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(450, TweenMax.to($('.bt_hover_home:eq(3)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(500, TweenMax.to($('.bt_hover_home:eq(4)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(550, TweenMax.to($('.bt_hover_home:eq(5)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(600, TweenMax.to($('.bt_hover_home:eq(6)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));

});