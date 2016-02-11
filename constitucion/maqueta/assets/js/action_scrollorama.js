/*   
  @jose .... montenegro
*/

$(document).ready(function () {

        var controller = $.superscrollorama();
        
        controller.addTween(200, TweenMax.to($('.bt_hover_home:eq(4)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(250, TweenMax.to($('.bt_hover_home:eq(5)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(300, TweenMax.to($('.bt_hover_home:eq(6)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(350, TweenMax.to($('.bt_hover_home:eq(7)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(400, TweenMax.to($('.bt_hover_home:eq(8)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(450, TweenMax.to($('.bt_hover_home:eq(9)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(500, TweenMax.to($('.bt_hover_home:eq(10)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(550, TweenMax.to($('.bt_hover_home:eq(11)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(600, TweenMax.to($('.bt_hover_home:eq(12)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));
        controller.addTween(650, TweenMax.to($('.bt_hover_home:eq(13)'), .10, {css:{opacity:'1'}, ease:Quad.easeOut}));

});