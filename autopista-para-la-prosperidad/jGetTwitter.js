/*
 * jGetTwitter: a jQuery plugin, version: 1.0.0 (2011-08-21)
 * @requires jQuery v1.5.1 or later
 *
 * jGetTwitter is a jQuery plugin that gets latest tweets from users' twitter
 * account.
 *
 * For usage and examples, visit:
 * http://www.zafarsaleem.info/plugins/
 *
 * Licensed under the MIT:
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright (c) 2011, Zafar Saleem ([zafarsaleem3] - [at] - gmail [dot] com)
 */
(function($){
    $.fn.jGetTwitter = function(user_options) {
        var default_settings = {
            "username" : '',
            "NoOfTweets" : 3,
            "ProfilePhoto" : true,
            "TweetTime" : true,
            "FollowerDisplay" : false,
            "TotalNoOfTweets" : false,
            "theme" : 'golden',
            "width" : 400
        };
        
        if(user_options){
            $.extend(default_settings, user_options);
        }
        
        var targetContainer = '#' + $(this).attr('id');
        var userName = default_settings['username'];
        var NoOfTweets = default_settings['NoOfTweets'];
        var profilePhoto = default_settings['ProfilePhoto'];
        var followerDisplay = default_settings['FollowerDisplay'];
        var TotalNoOfTweets = default_settings['TotalNoOfTweets'];
        var tweetTime = default_settings['TweetTime'];
        var theme = default_settings['theme'];
        var width = default_settings['width'];
        var ul;
        var ul1;
        var tweet1;
        var info;
        var poner;
        
        var url = 'http://api.twitter.com/1/statuses/user_timeline/' + userName + '.json?callback=?';
        
        $.getJSON(url, function (tweets) {
          
            poner = 1;
            for (var i = 0; i < NoOfTweets; i++) {   
                
//                if(poner==1){
//                   ul = '<ul>'; 
//                   alert('<ul>');
//                }else{
//                   ul = ''; 
//                }
//                if(poner < 3){
//                   ul1 = ''; 
//                }else{
//                   alert('</ul>');
//                   ul1 = '</ul>';
//               }
                
                tweet1 = "<ul><li><p><p class='primero'>" + tweets[i].text + "</p><p></p><p><span>" + timeAgo(tweets[i].created_at) + "</span></p></li></ul>"
                $(targetContainer).append(tweet1).fadeIn(1000);
            poner = poner+1;
            }
            
            $(targetContainer).prepend(info);
            themeColor(theme);
        });
        
        //function to display time in timeago format
        function timeAgo(d) {
            //to get unix timestamp
            var currentDate = Math.round(+new Date()/1000);
            var tweetDate = Math.round(+new Date(d)/1000); 
            
            var diffTime = currentDate - tweetDate;
            
            if (diffTime < 59) return 'less than a minute ago';
            else if(diffTime > 59 && diffTime < 120) return 'about a minute ago';
            else if(diffTime >= 121 && diffTime <= 3600) return (parseInt(diffTime / 60)).toString() + ' minutes ago';
            else if(diffTime > 3600 && diffTime < 7200) return '1 hour ago';
            else if(diffTime > 7200 && diffTime < 86400) return (parseInt(diffTime / 3600)).toString() + ' hours ago';
            else if(diffTime > 86400 && diffTime < 172800) return '1 day ago';
            else if(diffTime > 172800 && diffTime < 604800) return (parseInt(diffTime / 86400)).toString() + ' days ago';
            else if(diffTime > 604800 && diffTime < 12089600) return '1 week ago';
            else if(diffTime > 12089600 && diffTime < 2630880) return (parseInt(diffTime / 604800)).toString() + ' weeks ago';
            else if(diffTime > 2630880 && diffTime < 5261760) return '1 month ago';
            else if(diffTime > 5261760 && diffTime < 31570560) return (parseInt(diffTime / 2630880)).toString() + ' months ago';
            else if(diffTime > 31570560 && diffTime < 63141120) return '1 year ago';
            else return (parseInt(diffTime / 31570560)).toString() + ' years ago';
        }
        
        //function to add CSS styles on div tags
        function addStyles() {
            $('.profile_img').css('height','100%')
                             .css('position','relative')
                             .css('margin-right','5px')
                             .css('float','left');
            
            $('.tweetContainer').css('padding','5px')
                                .css('width',width)
                                .css('margin-bottom','3px')
                                .css('font-size','12px')
                                .css('border-radius','5px')
                                .css('box-shadow','0 0 5px grey')
                                .css('-webkit-box-shadow','0 0 5px grey')
                                .css('text-shadow','0 1px 1px white');
                                
           $('.tweetContainer ul').css('list-style','none')
                                  .css('padding','5px')
                                  .css('margin','0 0 0px 0px')
                                  .css('font-weight','bold')
                                  .css('color','#333333')
                                  .css('font-size','11px');
                                  
            $('.tweetContainer ul li:first-child').css('font-size','18px');
            
            $('.timeago').css('color','#333333')
                         .css('font-size','11px')
                         .css('font-style','italic');
            
            $('.no_float').css('clear','both');
        }
        
        //theme for jGetTwitter.
        function themeColor(theme) {
            var gradientBg;
            var borderBg;
            
            addStyles();
            
            if(theme == 'blue') {
                borderBg = "1px solid #7ABCFF";
                if($.browser.webkit == true) {
                    gradientBg = "-webkit-gradient(linear, left top, left bottom,color-stop(0%,rgba(122,188,255,1)),color-stop(44%,rgba(96,171,248,1)),color-stop(100%,rgba(64,150,238,1)))";
                }
                if($.browser.mozilla) {
                    gradientBg = "-moz-linear-gradient(top, rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%)";
                }
                if($.browser.opera) {
                    gradientBg = "-o-linear-gradient(top, rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%)";
                }
            }
            if(theme == 'green') {
                borderBg = "1px solid #7EB556";
                if($.browser.webkit == true) {
                    gradientBg = "-webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(126,181,86,1)), color-stop(100%,rgba(190,219,116,1)))";
                }
                if($.browser.mozilla) {
                    gradientBg = "-moz-linear-gradient(top, rgba(126,181,86,1) 1%, rgba(190,219,116,1) 100%)";
                }
                if($.browser.opera) {
                    gradientBg = "-o-linear-gradient(top, rgba(126,181,86,1) 1%,rgba(190,219,116,1) 100%)";
                }
            }
            if(theme == 'pink') {
                borderBg = "1px solid #FD89D7";
                if($.browser.webkit == true) {
                    gradientBg = "-webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(253,137,215,1)), color-stop(100%,rgba(249,179,227,1)))";
                }
                if($.browser.mozilla) {
                    gradientBg = "-moz-linear-gradient(top, rgba(253,137,215,1) 1%, rgba(249,179,227,1) 100%)";
                }
                if($.browser.opera) {
                    gradientBg = "-o-linear-gradient(top, rgba(253,137,215,1) 1%,rgba(249,179,227,1) 100%)";
                }
            }
            if(theme == 'grey') {
                borderBg = "1px solid #B3BEAD";
                if($.browser.webkit == true) {
                    gradientBg = "-webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(179,190,173,1)), color-stop(100%,rgba(223,229,215,1)))";
                }
                if($.browser.mozilla) {
                    gradientBg = "-moz-linear-gradient(top, rgba(179,190,173,1) 0%, rgba(223,229,215,1) 100%)";
                }
                if($.browser.opera) {
                    gradientBg = "-o-linear-gradient(top, rgba(179,190,173,1) 0%,rgba(223,229,215,1) 100%)";
                }
            }
            
            if(theme == 'ocean') {
                borderBg = "1px solid #86AECC";
                if($.browser.webkit == true) {
                    gradientBg = "-webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(134,174,204,1)), color-stop(100%,rgba(166,208,237,1)))";
                }
                if($.browser.mozilla) {
                    gradientBg = "-moz-linear-gradient(top, rgba(134,174,204,1) 0%, rgba(166,208,237,1) 100%)";
                }
                if($.browser.opera) {
                    gradientBg = "-o-linear-gradient(top, rgba(134,174,204,1) 0%,rgba(166,208,237,1) 100%)";
                }
            }
            
            if(theme == 'golden') {
                borderBg = "1px solid #EAC117";
                if($.browser.webkit == true) {
                    gradientBg = "-webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(234,193,23,1)), color-stop(100%,rgba(242,242,111,1)))";
                }
                if($.browser.mozilla) {
                    gradientBg = "-moz-linear-gradient(top, rgba(234,193,23,1) 0%, rgba(242,242,111,1) 100%)";
                }
                if($.browser.opera) {
                    gradientBg = "-o-linear-gradient(top, rgba(234,193,23,1) 0%,rgba(242,242,111,1) 100%)";
                }
            }
            $('.tweetContainer').css("background",gradientBg)
                                .css("border",borderBg);
        } //end of function
    }
})(jQuery);