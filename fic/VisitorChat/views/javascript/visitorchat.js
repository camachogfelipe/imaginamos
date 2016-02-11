var DocumentRoot = 'VisitorChat/';
var $site_title = document.title;
var $browser_alert;
var $UserOnSite = 1;
var $upload_status;



(function(X){function L(L,W){function i(b){return function(a){return!this._t||!this._t._a?null:b.call(this,a)}}function oa(){if(b.debugURLParam.test(M))b.debugMode=!0}this.flashVersion=8;this.debugFlash=this.debugMode=!1;this.useConsole=!0;this.waitForWindowLoad=this.consoleOnly=!1;this.nullURL="about:blank";this.allowPolling=!0;this.useFastPolling=!1;this.useMovieStar=!0;this.bgColor="#ffffff";this.useHighPerformance=!1;this.flashPollingInterval=null;this.flashLoadTimeout=1E3;this.wmode=null;this.allowScriptAccess=
"always";this.useHTML5Audio=this.useFlashBlock=!1;this.html5Test=/^probably$/i;this.preferFlash=this.useGlobalHTML5Audio=!0;this.requireFlash=!1;this.audioFormats={mp3:{type:['audio/mpeg; codecs="mp3"',"audio/mpeg","audio/mp3","audio/MPA","audio/mpa-robust"],required:!0},mp4:{related:["aac","m4a"],type:['audio/mp4; codecs="mp4a.40.2"',"audio/aac","audio/x-m4a","audio/MP4A-LATM","audio/mpeg4-generic"],required:!0},ogg:{type:["audio/ogg; codecs=vorbis"],required:!1},wav:{type:['audio/wav; codecs="1"',
"audio/wav","audio/wave","audio/x-wav"],required:!1}};this.defaultOptions={autoLoad:!1,stream:!0,autoPlay:!1,loops:1,onid3:null,onload:null,whileloading:null,onplay:null,onpause:null,onresume:null,whileplaying:null,onstop:null,onfailure:null,onfinish:null,onbeforefinish:null,onbeforefinishtime:5E3,onbeforefinishcomplete:null,onjustbeforefinish:null,onjustbeforefinishtime:200,multiShot:!0,multiShotEvents:!1,position:null,pan:0,type:null,usePolicyFile:!1,volume:100};this.flash9Options={isMovieStar:null,
usePeakData:!1,useWaveformData:!1,useEQData:!1,onbufferchange:null,ondataerror:null};this.movieStarOptions={bufferTime:3,serverURL:null,onconnect:null,duration:null};this.version=null;this.versionNumber="V2.97a.20110706";this.movieURL=null;this.url=L||null;this.altURL=null;this.enabled=this.swfLoaded=!1;this.o=null;this.movieID="sm2-container";this.id=W||"sm2movie";this.swfCSS={swfBox:"sm2-object-box",swfDefault:"movieContainer",swfError:"swf_error",swfTimedout:"swf_timedout",swfLoaded:"swf_loaded",
swfUnblocked:"swf_unblocked",sm2Debug:"sm2_debug",highPerf:"high_performance",flashDebug:"flash_debug"};this.oMC=null;this.sounds={};this.soundIDs=[];this.muted=!1;this.debugID="soundmanager-debug";this.debugURLParam=/([#?&])debug=1/i;this.didFlashBlock=this.specialWmodeCase=!1;this.filePattern=null;this.filePatterns={flash8:/\.mp3(\?.*)?$/i,flash9:/\.mp3(\?.*)?$/i};this.baseMimeTypes=/^\s*audio\/(?:x-)?(?:mp(?:eg|3))\s*(?:$|;)/i;this.netStreamMimeTypes=/^\s*audio\/(?:x-)?(?:mp(?:eg|3))\s*(?:$|;)/i;
this.netStreamTypes=["aac","flv","mov","mp4","m4v","f4v","m4a","mp4v","3gp","3g2"];this.netStreamPattern=RegExp("\\.("+this.netStreamTypes.join("|")+")(\\?.*)?$","i");this.mimePattern=this.baseMimeTypes;this.features={buffering:!1,peakData:!1,waveformData:!1,eqData:!1,movieStar:!1};this.sandbox={};this.hasHTML5=null;this.html5={usingFlash:null};this.flash={};this.ignoreFlash=!1;var Y,b=this,x,n=navigator.userAgent,h=X,M=h.location.href.toString(),k=this.flashVersion,g=document,Z,N,q=[],D=!1,E=!1,
m=!1,s=!1,pa=!1,F,o,$,t,y,aa,O,qa,ba,u,ra,G,z,ca,da,P,ea,sa,ta,Q,ua,H=null,fa=null,v,ga,A,R,S,ha,j,T=!1,ia=!1,va,wa,w=null,xa,U,I,r,ja,ya,l,Da=Array.prototype.slice,J=!1,ka,B,za,Aa=n.match(/pre\//i),Ea=n.match(/(ipad|iphone|ipod)/i);n.match(/mobile/i);var p=n.match(/msie/i),Fa=n.match(/webkit/i),K=n.match(/safari/i)&&!n.match(/chrome/i),Ga=n.match(/opera/i),la=!M.match(/usehtml5audio/i)&&!M.match(/sm2\-ignorebadua/i)&&K&&n.match(/OS X 10_6_([3-7])/i),ma=typeof g.hasFocus!=="undefined"?g.hasFocus():
null,C=typeof g.hasFocus==="undefined"&&K,Ba=!C,Ca=/(mp3|mp4|mpa)/i;this.html5Only=!1;this._use_maybe=M.match(/sm2\-useHTML5Maybe\=1/i);this._overHTTP=g.location?g.location.protocol.match(/http/i):null;this._http=!this._overHTTP?"http:":"";this.useAltURL=!this._overHTTP;this._global_a=null;if(Ea||Aa)b.useHTML5Audio=!0,b.ignoreFlash=!0,J=b.useGlobalHTML5Audio=!0;if(Aa||this._use_maybe)b.html5Test=/^(probably|maybe)$/i;this.supported=this.ok=function(){return w?m&&!s:b.useHTML5Audio&&b.hasHTML5};this.getMovie=
function(b){return p?h[b]:K?x(b)||g[b]:x(b)};this.createSound=function(c){function a(){e=R(e);b.sounds[d.id]=new Y(d);b.soundIDs.push(d.id);return b.sounds[d.id]}var e=null,f=null,d=null;if(!m||!b.ok())return ha("soundManager.createSound(): "+v(!m?"notReady":"notOK")),!1;arguments.length===2&&(c={id:arguments[0],url:arguments[1]});d=e=o(c);if(j(d.id,!0))return b.sounds[d.id];if(U(d))f=a(),f._setup_html5(d);else{if(k>8&&b.useMovieStar){if(d.isMovieStar===null)d.isMovieStar=d.serverURL||d.type&&d.type.match(b.netStreamPattern)||
d.url.match(b.netStreamPattern)?!0:!1;if(d.isMovieStar&&d.usePeakData)d.usePeakData=!1}d=S(d,"soundManager.createSound(): ");f=a();if(k===8)b.o._createSound(d.id,d.onjustbeforefinishtime,d.loops||1,d.usePolicyFile);else if(b.o._createSound(d.id,d.url,d.onjustbeforefinishtime,d.usePeakData,d.useWaveformData,d.useEQData,d.isMovieStar,d.isMovieStar?d.bufferTime:!1,d.loops||1,d.serverURL,d.duration||null,d.autoPlay,!0,d.autoLoad,d.usePolicyFile),!d.serverURL)f.connected=!0,d.onconnect&&d.onconnect.apply(f);
(d.autoLoad||d.autoPlay)&&!d.serverURL&&f.load(d)}d.autoPlay&&!d.serverURL&&f.play();return f};this.destroySound=function(c,a){if(!j(c))return!1;var e=b.sounds[c],f;e._iO={};e.stop();e.unload();for(f=0;f<b.soundIDs.length;f++)if(b.soundIDs[f]===c){b.soundIDs.splice(f,1);break}a||e.destruct(!0);delete b.sounds[c];return!0};this.load=function(c,a){return!j(c)?!1:b.sounds[c].load(a)};this.unload=function(c){return!j(c)?!1:b.sounds[c].unload()};this.start=this.play=function(c,a){return!m||!b.ok()?(ha("soundManager.play(): "+
v(!m?"notReady":"notOK")),!1):!j(c)?(a instanceof Object||(a={url:a}),a&&a.url?(a.id=c,b.createSound(a).play()):!1):b.sounds[c].play(a)};this.setPosition=function(c,a){return!j(c)?!1:b.sounds[c].setPosition(a)};this.stop=function(c){return!j(c)?!1:b.sounds[c].stop()};this.stopAll=function(){for(var c in b.sounds)b.sounds[c]instanceof Y&&b.sounds[c].stop()};this.pause=function(c){return!j(c)?!1:b.sounds[c].pause()};this.pauseAll=function(){for(var c=b.soundIDs.length;c--;)b.sounds[b.soundIDs[c]].pause()};
this.resume=function(c){return!j(c)?!1:b.sounds[c].resume()};this.resumeAll=function(){for(var c=b.soundIDs.length;c--;)b.sounds[b.soundIDs[c]].resume()};this.togglePause=function(c){return!j(c)?!1:b.sounds[c].togglePause()};this.setPan=function(c,a){return!j(c)?!1:b.sounds[c].setPan(a)};this.setVolume=function(c,a){return!j(c)?!1:b.sounds[c].setVolume(a)};this.mute=function(c){var a=0;typeof c!=="string"&&(c=null);if(c)return!j(c)?!1:b.sounds[c].mute();else{for(a=b.soundIDs.length;a--;)b.sounds[b.soundIDs[a]].mute();
b.muted=!0}return!0};this.muteAll=function(){b.mute()};this.unmute=function(c){typeof c!=="string"&&(c=null);if(c)return!j(c)?!1:b.sounds[c].unmute();else{for(c=b.soundIDs.length;c--;)b.sounds[b.soundIDs[c]].unmute();b.muted=!1}return!0};this.unmuteAll=function(){b.unmute()};this.toggleMute=function(c){return!j(c)?!1:b.sounds[c].toggleMute()};this.getMemoryUse=function(){if(k===8)return 0;if(b.o)return parseInt(b.o._getMemoryUse(),10)};this.disable=function(c){typeof c==="undefined"&&(c=!1);if(s)return!1;
s=!0;for(var a=b.soundIDs.length;a--;)ta(b.sounds[b.soundIDs[a]]);F(c);l.remove(h,"load",y);return!0};this.canPlayMIME=function(c){var a;b.hasHTML5&&(a=I({type:c}));return!w||a?a:c?c.match(b.mimePattern)?!0:!1:null};this.canPlayURL=function(c){var a;b.hasHTML5&&(a=I({url:c}));return!w||a?a:c?c.match(b.filePattern)?!0:!1:null};this.canPlayLink=function(c){return typeof c.type!=="undefined"&&c.type&&b.canPlayMIME(c.type)?!0:b.canPlayURL(c.href)};this.getSoundById=function(c){if(!c)throw Error("soundManager.getSoundById(): sID is null/undefined");
return b.sounds[c]};this.onready=function(b,a){if(b&&b instanceof Function)return a||(a=h),$("onready",b,a),t(),!0;else throw v("needFunction","onready");};this.ontimeout=function(b,a){if(b&&b instanceof Function)return a||(a=h),$("ontimeout",b,a),t({type:"ontimeout"}),!0;else throw v("needFunction","ontimeout");};this.getMoviePercent=function(){return b.o&&typeof b.o.PercentLoaded!=="undefined"?b.o.PercentLoaded():null};this._wD=this._writeDebug=function(){return!0};this._debug=function(){};this.reboot=
function(){var c,a;for(c=b.soundIDs.length;c--;)b.sounds[b.soundIDs[c]].destruct();try{if(p)fa=b.o.innerHTML;H=b.o.parentNode.removeChild(b.o)}catch(e){}fa=H=null;b.enabled=m=T=ia=D=E=s=b.swfLoaded=!1;b.soundIDs=b.sounds=[];b.o=null;for(c in q)if(q.hasOwnProperty(c))for(a=q[c].length;a--;)q[c][a].fired=!1;h.setTimeout(function(){b.beginDelayedInit()},20)};this.destruct=function(){b.disable(!0)};this.beginDelayedInit=function(){pa=!0;z();setTimeout(ra,20);O()};this._html5_events={abort:i(function(){}),
canplay:i(function(){if(this._t._html5_canplay)return!0;this._t._html5_canplay=!0;this._t._onbufferchange(0);var b=!isNaN(this._t.position)?this._t.position/1E3:null;if(this._t.position&&this.currentTime!==b)try{this.currentTime=b}catch(a){}}),load:i(function(){this._t.loaded||(this._t._onbufferchange(0),this._t._whileloading(this._t.bytesTotal,this._t.bytesTotal,this._t._get_html5_duration()),this._t._onload(!0))}),emptied:i(function(){}),ended:i(function(){this._t._onfinish()}),error:i(function(){this._t._onload(!1)}),
loadeddata:i(function(){}),loadedmetadata:i(function(){}),loadstart:i(function(){this._t._onbufferchange(1)}),play:i(function(){this._t._onbufferchange(0)}),playing:i(function(){this._t._onbufferchange(0)}),progress:i(function(c){if(this._t.loaded)return!1;var a,e=0,f=c.type==="progress",d=c.target.buffered;a=c.loaded||0;var na=c.total||1;if(d&&d.length){for(a=d.length;a--;)e=d.end(a)-d.start(a);a=e/c.target.duration;f&&isNaN(a)}isNaN(a)||(this._t._onbufferchange(0),this._t._whileloading(a,na,this._t._get_html5_duration()),
a&&na&&a===na&&b._html5_events.load.call(this,c))}),ratechange:i(function(){}),suspend:i(function(c){b._html5_events.progress.call(this,c)}),stalled:i(function(){}),timeupdate:i(function(){this._t._onTimer()}),waiting:i(function(){this._t._onbufferchange(1)})};Y=function(c){var a=this,e,f,d;this.sID=c.id;this.url=c.url;this._iO=this.instanceOptions=this.options=o(c);this.pan=this.options.pan;this.volume=this.options.volume;this._lastURL=null;this.isHTML5=!1;this._a=null;this.id3={};this._debug=function(){};
this._debug();this.load=function(c){var d=null;if(typeof c!=="undefined")a._iO=o(c,a.options),a.instanceOptions=a._iO;else if(c=a.options,a._iO=c,a.instanceOptions=a._iO,a._lastURL&&a._lastURL!==a.url)a._iO.url=a.url,a.url=null;if(!a._iO.url)a._iO.url=a.url;if(a._iO.url===a.url&&a.readyState!==0&&a.readyState!==2)return a;a._lastURL=a.url;a.loaded=!1;a.readyState=1;a.playState=0;if(U(a._iO)){if(d=a._setup_html5(a._iO),!d._called_load)a._html5_canplay=!1,d.load(),d._called_load=!0,a._iO.autoPlay&&
a.play()}else try{a.isHTML5=!1,a._iO=S(R(a._iO)),k===8?b.o._load(a.sID,a._iO.url,a._iO.stream,a._iO.autoPlay,a._iO.whileloading?1:0,a._iO.loops||1,a._iO.usePolicyFile):b.o._load(a.sID,a._iO.url,a._iO.stream?!0:!1,a._iO.autoPlay?!0:!1,a._iO.loops||1,a._iO.autoLoad?!0:!1,a._iO.usePolicyFile)}catch(e){ea()}return a};this.unload=function(){if(a.readyState!==0){if(a.isHTML5){if(f(),a._a)a._a.pause(),a._a.src=""}else k===8?b.o._unload(a.sID,b.nullURL):b.o._unload(a.sID);e()}return a};this.destruct=function(c){if(a.isHTML5){if(f(),
a._a)a._a.pause(),a._a.src="",J||a._remove_html5_events()}else a._iO.onfailure=null,b.o._destroySound(a.sID);c||b.destroySound(a.sID,!0)};this.start=this.play=function(c,V){var e,V=V===void 0?!0:V;c||(c={});a._iO=o(c,a._iO);a._iO=o(a._iO,a.options);a.instanceOptions=a._iO;if(a._iO.serverURL&&!a.connected)return a.getAutoPlay()||a.setAutoPlay(!0),a;U(a._iO)&&(a._setup_html5(a._iO),d());if(a.playState===1&&!a.paused&&(e=a._iO.multiShot,!e))return a;if(!a.loaded)if(a.readyState===0){if(!a.isHTML5)a._iO.autoPlay=
!0;a.load(a._iO)}else if(a.readyState===2)return a;if(a.paused&&a.position&&a.position>0)a.resume();else{a.playState=1;a.paused=!1;(!a.instanceCount||a._iO.multiShotEvents||k>8&&!a.isHTML5&&!a.getAutoPlay())&&a.instanceCount++;a.position=typeof a._iO.position!=="undefined"&&!isNaN(a._iO.position)?a._iO.position:0;if(!a.isHTML5)a._iO=S(R(a._iO));if(a._iO.onplay&&V)a._iO.onplay.apply(a),a._onplay_called=!0;a.setVolume(a._iO.volume,!0);a.setPan(a._iO.pan,!0);a.isHTML5?(d(),e=a._setup_html5(),a.setPosition(a.position),
e.play()):b.o._start(a.sID,a._iO.loops||1,k===9?a.position:a.position/1E3)}return a};this.stop=function(c){if(a.playState===1){a._onbufferchange(0);a.resetOnPosition(0);if(!a.isHTML5)a.playState=0;a.paused=!1;a._iO.onstop&&a._iO.onstop.apply(a);if(a.isHTML5){if(a._a)a.setPosition(0),a._a.pause(),a.playState=0,a._onTimer(),f(),a.unload()}else b.o._stop(a.sID,c),a._iO.serverURL&&a.unload();a.instanceCount=0;a._iO={}}return a};this.setAutoPlay=function(c){a._iO.autoPlay=c;a.isHTML5?a._a&&c&&a.play():
b.o._setAutoPlay(a.sID,c);c&&!a.instanceCount&&a.readyState===1&&a.instanceCount++};this.getAutoPlay=function(){return a._iO.autoPlay};this.setPosition=function(c){c===void 0&&(c=0);var d=a.isHTML5?Math.max(c,0):Math.min(a.duration||a._iO.duration,Math.max(c,0));a.position=d;c=a.position/1E3;a.resetOnPosition(a.position);a._iO.position=d;if(a.isHTML5){if(a._a&&a._html5_canplay&&a._a.currentTime!==c)try{a._a.currentTime=c,(a.playState===0||a.paused)&&a._a.pause()}catch(e){}}else c=k===9?a.position:
c,a.readyState&&a.readyState!==2&&b.o._setPosition(a.sID,c,a.paused||!a.playState);a.isHTML5&&a.paused&&a._onTimer(!0);return a};this.pause=function(c){if(a.paused||a.playState===0&&a.readyState!==1)return a;a.paused=!0;a.isHTML5?(a._setup_html5().pause(),f()):(c||c===void 0)&&b.o._pause(a.sID);a._iO.onpause&&a._iO.onpause.apply(a);return a};this.resume=function(){if(!a.paused)return a;a.paused=!1;a.playState=1;a.isHTML5?(a._setup_html5().play(),d()):(a._iO.isMovieStar&&a.setPosition(a.position),
b.o._pause(a.sID));!a._onplay_called&&a._iO.onplay?(a._iO.onplay.apply(a),a._onplay_called=!0):a._iO.onresume&&a._iO.onresume.apply(a);return a};this.togglePause=function(){if(a.playState===0)return a.play({position:k===9&&!a.isHTML5?a.position:a.position/1E3}),a;a.paused?a.resume():a.pause();return a};this.setPan=function(c,d){typeof c==="undefined"&&(c=0);typeof d==="undefined"&&(d=!1);a.isHTML5||b.o._setPan(a.sID,c);a._iO.pan=c;if(!d)a.pan=c,a.options.pan=c;return a};this.setVolume=function(c,
d){typeof c==="undefined"&&(c=100);typeof d==="undefined"&&(d=!1);if(a.isHTML5){if(a._a)a._a.volume=Math.max(0,Math.min(1,c/100))}else b.o._setVolume(a.sID,b.muted&&!a.muted||a.muted?0:c);a._iO.volume=c;if(!d)a.volume=c,a.options.volume=c;return a};this.mute=function(){a.muted=!0;if(a.isHTML5){if(a._a)a._a.muted=!0}else b.o._setVolume(a.sID,0);return a};this.unmute=function(){a.muted=!1;var c=typeof a._iO.volume!=="undefined";if(a.isHTML5){if(a._a)a._a.muted=!1}else b.o._setVolume(a.sID,c?a._iO.volume:
a.options.volume);return a};this.toggleMute=function(){return a.muted?a.unmute():a.mute()};this.onposition=function(b,c,d){a._onPositionItems.push({position:b,method:c,scope:typeof d!=="undefined"?d:a,fired:!1});return a};this.processOnPosition=function(){var c,d;c=a._onPositionItems.length;if(!c||!a.playState||a._onPositionFired>=c)return!1;for(;c--;)if(d=a._onPositionItems[c],!d.fired&&a.position>=d.position)d.method.apply(d.scope,[d.position]),d.fired=!0,b._onPositionFired++;return!0};this.resetOnPosition=
function(c){var d,e;d=a._onPositionItems.length;if(!d)return!1;for(;d--;)if(e=a._onPositionItems[d],e.fired&&c<=e.position)e.fired=!1,b._onPositionFired--;return!0};this._onTimer=function(b){var c={};if(a._hasTimer||b)return a._a&&(b||(a.playState>0||a.readyState===1)&&!a.paused)?(a.duration=a._get_html5_duration(),a.durationEstimate=a.duration,b=a._a.currentTime?a._a.currentTime*1E3:0,a._whileplaying(b,c,c,c,c),!0):!1};this._get_html5_duration=function(){var b=a._a?a._a.duration*1E3:a._iO?a._iO.duration:
void 0;return b&&!isNaN(b)&&b!==Infinity?b:a._iO?a._iO.duration:null};d=function(){a.isHTML5&&va(a)};f=function(){a.isHTML5&&wa(a)};e=function(){a._onPositionItems=[];a._onPositionFired=0;a._hasTimer=null;a._onplay_called=!1;a._a=null;a._html5_canplay=!1;a.bytesLoaded=null;a.bytesTotal=null;a.position=null;a.duration=a._iO&&a._iO.duration?a._iO.duration:null;a.durationEstimate=null;a.failures=0;a.loaded=!1;a.playState=0;a.paused=!1;a.readyState=0;a.muted=!1;a.didBeforeFinish=!1;a.didJustBeforeFinish=
!1;a.isBuffering=!1;a.instanceOptions={};a.instanceCount=0;a.peakData={left:0,right:0};a.waveformData={left:[],right:[]};a.eqData=[];a.eqData.left=[];a.eqData.right=[]};e();this._setup_html5=function(c){var c=o(a._iO,c),d=J?b._global_a:a._a;decodeURI(c.url);var f=d&&d._t?d._t.instanceOptions:null;if(d){if(d._t&&f.url===c.url&&(!a._lastURL||a._lastURL===f.url))return d;J&&d._t&&d._t.playState&&c.url!==f.url&&d._t.stop();e();d.src=c.url;a.url=c.url;a._lastURL=c.url;d._called_load=!1}else if(d=new Audio(c.url),
d._called_load=!1,J)b._global_a=d;a.isHTML5=!0;a._a=d;d._t=a;a._add_html5_events();d.loop=c.loops>1?"loop":"";c.autoLoad||c.autoPlay?(d.autobuffer="auto",d.preload="auto",a.load(),d._called_load=!0):(d.autobuffer=!1,d.preload="none");d.loop=c.loops>1?"loop":"";return d};this._add_html5_events=function(){if(a._a._added_events)return!1;var c;a._a._added_events=!0;for(c in b._html5_events)b._html5_events.hasOwnProperty(c)&&a._a&&a._a.addEventListener(c,b._html5_events[c],!1);return!0};this._remove_html5_events=
function(){a._a._added_events=!1;for(var c in b._html5_events)b._html5_events.hasOwnProperty(c)&&a._a&&a._a.removeEventListener(c,b._html5_events[c],!1)};this._whileloading=function(b,c,d,e){a.bytesLoaded=b;a.bytesTotal=c;a.duration=Math.floor(d);a.bufferLength=e;if(a._iO.isMovieStar)a.durationEstimate=a.duration;else if(a.durationEstimate=a._iO.duration?a.duration>a._iO.duration?a.duration:a._iO.duration:parseInt(a.bytesTotal/a.bytesLoaded*a.duration,10),a.durationEstimate===void 0)a.durationEstimate=
a.duration;a.readyState!==3&&a._iO.whileloading&&a._iO.whileloading.apply(a)};this._onid3=function(b,c){var d=[],e,f;e=0;for(f=b.length;e<f;e++)d[b[e]]=c[e];a.id3=o(a.id3,d);a._iO.onid3&&a._iO.onid3.apply(a)};this._whileplaying=function(c,d,e,f,g){if(isNaN(c)||c===null)return!1;a.playState===0&&c>0&&(c=0);a.position=c;a.processOnPosition();if(k>8&&!a.isHTML5){if(a._iO.usePeakData&&typeof d!=="undefined"&&d)a.peakData={left:d.leftPeak,right:d.rightPeak};if(a._iO.useWaveformData&&typeof e!=="undefined"&&
e)a.waveformData={left:e.split(","),right:f.split(",")};if(a._iO.useEQData&&typeof g!=="undefined"&&g&&g.leftEQ&&(c=g.leftEQ.split(","),a.eqData=c,a.eqData.left=c,typeof g.rightEQ!=="undefined"&&g.rightEQ))a.eqData.right=g.rightEQ.split(",")}a.playState===1&&(!a.isHTML5&&b.flashVersion===8&&!a.position&&a.isBuffering&&a._onbufferchange(0),a._iO.whileplaying&&a._iO.whileplaying.apply(a),(a.loaded||!a.loaded&&a._iO.isMovieStar)&&a._iO.onbeforefinish&&a._iO.onbeforefinishtime&&!a.didBeforeFinish&&a.duration-
a.position<=a._iO.onbeforefinishtime&&a._onbeforefinish());return!0};this._onconnect=function(b){b=b===1;if(a.connected=b)a.failures=0,j(a.sID)&&(a.getAutoPlay()?a.play(void 0,a.getAutoPlay()):a._iO.autoLoad&&a.load()),a._iO.onconnect&&a._iO.onconnect.apply(a,[b])};this._onload=function(b){b=b?!0:!1;a.loaded=b;a.readyState=b?3:2;a._onbufferchange(0);a._iO.onload&&a._iO.onload.apply(a,[b]);return!0};this._onfailure=function(b,c,d){a.failures++;if(a._iO.onfailure&&a.failures===1)a._iO.onfailure(a,b,
c,d)};this._onbeforefinish=function(){if(!a.didBeforeFinish)a.didBeforeFinish=!0,a._iO.onbeforefinish&&a._iO.onbeforefinish.apply(a)};this._onjustbeforefinish=function(){if(!a.didJustBeforeFinish)a.didJustBeforeFinish=!0,a._iO.onjustbeforefinish&&a._iO.onjustbeforefinish.apply(a)};this._onfinish=function(){var b=a._iO.onfinish;a._onbufferchange(0);a.resetOnPosition(0);a._iO.onbeforefinishcomplete&&a._iO.onbeforefinishcomplete.apply(a);a.didBeforeFinish=!1;a.didJustBeforeFinish=!1;if(a.instanceCount){a.instanceCount--;
if(!a.instanceCount)a.playState=0,a.paused=!1,a.instanceCount=0,a.instanceOptions={},a._iO={},f();(!a.instanceCount||a._iO.multiShotEvents)&&b&&b.apply(a)}};this._onbufferchange=function(b){if(a.playState===0)return!1;if(b&&a.isBuffering||!b&&!a.isBuffering)return!1;a.isBuffering=b===1;a._iO.onbufferchange&&a._iO.onbufferchange.apply(a);return!0};this._ondataerror=function(){a.playState>0&&a._iO.ondataerror&&a._iO.ondataerror.apply(a)}};da=function(){return g.body?g.body:g._docElement?g.documentElement:
g.getElementsByTagName("div")[0]};x=function(b){return g.getElementById(b)};o=function(c,a){var e={},f,d;for(f in c)c.hasOwnProperty(f)&&(e[f]=c[f]);f=typeof a==="undefined"?b.defaultOptions:a;for(d in f)f.hasOwnProperty(d)&&typeof e[d]==="undefined"&&(e[d]=f[d]);return e};l=function(){function b(a){var a=Da.call(a),c=a.length;e?(a[1]="on"+a[1],c>3&&a.pop()):c===3&&a.push(!1);return a}function a(a,b){var c=a.shift(),g=[f[b]];if(e)c[g](a[0],a[1]);else c[g].apply(c,a)}var e=h.attachEvent,f={add:e?"attachEvent":
"addEventListener",remove:e?"detachEvent":"removeEventListener"};return{add:function(){a(b(arguments),"add")},remove:function(){a(b(arguments),"remove")}}}();U=function(c){return!c.serverURL&&(c.type?I({type:c.type}):I({url:c.url})||b.html5Only)};I=function(c){function a(a){return b.preferFlash&&!b.ignoreFlash&&typeof b.flash[a]!=="undefined"&&b.flash[a]}if(!b.useHTML5Audio||!b.hasHTML5)return!1;var e=c.url||null,c=c.type||null,f=b.audioFormats,d;if(c&&b.html5[c]!=="undefined")return b.html5[c]&&
!a(c);if(!r){r=[];for(d in f)f.hasOwnProperty(d)&&(r.push(d),f[d].related&&(r=r.concat(f[d].related)));r=RegExp("\\.("+r.join("|")+")","i")}d=e?e.toLowerCase().match(r):null;if(!d||!d.length)if(c)e=c.indexOf(";"),d=(e!==-1?c.substr(0,e):c).substr(6);else return!1;else d=d[0].substr(1);return d&&typeof b.html5[d]!=="undefined"?b.html5[d]&&!a(d):(c="audio/"+d,e=b.html5.canPlayType({type:c}),(b.html5[d]=e)&&b.html5[c]&&!a(c))};ya=function(){function c(c){var d,e,f=!1;if(!a||typeof a.canPlayType!=="function")return!1;
if(c instanceof Array){d=0;for(e=c.length;d<e&&!f;d++)if(b.html5[c[d]]||a.canPlayType(c[d]).match(b.html5Test))f=!0,b.html5[c[d]]=!0,b.flash[c[d]]=!(!b.preferFlash||!c[d].match(Ca));return f}else return c=a&&typeof a.canPlayType==="function"?a.canPlayType(c):!1,!(!c||!c.match(b.html5Test))}if(!b.useHTML5Audio||typeof Audio==="undefined")return!1;var a=typeof Audio!=="undefined"?Ga?new Audio(null):new Audio:null,e,f={},d,g;B();d=b.audioFormats;for(e in d)if(d.hasOwnProperty(e)&&(f[e]=c(d[e].type),
f["audio/"+e]=f[e],b.flash[e]=b.preferFlash&&!b.ignoreFlash&&e.match(Ca)?!0:!1,d[e]&&d[e].related))for(g=d[e].related.length;g--;)f["audio/"+d[e].related[g]]=f[e],b.html5[d[e].related[g]]=f[e],b.flash[d[e].related[g]]=f[e];f.canPlayType=a?c:null;b.html5=o(b.html5,f);return!0};v=function(){};R=function(b){if(k===8&&b.loops>1&&b.stream)b.stream=!1;return b};S=function(b){if(b&&!b.usePolicyFile&&(b.onid3||b.usePeakData||b.useWaveformData||b.useEQData))b.usePolicyFile=!0;return b};ha=function(b){typeof console!==
"undefined"&&typeof console.warn!=="undefined"&&console.warn(b)};Z=function(){return!1};ta=function(b){for(var a in b)b.hasOwnProperty(a)&&typeof b[a]==="function"&&(b[a]=Z)};Q=function(c){typeof c==="undefined"&&(c=!1);(s||c)&&b.disable(c)};ua=function(c){var a=null;if(c)if(c.match(/\.swf(\?.*)?$/i)){if(a=c.substr(c.toLowerCase().lastIndexOf(".swf?")+4))return c}else c.lastIndexOf("/")!==c.length-1&&(c+="/");return(c&&c.lastIndexOf("/")!==-1?c.substr(0,c.lastIndexOf("/")+1):"./")+b.movieURL};ba=
function(){if(k!==8&&k!==9)b.flashVersion=8;var c=b.debugMode||b.debugFlash?"_debug.swf":".swf";if(b.useHTML5Audio&&!b.html5Only&&b.audioFormats.mp4.required&&b.flashVersion<9)b.flashVersion=9;k=b.flashVersion;b.version=b.versionNumber+(b.html5Only?" (HTML5-only mode)":k===9?" (AS3/Flash 9)":" (AS2/Flash 8)");if(k>8)b.defaultOptions=o(b.defaultOptions,b.flash9Options),b.features.buffering=!0;k>8&&b.useMovieStar?(b.defaultOptions=o(b.defaultOptions,b.movieStarOptions),b.filePatterns.flash9=RegExp("\\.(mp3|"+
b.netStreamTypes.join("|")+")(\\?.*)?$","i"),b.mimePattern=b.netStreamMimeTypes,b.features.movieStar=!0):(b.useMovieStar=!1,b.features.movieStar=!1);b.filePattern=b.filePatterns[k!==8?"flash9":"flash8"];b.movieURL=(k===8?"soundmanager2.swf":"soundmanager2_flash9.swf").replace(".swf",c);b.features.peakData=b.features.waveformData=b.features.eqData=k>8};sa=function(c,a){if(!b.o||!b.allowPolling)return!1;b.o._setPolling(c,a)};P=function(c,a){var e=a?a:b.url,f=b.altURL?b.altURL:e,d;d=da();var h,k,i=A(),
j,l=null,l=(l=g.getElementsByTagName("html")[0])&&l.dir&&l.dir.match(/rtl/i),c=typeof c==="undefined"?b.id:c;if(D&&E)return!1;if(b.html5Only)return ba(),b.oMC=x(b.movieID),N(),E=D=!0,!1;D=!0;ba();b.url=ua(b._overHTTP?e:f);a=b.url;b.wmode=!b.wmode&&b.useHighPerformance&&!b.useMovieStar?"transparent":b.wmode;if(b.wmode!==null&&(n.match(/msie 8/i)||!p&&!b.useHighPerformance)&&navigator.platform.match(/win32|win64/i))b.specialWmodeCase=!0,b.wmode=null;d={name:c,id:c,src:a,width:"auto",height:"auto",quality:"high",
allowScriptAccess:b.allowScriptAccess,bgcolor:b.bgColor,pluginspage:b._http+"//www.macromedia.com/go/getflashplayer",type:"application/x-shockwave-flash",wmode:b.wmode,hasPriority:"true"};if(b.debugFlash)d.FlashVars="debug=1";b.wmode||delete d.wmode;if(p)e=g.createElement("div"),k='<object id="'+c+'" data="'+a+'" type="'+d.type+'" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="'+b._http+'//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="'+d.width+
'" height="'+d.height+'"><param name="movie" value="'+a+'" /><param name="AllowScriptAccess" value="'+b.allowScriptAccess+'" /><param name="quality" value="'+d.quality+'" />'+(b.wmode?'<param name="wmode" value="'+b.wmode+'" /> ':"")+'<param name="bgcolor" value="'+b.bgColor+'" />'+(b.debugFlash?'<param name="FlashVars" value="'+d.FlashVars+'" />':"")+"</object>";else for(h in e=g.createElement("embed"),d)d.hasOwnProperty(h)&&e.setAttribute(h,d[h]);oa();i=A();if(d=da())if(b.oMC=x(b.movieID)?x(b.movieID):
g.createElement("div"),b.oMC.id){j=b.oMC.className;b.oMC.className=(j?j+" ":b.swfCSS.swfDefault)+(i?" "+i:"");b.oMC.appendChild(e);if(p)h=b.oMC.appendChild(g.createElement("div")),h.className=b.swfCSS.swfBox,h.innerHTML=k;E=!0}else{b.oMC.id=b.movieID;b.oMC.className=b.swfCSS.swfDefault+" "+i;h=i=null;if(!b.useFlashBlock)if(b.useHighPerformance)i={position:"fixed",width:"8px",height:"8px",bottom:"0px",left:"0px",overflow:"hidden"};else if(i={position:"absolute",width:"6px",height:"6px",top:"-9999px",
left:"-9999px"},l)i.left=Math.abs(parseInt(i.left,10))+"px";if(Fa)b.oMC.style.zIndex=1E4;if(!b.debugFlash)for(j in i)i.hasOwnProperty(j)&&(b.oMC.style[j]=i[j]);try{p||b.oMC.appendChild(e);d.appendChild(b.oMC);if(p)h=b.oMC.appendChild(g.createElement("div")),h.className=b.swfCSS.swfBox,h.innerHTML=k;E=!0}catch(m){throw Error(v("appXHTML"));}}return!0};j=this.getSoundById;G=function(){if(b.html5Only)return P(),!1;if(b.o)return!1;b.o=b.getMovie(b.id);if(!b.o)H?(p?b.oMC.innerHTML=fa:b.oMC.appendChild(H),
H=null,D=!0):P(b.id,b.url),b.o=b.getMovie(b.id);b.oninitmovie instanceof Function&&setTimeout(b.oninitmovie,1);return!0};aa=function(c){if(c)b.url=c;G()};O=function(){setTimeout(qa,1E3)};qa=function(){if(T)return!1;T=!0;l.remove(h,"load",O);if(C&&!ma)return!1;var c;m||(c=b.getMoviePercent());setTimeout(function(){c=b.getMoviePercent();!m&&Ba&&(c===null?b.useFlashBlock||b.flashLoadTimeout===0?b.useFlashBlock&&ga():Q(!0):b.flashLoadTimeout!==0&&Q(!0))},b.flashLoadTimeout)};aa=function(c){if(c)b.url=
c;G()};A=function(){var c=[];b.debugMode&&c.push(b.swfCSS.sm2Debug);b.debugFlash&&c.push(b.swfCSS.flashDebug);b.useHighPerformance&&c.push(b.swfCSS.highPerf);return c.join(" ")};ga=function(){v("fbHandler");var c=b.getMoviePercent(),a=b.swfCSS;if(b.ok()){if(b.oMC)b.oMC.className=[A(),a.swfDefault,a.swfLoaded+(b.didFlashBlock?" "+a.swfUnblocked:"")].join(" ")}else{if(w)b.oMC.className=A()+" "+a.swfDefault+" "+(c===null?a.swfTimedout:a.swfError);b.didFlashBlock=!0;t({type:"ontimeout",ignoreInit:!0});
b.onerror instanceof Function&&b.onerror.apply(h)}};u=function(){function b(){l.remove(h,"focus",u);l.remove(h,"load",u)}if(ma||!C)return b(),!0;ma=Ba=!0;K&&C&&l.remove(h,"mousemove",u);T=!1;b();return!0};F=function(c){if(m)return!1;if(b.html5Only)return m=!0,t(),y(),!0;b.useFlashBlock&&b.flashLoadTimeout&&!b.getMoviePercent()||(m=!0);if(s||c){if(b.useFlashBlock)b.oMC.className=A()+" "+(b.getMoviePercent()===null?b.swfCSS.swfTimedout:b.swfCSS.swfError);t({type:"ontimeout"});b.onerror instanceof Function&&
b.onerror.apply(h);return!1}l.add(h,"unload",Z);if(b.waitForWindowLoad&&!pa)return l.add(h,"load",y),!1;else y();return!0};$=function(b,a,e){typeof q[b]==="undefined"&&(q[b]=[]);q[b].push({method:a,scope:e||null,fired:!1})};t=function(c){c||(c={type:"onready"});if(!m&&c&&!c.ignoreInit)return!1;if(c.type==="ontimeout"&&b.ok())return!1;var a={success:c&&c.ignoreInit?b.ok():!s},e=c&&c.type?q[c.type]||[]:[],c=[],f,d=w&&b.useFlashBlock&&!b.ok();for(f=0;f<e.length;f++)e[f].fired!==!0&&c.push(e[f]);if(c.length){f=
0;for(e=c.length;f<e;f++)if(c[f].scope?c[f].method.apply(c[f].scope,[a]):c[f].method(a),!d)c[f].fired=!0}return!0};y=function(){h.setTimeout(function(){b.useFlashBlock&&ga();t();b.onload instanceof Function&&b.onload.apply(h);b.waitForWindowLoad&&l.add(h,"load",y)},1)};B=function(){if(ka!==void 0)return ka;var b=!1,a=navigator,e=a.plugins,f,d=h.ActiveXObject;if(e&&e.length)(a=a.mimeTypes)&&a["application/x-shockwave-flash"]&&a["application/x-shockwave-flash"].enabledPlugin&&a["application/x-shockwave-flash"].enabledPlugin.description&&
(b=!0);else if(typeof d!=="undefined"){try{f=new d("ShockwaveFlash.ShockwaveFlash")}catch(g){}b=!!f}return ka=b};xa=function(){var c,a;if(n.match(/iphone os (1|2|3_0|3_1)/i)){b.hasHTML5=!1;b.html5Only=!0;if(b.oMC)b.oMC.style.display="none";return!1}if(b.useHTML5Audio){if(!b.html5||!b.html5.canPlayType)return b.hasHTML5=!1,!0;else b.hasHTML5=!0;if(la&&B())return!0}else return!0;for(a in b.audioFormats)if(b.audioFormats.hasOwnProperty(a)&&(b.audioFormats[a].required&&!b.html5.canPlayType(b.audioFormats[a].type)||
b.flash[a]||b.flash[b.audioFormats[a].type]))c=!0;b.ignoreFlash&&(c=!1);b.html5Only=b.useHTML5Audio&&b.hasHTML5&&!c&&!b.requireFlash;return B()&&c};N=function(){var c,a=[];if(m)return!1;if(b.hasHTML5)for(c in b.audioFormats)b.audioFormats.hasOwnProperty(c)&&a.push(c+": "+b.html5[c]+(b.preferFlash&&b.flash[c]?" (preferring flash)":""));if(b.html5Only){if(!m)l.remove(h,"load",b.beginDelayedInit),b.enabled=!0,F();return!0}G();try{b.o._externalInterfaceTest(!1),b.allowPolling&&sa(!0,b.flashPollingInterval?
b.flashPollingInterval:b.useFastPolling?10:50),b.debugMode||b.o._disableDebug(),b.enabled=!0}catch(e){return Q(!0),F(),!1}F();l.remove(h,"load",b.beginDelayedInit);return!0};ra=function(){if(ia)return!1;P();G();return ia=!0};z=function(){if(ca)return!1;ca=!0;oa();if(!b.useHTML5Audio&&!B())b.useHTML5Audio=!0;ya();b.html5.usingFlash=xa();w=b.html5.usingFlash;ca=!0;g.removeEventListener&&g.removeEventListener("DOMContentLoaded",z,!1);aa();return!0};va=function(b){if(!b._hasTimer)b._hasTimer=!0};wa=function(b){if(b._hasTimer)b._hasTimer=
!1};ea=function(){if(b.onerror instanceof Function)b.onerror();b.disable()};za=function(){if(!la||!B())return!1;var c=b.audioFormats,a,e;for(e in c)if(c.hasOwnProperty(e)&&(e==="mp3"||e==="mp4"))if(b.html5[e]=!1,c[e]&&c[e].related)for(a=c[e].related.length;a--;)b.html5[c[e].related[a]]=!1};this._setSandboxType=function(){};this._externalInterfaceOK=function(){if(b.swfLoaded)return!1;(new Date).getTime();b.swfLoaded=!0;C=!1;la&&za();p?setTimeout(N,100):N()};ja=function(){g.readyState==="complete"&&
(z(),g.detachEvent("onreadystatechange",ja));return!0};if(!b.hasHTML5||w)l.add(h,"focus",u),l.add(h,"load",u),l.add(h,"load",O),K&&C&&l.add(h,"mousemove",u);g.addEventListener?g.addEventListener("DOMContentLoaded",z,!1):g.attachEvent?g.attachEvent("onreadystatechange",ja):ea();g.readyState==="complete"&&setTimeout(z,100)}var W=null;if(typeof SM2_DEFER==="undefined"||!SM2_DEFER)W=new L;X.SoundManager=L;X.soundManager=W})(window);


soundManager.url = DocumentRoot+'audio/';
soundManager.flashVersion = 9; // optional: shiny features (default = 8)
soundManager.useFlashBlock = false; // optionally, enable when you're ready to dive in
// enable HTML5 audio support, if you're feeling adventurous. iPad/iPhone will always get this.
 soundManager.useHTML5Audio = true;
soundManager.onready(function() {
  // Ready to use; soundManager.createSound() etc. can now be called.
  soundManager.createSound('page',DocumentRoot+'audio/alert.mp3');

});

 
$(function(){

   var $content =  $("<div></div>")
   .append(
        $("<div></div>")
        .attr("id", "talk_window")
        .append(
            $("<div></div>")
            .addClass("options")
            .append(
                $("<a></a>")
                .attr({
                    href : "#",
                    title : "Cambiar nickname."
                })
                .addClass("wheel")
                .html("Camnbiar nickname")
            )/*
            .append(
                $("<a></a>")
                .attr({
                    href : "#",
                    title : "Upload a file."
                })
                .addClass("upload")
                .attr({
                    id : "upload"
                })
            )*/
            .append(
                $("<a></a>")
                .attr({
                    href : "#",
                    title : "Insert smiley.",
                    id : "add_smiley"
                })
                .addClass("smile")
            )
            .append(
                $("<div></div>")
                .addClass("c")
            )
        )
        .append(
            $("<div></div>")
            .attr("id", "opt_hidden")
            .append(
                $("<input />")
                .attr({
                    type : "text",
                    id : "new_nick"
                })
            )
            .append(
                $("<label></label>")
                .append(
                    $("<a></a>")
                    .attr({
                        id : "change_nick",
                        href : "#"
                    })
                    .html("change")
                )
            )
            .append(
                $("<div></div>")
                .addClass("c")
            )
        )
        .append(
            $("<div></div>")
            .attr("id", "messages")
        )
        .append(
            $("<div></div>")
            .attr("class", "text_round")
            .append(
            $("<textarea></textarea>")
            .attr("id", "message")
            )
        )
   )
   .append(
        $("<div></div>")
        .attr("id", "send_email")
        .append(
            $("<div></div>")
            .attr("class", "email")
            .append(
                $("<strong></strong>")
                .html('Gracias por contactarnos!')
            )
            .append('<br /><br />')
            .append('Por el momento no estamos disponibles, pero puedes enviarnos un mensaje y pronto nos contactaremos contigo.')
            .append('<br /><br />')
            .append(
                $("<label></label>")
                .html('Nombre')
            )
            .append('<br />')
            .append(
                $("<input />")
                .attr({"type" : "text" , "id" : "sm_name"})
            )
            .append('<br />')
            .append(
                $("<label></label>")
                .html('E-mail')
            )
            .append('<br />')
            .append(
                $("<input />")
                .attr({"type" : "text" , "id" : "sm_email"})
            )
            .append('<br />')
            .append(
                $("<label></label>")
                .html('Mensaje')
            )
            .append('<br />')
            .append(
                $("<textarea></textarea>")
                .attr("id", "sm_msg")
            )
            .append('<br />')
            .append(
                $("<a></a>")
                .attr({"href" : "#", "id" : "send_email_btn", 'class':'standardButton1'})
                .html('Enviar')
            )
            .append(
                $("<div></div>")
                .attr("id", "send_email_result")
            )
            .append(
                $("<div></div>")
                .attr("id", "send_email_loading")
                .html('loading ...')
            )
            .append(
                $("<div></div>")
                .attr("class", "c")
            )
            .append('<br />')
        )
   )
   .append(
        $("<div></div>")
        .attr("id", "register")
        .append(
            $("<div></div>")
            .attr("class", "email")
            .append(
                $("<strong></strong>")
                .html('Escribe tus datos para comenzar la conversaci&oacute;n!')
            )
            .append('<br /><br />')
            .append(
                $("<label></label>")
                .html('Nombre')
            )
            .append('<br />')
            .append(
                $("<input />")
                .attr({"type" : "text" , "id" : "re_name"})
            )
            .append('<br />')
            .append(
                $("<label></label>")
                .html('E-mail')
            )
            .append('<br />')
            .append(
                $("<input />")
                .attr({"type" : "text" , "id" : "re_email"})
            )
            .append('<br />')
            .append(
                $("<a></a>")
                .attr({"href" : "#", "id" : "user_register", 'class':'standardButton1'})
                .html('Comenzar!')
            )
            .append(
                $("<a></a>")
                .attr({"href" : "#", "id" : "register_anon", 'class':'standardButton1'})
                .html('Anonimo')
            )
            .append(
                $("<div></div>")
                .attr("id", "register_result")
            )
            .append(
                $("<div></div>")
                .attr("id", "register_loading")
                .html('Por favor espera un poco ...')
            )
            .append(
                $("<div></div>")
                .attr("class", "c")
            )
            .append('<br />')
        )
   )
   .append(
        $("<a></a>")
        .attr({"class" : "talk", "href" : "#"})
        .append(
            $("<img />")
            .attr({
              "src" : DocumentRoot+"views/image/comment.png",
              "border" : 0,
              "id" : "settings",
              "align" : "absmiddle"
            })
        )
        .append(' ')
        .append(
            $("<span></span>")
            .attr("id", "online")
        )
        .append(
            $("<div></div>")
            .attr("id", "reminder")
        )
   );

	$('.headerBox .chatBox').append($content.html())
   //$("body").append($content.html());
   
   
    $.getJSON(DocumentRoot+'index.php?page=smiley', function(data) {
      var $smiley = [];

      $.each(data, function(key, val) {
        $smiley.push('<a href="#" rel="'+val.sign+'"><img src="'+DocumentRoot+'admin/images/smiley/'+val.filename+'" /></a>');
      });
      
      var $data = $smiley.join('');

    $("#talk_window").prepend($("<div></div>").attr("id", "smile_hidden").append($data));  
    

    $("#smile_hidden a").click(function(event){
        
        event.preventDefault();
        
        $("#message").focus().val(
            $("#message").val()+
            $(this).attr('rel')
        );
            
            
        $(".options").show();
        $("#smile_hidden").hide();
        
    }); 
    
    });
    

});



$(document).ready(function(){

	var timeoutId;

	(function(a){a.fn.autoResize=function(j){var b=a.extend({onResize:function(){},animate:true,animateDuration:150,animateCallback:function(){},extraSpace:20,limit:1000},j);this.filter('textarea').each(function(){var c=a(this).css({resize:'none','overflow-y':'hidden'}),k=c.height(),f=(function(){var l=['height','width','lineHeight','textDecoration','letterSpacing'],h={};a.each(l,function(d,e){h[e]=c.css(e)});return c.clone().removeAttr('id').removeAttr('name').css({position:'absolute',top:0,left:-9999}).css(h).attr('tabIndex','-1').insertBefore(c)})(),i=null,g=function(){f.height(0).val(a(this).val()).scrollTop(10000);var d=Math.max(f.scrollTop(),k)+b.extraSpace,e=a(this).add(f);if(i===d){return}i=d;if(d>=b.limit){a(this).css('overflow-y','');return}b.onResize.call(this);b.animate&&c.css('display')==='block'?e.stop().animate({height:d},b.animateDuration,b.animateCallback):e.height(d)};c.unbind('.dynSiz').bind('keyup.dynSiz',g).bind('keydown.dynSiz',g).bind('change.dynSiz',g)});return this}})(jQuery);


        
	function AudioPlay() {
	
                soundManager.play('page');
                
	
	}	


    $(window).blur(function() {
        $UserOnSite = 0;
    });

    $(window).focus(function() {
      
      if(!$UserOnSite) {
          
          clearTimeout(timeoutId);
          NewMessage(0);
          setTimeout(function(){
              document.title = $site_title;
          },2500);          
      }

      $UserOnSite = 1;
      clearTimeout($browser_alert);
      
    });

    $.BrowserAlert = function()
    {
        var $msg;
        
        switch(document.title)
        {
            case 'New message!' :$msg = $site_title;break;
            default :$msg = 'New message!';break;
        }
        document.title = $msg;
        $browser_alert = setTimeout($.BrowserAlert,2000);
    }


        $(".wheel").click(function(event){
            
            event.preventDefault();
            
            $(".options").hide();
            $("#opt_hidden").show();

        });
        
        $("#add_smiley").click(function(event){
            
            event.preventDefault();
            
            $(".options").hide();
            $("#smile_hidden").show();

        });

        
        $("#change_nick").click(function(event){
           
           event.preventDefault();
           
           var $new_nick = $("#new_nick").val();
           
           if($new_nick.length > 0)
           {

               $.ajax({
                        type: "POST",
                        timeout: 20000,
                        url: DocumentRoot+"index.php?page=change_nick",
                        dataType: "html",
                        data: 'nick='+encodeURIComponent($new_nick),
                        success: function(theResponse) {

                            if(theResponse == 1)
                            {
                                
                               $.ajax({
                                        type: "POST",
                                        timeout: 20000,
                                        url: DocumentRoot+"index.php?page=messaging",
                                        dataType: "html",
                                        data: 'msg=Nickname cambiado a "'+$new_nick+'"',
                                        success: function(data) {
                                            
                                            $("#messages").html(data);
                                            scrollBot();

                                        }
                                });
                                
                                $("#opt_hidden").hide();
                                $(".options").show();
                                
                            } else {
                                alert("Nickname change failed!");
                            }
                        }
                });

           }
           
        });
        

	/*
	 * Toggle talk window when clicked
	 */
	$(".talk").click(function(event){
		 event.preventDefault();

		$(this).toggleClass('open open2');

		$(".tw").toggle();
		$("#reminder").html('');
		scrollBot();
		
		return false;
	});	
	var chatIsOpen = false;
	$(".chatBtn").click(function(event){
		event.preventDefault();
		$(".tw").toggle();
		$("#reminder").html('');
		scrollBot();
	
		if(chatIsOpen ==false){
		 	$('.headerBox .chatBox').css('display','block');	
			chatIsOpen = true;
		}else if(chatIsOpen == true){
		 	$('.headerBox .chatBox').css('display','none');	
			chatIsOpen = false;
		}
		return false;
	});	
	$('.headerBox .chatBox .closeBtn').click(function(){
		event.preventDefault();
		$(".tw").toggle();
		$("#reminder").html('');
		scrollBot();
	
		if(chatIsOpen ==false){
		 	$('.headerBox .chatBox').css('display','block');	
			chatIsOpen = true;
		}else if(chatIsOpen == true){
		 	$('.headerBox .chatBox').css('display','none');	
			chatIsOpen = false;
		}
		return false;
	})

 

    Flash();
    scrollBot();
	

    function Flash()
    {
        $("#reminder").fadeOut(1000).fadeIn(1000);
        setTimeout(Flash, 2000);

    }


	function UpdateUserTime(name,email)
	{
		
            $("#register_loading").show().delay(10000).hide();

            $.ajax({
               cache : false,
               url: DocumentRoot+'index.php?page=UpdateUserTime&name='+name+'&email='+email
            });
		      		
	}
	
	$("#user_register").click(function(event){

            event.preventDefault();

            var re_email = $("#re_email").val();
            var re_name = $("#re_name").val();

            if(re_name.length == 0) {
                    $("#re_name").effect("highlight", {"color":"#ed5248"}, 2000); 
            }

            if( !isValidEmailAddress( re_email ) ) {$("#re_email").effect("highlight", {"color":"#ed5248"}, 2000);}

            if(isValidEmailAddress( re_email ) && re_name.length > 0) 
            {
                    UpdateUserTime(re_name,re_email);
                    
                    $("#send_email:visible, #register:visible").hide(0, function(){
                            $(".talk").toggleClass('open open2');
                    });
                    $("#talk_window").removeClass('smail reg').addClass('tw');
                    $("#send_email").removeClass('tw reg').addClass('smail');
                    $("#register").removeClass('tw smail').addClass('reg');
                    $("#talk_window").show();
            } 
	});
        
        $("#register_anon").click(function(event){
            
                    event.preventDefault();
                    
                    UpdateUserTime(0,0);
                    
                    $("#send_email:visible, #register:visible").hide(0, function(){
                            $(".talk").toggleClass('open open2');
                    });
                    $("#talk_window").removeClass('smail reg').addClass('tw');
                    $("#send_email").removeClass('tw reg').addClass('smail');
                    $("#register").removeClass('tw smail').addClass('reg');
                    $("#talk_window").show();        
        });
	
    $("#message").click(function(){
        scrollBot();
    });

    function scrollBot()
    {   
        var $id = $("#messages");
        var $flow = $id.height();
        $id.css("height", "auto");
        
        var $autoheight = $id.height();
        
        $("#messages").css("height", $flow).scrollTop($autoheight);

    }
    
    function NewMessage()
    {


        var datas = 0;
        
         $.ajax({
          url: DocumentRoot+'index.php?page=new_message',
          success: function(spool) {
              datas = spool;
            
            if ($('#talk_window').is(':visible')){

                        $.ajax({
                          url: DocumentRoot+'index.php?page=messaging',
                          success: function(data) {
                            
                            $('#messages').html(data);

                                        if(datas > 0)
                                        {
                                            
                                            
                                            var $hov = $("#messages").is(":not(:hover)");

                                            if($hov)
                                            {

                                                scrollBot();
                                            }
                                            
                                            if( !$UserOnSite )
                                            {
                                              AudioPlay();
                                              clearTimeout($browser_alert);
                                              $.BrowserAlert();                                            
                                            }

                                        }
                          }
                        });

            } else {


                                $.ajax({
                                    url: DocumentRoot+'index.php?page=messaging',
                                    async : false,
                                    success: function(data) {
                                    $('#messages').html(data);


                                        if(datas > 0)
                                        {

                                            AudioPlay();

                                            if( !$UserOnSite )
                                            {
                                              
                                              clearTimeout($browser_alert);
                                              $.BrowserAlert();                                            
                                            }



                                            $("#reminder").html('<img src="'+DocumentRoot+'views/image/new_small.png" border="0" align="absmiddle" />');
                                        }

                                }
                                });

            }
          }
          });

        timeoutId = setTimeout(NewMessage, 5000);
    }
    
	function isValidEmailAddress(emailAddress) {
		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return pattern.test(emailAddress);
	};    
	
    $("#send_email_btn").click(function(){
    	
    	var sm_name,sm_email,sm_msg;
    	
    	sm_name = $("#sm_name").val();
    	sm_email = $("#sm_email").val();
    	sm_msg = $("#sm_msg").val();
    	
    	if(sm_name.length == 0) $("#sm_name").effect("highlight", {"color":"#ed5248"}, 2000);
    	if( !isValidEmailAddress( sm_email ) ) {$("#sm_email").effect("highlight", {"color":"#ed5248"}, 2000);}
    	if(sm_msg.length == 0) $("#sm_msg").effect("highlight", {"color":"#ed5248"}, 2000);
    	
    	$("#send_email_loading").show();
    	
               $.ajax({
                        type: "POST",
                        timeout: 20000,
                        url: DocumentRoot+"index.php?page=send_email",
                        dataType: "html",
                        data: 'msg='+encodeURIComponent(sm_msg)+'&name='+encodeURIComponent(sm_name)+'&email='+encodeURIComponent(sm_email),
                        success: function(theResponse) {
							
							var obj = $.parseJSON(theResponse);
								
                            $("#send_email_loading").hide();
							$("#sm_name").val('');
							$("#sm_email").val('');
							$("#sm_msg").val('');

                            $("#send_email_result").html(obj.msg).delay(3000).fadeOut().show();

                        }
                });
    	return false;
    });
    
    function Osvezi()
    {

		
		$.getJSON(DocumentRoot+'index.php?page=AdminOnline&rand='+Math.random(), function(data) {


			if(data['response'] >= 1)
			{
				
				if(data['registered'] == 1 )
				{
					
                                        // resolve the upload setting
                                        $upload_status = data['upload'] == 1 ? true : false;

                                        
					$("#send_email:visible, #register:visible").hide(0, function(){
						$(".talk").toggleClass('open open2');
					});
					$("#talk_window").removeClass('smail reg').addClass('tw');
					$("#send_email").removeClass('tw reg').addClass('smail');
					$("#register").removeClass('tw smail').addClass('reg');
					$("#talk_window:visible").show();
					
					setTimeout(UpdateUserTime, 5000);
					
				} else {
					
					$("#send_email:visible, #talk_window:visible").hide(0, function(){
						$(".talk").toggleClass('open open2');
					});
					$("#talk_window").removeClass('smail reg').addClass('reg');
					$("#send_email").removeClass('tw reg').addClass('smail');
					$("#register").removeClass('tw smail').addClass('tw');
					
					$("#register:visible").show();

				}
				
			} else {
				$("#talk_window:visible, #register:visible").hide(0, function(){
						$(".talk").toggleClass('open open2');
					});
				$("#talk_window").removeClass('tw reg').addClass('smail');
				$("#send_email").removeClass('smail reg').addClass('tw');
				$("#register").removeClass('tw smail').addClass('reg');	
				
				$("#send_email:visible").show();
			}
			
			$('#online').html(data['msg']);
		  
		});
		
		setTimeout(Osvezi, 5000);
    }

       Osvezi();
       NewMessage();



        $.ctrl = function(callback, args) {
            $("#message").keydown(function(e) {
                if(!args) args=[]; // IE barks when args is null
                if(e.keyCode == 13 && !e.shiftKey) {
                    callback.apply(this, args);
                    return false;
                }
            });
        };

        $.ctrl(function() {

            var msg = $("#message").val();
			if(!msg.length) return false;

            $("#message").focus();

               $.ajax({
                        type: "POST",
                        timeout: 20000,
                        url: DocumentRoot+"index.php?page=messaging",
                        dataType: "html",
                        data: 'msg='+msg,
                        success: function(theResponse) {

                            $("#messages").html(theResponse);
                            $("#message").val('');
                            scrollBot();

                        }
                });


        });


		$('#message').autoResize({
		    // On resize:
		    onResize : function() {
		        $(this).css({opacity:0.8});
		    },
		    // After resize:
		    animateCallback : function() {
		        $(this).css({opacity:1});
		    },
		    // Quite slow animation:
		    animateDuration : 300,
		    // More extra space:
		    extraSpace : 0
		});
                

});



/*
 * jQuery UI Effects 1.8.12
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/
 */
jQuery.effects||function(f,j){function n(c){var a;if(c&&c.constructor==Array&&c.length==3)return c;if(a=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(c))return[parseInt(a[1],10),parseInt(a[2],10),parseInt(a[3],10)];if(a=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(c))return[parseFloat(a[1])*2.55,parseFloat(a[2])*2.55,parseFloat(a[3])*2.55];if(a=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(c))return[parseInt(a[1],
16),parseInt(a[2],16),parseInt(a[3],16)];if(a=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(c))return[parseInt(a[1]+a[1],16),parseInt(a[2]+a[2],16),parseInt(a[3]+a[3],16)];if(/rgba\(0, 0, 0, 0\)/.exec(c))return o.transparent;return o[f.trim(c).toLowerCase()]}function s(c,a){var b;do{b=f.curCSS(c,a);if(b!=""&&b!="transparent"||f.nodeName(c,"body"))break;a="backgroundColor"}while(c=c.parentNode);return n(b)}function p(){var c=document.defaultView?document.defaultView.getComputedStyle(this,null):this.currentStyle,
a={},b,d;if(c&&c.length&&c[0]&&c[c[0]])for(var e=c.length;e--;){b=c[e];if(typeof c[b]=="string"){d=b.replace(/\-(\w)/g,function(g,h){return h.toUpperCase()});a[d]=c[b]}}else for(b in c)if(typeof c[b]==="string")a[b]=c[b];return a}function q(c){var a,b;for(a in c){b=c[a];if(b==null||f.isFunction(b)||a in t||/scrollbar/.test(a)||!/color/i.test(a)&&isNaN(parseFloat(b)))delete c[a]}return c}function u(c,a){var b={_:0},d;for(d in a)if(c[d]!=a[d])b[d]=a[d];return b}function k(c,a,b,d){if(typeof c=="object"){d=
a;b=null;a=c;c=a.effect}if(f.isFunction(a)){d=a;b=null;a={}}if(typeof a=="number"||f.fx.speeds[a]){d=b;b=a;a={}}if(f.isFunction(b)){d=b;b=null}a=a||{};b=b||a.duration;b=f.fx.off?0:typeof b=="number"?b:b in f.fx.speeds?f.fx.speeds[b]:f.fx.speeds._default;d=d||a.complete;return[c,a,b,d]}function m(c){if(!c||typeof c==="number"||f.fx.speeds[c])return true;if(typeof c==="string"&&!f.effects[c])return true;return false}f.effects={};f.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor",
"borderTopColor","borderColor","color","outlineColor"],function(c,a){f.fx.step[a]=function(b){if(!b.colorInit){b.start=s(b.elem,a);b.end=n(b.end);b.colorInit=true}b.elem.style[a]="rgb("+Math.max(Math.min(parseInt(b.pos*(b.end[0]-b.start[0])+b.start[0],10),255),0)+","+Math.max(Math.min(parseInt(b.pos*(b.end[1]-b.start[1])+b.start[1],10),255),0)+","+Math.max(Math.min(parseInt(b.pos*(b.end[2]-b.start[2])+b.start[2],10),255),0)+")"}});var o={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,
0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,
211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]},r=["add","remove","toggle"],t={border:1,borderBottom:1,borderColor:1,borderLeft:1,borderRight:1,borderTop:1,borderWidth:1,margin:1,padding:1};f.effects.animateClass=function(c,a,b,
d){if(f.isFunction(b)){d=b;b=null}return this.queue("fx",function(){var e=f(this),g=e.attr("style")||" ",h=q(p.call(this)),l,v=e.attr("className");f.each(r,function(w,i){c[i]&&e[i+"Class"](c[i])});l=q(p.call(this));e.attr("className",v);e.animate(u(h,l),a,b,function(){f.each(r,function(w,i){c[i]&&e[i+"Class"](c[i])});if(typeof e.attr("style")=="object"){e.attr("style").cssText="";e.attr("style").cssText=g}else e.attr("style",g);d&&d.apply(this,arguments)});h=f.queue(this);l=h.splice(h.length-1,1)[0];
h.splice(1,0,l);f.dequeue(this)})};f.fn.extend({_addClass:f.fn.addClass,addClass:function(c,a,b,d){return a?f.effects.animateClass.apply(this,[{add:c},a,b,d]):this._addClass(c)},_removeClass:f.fn.removeClass,removeClass:function(c,a,b,d){return a?f.effects.animateClass.apply(this,[{remove:c},a,b,d]):this._removeClass(c)},_toggleClass:f.fn.toggleClass,toggleClass:function(c,a,b,d,e){return typeof a=="boolean"||a===j?b?f.effects.animateClass.apply(this,[a?{add:c}:{remove:c},b,d,e]):this._toggleClass(c,
a):f.effects.animateClass.apply(this,[{toggle:c},a,b,d])},switchClass:function(c,a,b,d,e){return f.effects.animateClass.apply(this,[{add:a,remove:c},b,d,e])}});f.extend(f.effects,{version:"1.8.12",save:function(c,a){for(var b=0;b<a.length;b++)a[b]!==null&&c.data("ec.storage."+a[b],c[0].style[a[b]])},restore:function(c,a){for(var b=0;b<a.length;b++)a[b]!==null&&c.css(a[b],c.data("ec.storage."+a[b]))},setMode:function(c,a){if(a=="toggle")a=c.is(":hidden")?"show":"hide";return a},getBaseline:function(c,
a){var b;switch(c[0]){case "top":b=0;break;case "middle":b=0.5;break;case "bottom":b=1;break;default:b=c[0]/a.height}switch(c[1]){case "left":c=0;break;case "center":c=0.5;break;case "right":c=1;break;default:c=c[1]/a.width}return{x:c,y:b}},createWrapper:function(c){if(c.parent().is(".ui-effects-wrapper"))return c.parent();var a={width:c.outerWidth(true),height:c.outerHeight(true),"float":c.css("float")},b=f("<div></div>").addClass("ui-effects-wrapper").css({fontSize:"100%",background:"transparent",
border:"none",margin:0,padding:0});c.wrap(b);b=c.parent();if(c.css("position")=="static"){b.css({position:"relative"});c.css({position:"relative"})}else{f.extend(a,{position:c.css("position"),zIndex:c.css("z-index")});f.each(["top","left","bottom","right"],function(d,e){a[e]=c.css(e);if(isNaN(parseInt(a[e],10)))a[e]="auto"});c.css({position:"relative",top:0,left:0,right:"auto",bottom:"auto"})}return b.css(a).show()},removeWrapper:function(c){if(c.parent().is(".ui-effects-wrapper"))return c.parent().replaceWith(c);
return c},setTransition:function(c,a,b,d){d=d||{};f.each(a,function(e,g){unit=c.cssUnit(g);if(unit[0]>0)d[g]=unit[0]*b+unit[1]});return d}});f.fn.extend({effect:function(c){var a=k.apply(this,arguments),b={options:a[1],duration:a[2],callback:a[3]};a=b.options.mode;var d=f.effects[c];if(f.fx.off||!d)return a?this[a](b.duration,b.callback):this.each(function(){b.callback&&b.callback.call(this)});return d.call(this,b)},_show:f.fn.show,show:function(c){if(m(c))return this._show.apply(this,arguments);
else{var a=k.apply(this,arguments);a[1].mode="show";return this.effect.apply(this,a)}},_hide:f.fn.hide,hide:function(c){if(m(c))return this._hide.apply(this,arguments);else{var a=k.apply(this,arguments);a[1].mode="hide";return this.effect.apply(this,a)}},__toggle:f.fn.toggle,toggle:function(c){if(m(c)||typeof c==="boolean"||f.isFunction(c))return this.__toggle.apply(this,arguments);else{var a=k.apply(this,arguments);a[1].mode="toggle";return this.effect.apply(this,a)}},cssUnit:function(c){var a=this.css(c),
b=[];f.each(["em","px","%","pt"],function(d,e){if(a.indexOf(e)>0)b=[parseFloat(a),e]});return b}});f.easing.jswing=f.easing.swing;f.extend(f.easing,{def:"easeOutQuad",swing:function(c,a,b,d,e){return f.easing[f.easing.def](c,a,b,d,e)},easeInQuad:function(c,a,b,d,e){return d*(a/=e)*a+b},easeOutQuad:function(c,a,b,d,e){return-d*(a/=e)*(a-2)+b},easeInOutQuad:function(c,a,b,d,e){if((a/=e/2)<1)return d/2*a*a+b;return-d/2*(--a*(a-2)-1)+b},easeInCubic:function(c,a,b,d,e){return d*(a/=e)*a*a+b},easeOutCubic:function(c,
a,b,d,e){return d*((a=a/e-1)*a*a+1)+b},easeInOutCubic:function(c,a,b,d,e){if((a/=e/2)<1)return d/2*a*a*a+b;return d/2*((a-=2)*a*a+2)+b},easeInQuart:function(c,a,b,d,e){return d*(a/=e)*a*a*a+b},easeOutQuart:function(c,a,b,d,e){return-d*((a=a/e-1)*a*a*a-1)+b},easeInOutQuart:function(c,a,b,d,e){if((a/=e/2)<1)return d/2*a*a*a*a+b;return-d/2*((a-=2)*a*a*a-2)+b},easeInQuint:function(c,a,b,d,e){return d*(a/=e)*a*a*a*a+b},easeOutQuint:function(c,a,b,d,e){return d*((a=a/e-1)*a*a*a*a+1)+b},easeInOutQuint:function(c,
a,b,d,e){if((a/=e/2)<1)return d/2*a*a*a*a*a+b;return d/2*((a-=2)*a*a*a*a+2)+b},easeInSine:function(c,a,b,d,e){return-d*Math.cos(a/e*(Math.PI/2))+d+b},easeOutSine:function(c,a,b,d,e){return d*Math.sin(a/e*(Math.PI/2))+b},easeInOutSine:function(c,a,b,d,e){return-d/2*(Math.cos(Math.PI*a/e)-1)+b},easeInExpo:function(c,a,b,d,e){return a==0?b:d*Math.pow(2,10*(a/e-1))+b},easeOutExpo:function(c,a,b,d,e){return a==e?b+d:d*(-Math.pow(2,-10*a/e)+1)+b},easeInOutExpo:function(c,a,b,d,e){if(a==0)return b;if(a==
e)return b+d;if((a/=e/2)<1)return d/2*Math.pow(2,10*(a-1))+b;return d/2*(-Math.pow(2,-10*--a)+2)+b},easeInCirc:function(c,a,b,d,e){return-d*(Math.sqrt(1-(a/=e)*a)-1)+b},easeOutCirc:function(c,a,b,d,e){return d*Math.sqrt(1-(a=a/e-1)*a)+b},easeInOutCirc:function(c,a,b,d,e){if((a/=e/2)<1)return-d/2*(Math.sqrt(1-a*a)-1)+b;return d/2*(Math.sqrt(1-(a-=2)*a)+1)+b},easeInElastic:function(c,a,b,d,e){c=1.70158;var g=0,h=d;if(a==0)return b;if((a/=e)==1)return b+d;g||(g=e*0.3);if(h<Math.abs(d)){h=d;c=g/4}else c=
g/(2*Math.PI)*Math.asin(d/h);return-(h*Math.pow(2,10*(a-=1))*Math.sin((a*e-c)*2*Math.PI/g))+b},easeOutElastic:function(c,a,b,d,e){c=1.70158;var g=0,h=d;if(a==0)return b;if((a/=e)==1)return b+d;g||(g=e*0.3);if(h<Math.abs(d)){h=d;c=g/4}else c=g/(2*Math.PI)*Math.asin(d/h);return h*Math.pow(2,-10*a)*Math.sin((a*e-c)*2*Math.PI/g)+d+b},easeInOutElastic:function(c,a,b,d,e){c=1.70158;var g=0,h=d;if(a==0)return b;if((a/=e/2)==2)return b+d;g||(g=e*0.3*1.5);if(h<Math.abs(d)){h=d;c=g/4}else c=g/(2*Math.PI)*Math.asin(d/
h);if(a<1)return-0.5*h*Math.pow(2,10*(a-=1))*Math.sin((a*e-c)*2*Math.PI/g)+b;return h*Math.pow(2,-10*(a-=1))*Math.sin((a*e-c)*2*Math.PI/g)*0.5+d+b},easeInBack:function(c,a,b,d,e,g){if(g==j)g=1.70158;return d*(a/=e)*a*((g+1)*a-g)+b},easeOutBack:function(c,a,b,d,e,g){if(g==j)g=1.70158;return d*((a=a/e-1)*a*((g+1)*a+g)+1)+b},easeInOutBack:function(c,a,b,d,e,g){if(g==j)g=1.70158;if((a/=e/2)<1)return d/2*a*a*(((g*=1.525)+1)*a-g)+b;return d/2*((a-=2)*a*(((g*=1.525)+1)*a+g)+2)+b},easeInBounce:function(c,
a,b,d,e){return d-f.easing.easeOutBounce(c,e-a,0,d,e)+b},easeOutBounce:function(c,a,b,d,e){return(a/=e)<1/2.75?d*7.5625*a*a+b:a<2/2.75?d*(7.5625*(a-=1.5/2.75)*a+0.75)+b:a<2.5/2.75?d*(7.5625*(a-=2.25/2.75)*a+0.9375)+b:d*(7.5625*(a-=2.625/2.75)*a+0.984375)+b},easeInOutBounce:function(c,a,b,d,e){if(a<e/2)return f.easing.easeInBounce(c,a*2,0,d,e)*0.5+b;return f.easing.easeOutBounce(c,a*2-e,0,d,e)*0.5+d*0.5+b}})}(jQuery);
;/*
 * jQuery UI Effects Highlight 1.8.12
 *
 * Copyright 2011, AUTHORS.txt (http://jqueryui.com/about)
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * http://docs.jquery.com/UI/Effects/Highlight
 *
 * Depends:
 *	jquery.effects.core.js
 */
(function(b){b.effects.highlight=function(c){return this.queue(function(){var a=b(this),e=["backgroundImage","backgroundColor","opacity"],d=b.effects.setMode(a,c.options.mode||"show"),f={backgroundColor:a.css("backgroundColor")};if(d=="hide")f.opacity=0;b.effects.save(a,e);a.show().css({backgroundImage:"none",backgroundColor:c.options.color||"#ffff99"}).animate(f,{queue:false,duration:c.duration,easing:c.options.easing,complete:function(){d=="hide"&&a.hide();b.effects.restore(a,e);d=="show"&&!b.support.opacity&&
this.style.removeAttribute("filter");c.callback&&c.callback.apply(this,arguments);a.dequeue()}})})}})(jQuery);
;

/**
 * http://github.com/valums/file-uploader
 * 
 * Multiple file upload component with progress-bar, drag-and-drop. 
 * ÂŠ 2010 Andrew Valums ( andrew(at)valums.com ) 
 * 
 * Licensed under GNU GPL 2 or later, see license.txt.
 */    

//
// Helper functions
//

var qq = qq || {};

/**
 * Adds all missing properties from second obj to first obj
 */ 
qq.extend = function(first, second){
    for (var prop in second){
        first[prop] = second[prop];
    }
};  

/**
 * Searches for a given element in the array, returns -1 if it is not present.
 * @param {Number} [from] The index at which to begin the search
 */
qq.indexOf = function(arr, elt, from){
    if (arr.indexOf) return arr.indexOf(elt, from);
    
    from = from || 0;
    var len = arr.length;    
    
    if (from < 0) from += len;  

    for (; from < len; from++){  
        if (from in arr && arr[from] === elt){  
            return from;
        }
    }  
    return -1;  
}; 
    
qq.getUniqueId = (function(){
    var id = 0;
    return function(){return id++;};
})();

//
// Events

qq.attach = function(element, type, fn){
    if (element.addEventListener){
        element.addEventListener(type, fn, false);
    } else if (element.attachEvent){
        element.attachEvent('on' + type, fn);
    }
};
qq.detach = function(element, type, fn){
    if (element.removeEventListener){
        element.removeEventListener(type, fn, false);
    } else if (element.attachEvent){
        element.detachEvent('on' + type, fn);
    }
};

qq.preventDefault = function(e){
    if (e.preventDefault){
        e.preventDefault();
    } else{
        e.returnValue = false;
    }
};

//
// Node manipulations

/**
 * Insert node a before node b.
 */
qq.insertBefore = function(a, b){
    b.parentNode.insertBefore(a, b);
};
qq.remove = function(element){
    element.parentNode.removeChild(element);
};

qq.contains = function(parent, descendant){       
    // compareposition returns false in this case
    if (parent == descendant) return true;
    
    if (parent.contains){
        return parent.contains(descendant);
    } else {
        return !!(descendant.compareDocumentPosition(parent) & 8);
    }
};

/**
 * Creates and returns element from html string
 * Uses innerHTML to create an element
 */
qq.toElement = (function(){
    var div = document.createElement('div');
    return function(html){
        div.innerHTML = html;
        var element = div.firstChild;
        div.removeChild(element);
        return element;
    };
})();

//
// Node properties and attributes

/**
 * Sets styles for an element.
 * Fixes opacity in IE6-8.
 */
qq.css = function(element, styles){
    if (styles.opacity != null){
        if (typeof element.style.opacity != 'string' && typeof(element.filters) != 'undefined'){
            styles.filter = 'alpha(opacity=' + Math.round(100 * styles.opacity) + ')';
        }
    }
    qq.extend(element.style, styles);
};
qq.hasClass = function(element, name){
    var re = new RegExp('(^| )' + name + '( |$)');
    return re.test(element.className);
};
qq.addClass = function(element, name){
    if (!qq.hasClass(element, name)){
        element.className += ' ' + name;
    }
};
qq.removeClass = function(element, name){
    var re = new RegExp('(^| )' + name + '( |$)');
    element.className = element.className.replace(re, ' ').replace(/^\s+|\s+$/g, "");
};
qq.setText = function(element, text){
    element.innerText = text;
    element.textContent = text;
};

//
// Selecting elements

qq.children = function(element){
    var children = [],
    child = element.firstChild;

    while (child){
        if (child.nodeType == 1){
            children.push(child);
        }
        child = child.nextSibling;
    }

    return children;
};

qq.getByClass = function(element, className){
    if (element.querySelectorAll){
        return element.querySelectorAll('.' + className);
    }

    var result = [];
    var candidates = element.getElementsByTagName("*");
    var len = candidates.length;

    for (var i = 0; i < len; i++){
        if (qq.hasClass(candidates[i], className)){
            result.push(candidates[i]);
        }
    }
    return result;
};

/**
 * obj2url() takes a json-object as argument and generates
 * a querystring. pretty much like jQuery.param()
 * 
 * how to use:
 *
 *    `qq.obj2url({a:'b',c:'d'},'http://any.url/upload?otherParam=value');`
 *
 * will result in:
 *
 *    `http://any.url/upload?otherParam=value&a=b&c=d`
 *
 * @param  Object JSON-Object
 * @param  String current querystring-part
 * @return String encoded querystring
 */
qq.obj2url = function(obj, temp, prefixDone){
    var uristrings = [],
        prefix = '&',
        add = function(nextObj, i){
            var nextTemp = temp 
                ? (/\[\]$/.test(temp)) // prevent double-encoding
                   ? temp
                   : temp+'['+i+']'
                : i;
            if ((nextTemp != 'undefined') && (i != 'undefined')) {  
                uristrings.push(
                    (typeof nextObj === 'object') 
                        ? qq.obj2url(nextObj, nextTemp, true)
                        : (Object.prototype.toString.call(nextObj) === '[object Function]')
                            ? encodeURIComponent(nextTemp) + '=' + encodeURIComponent(nextObj())
                            : encodeURIComponent(nextTemp) + '=' + encodeURIComponent(nextObj)                                                          
                );
            }
        }; 

    if (!prefixDone && temp) {
      prefix = (/\?/.test(temp)) ? (/\?$/.test(temp)) ? '' : '&' : '?';
      uristrings.push(temp);
      uristrings.push(qq.obj2url(obj));
    } else if ((Object.prototype.toString.call(obj) === '[object Array]') && (typeof obj != 'undefined') ) {
        // we wont use a for-in-loop on an array (performance)
        for (var i = 0, len = obj.length; i < len; ++i){
            add(obj[i], i);
        }
    } else if ((typeof obj != 'undefined') && (obj !== null) && (typeof obj === "object")){
        // for anything else but a scalar, we will use for-in-loop
        for (var i in obj){
            add(obj[i], i);
        }
    } else {
        uristrings.push(encodeURIComponent(temp) + '=' + encodeURIComponent(obj));
    }

    return uristrings.join(prefix)
                     .replace(/^&/, '')
                     .replace(/%20/g, '+'); 
};

//
//
// Uploader Classes
//
//

var qq = qq || {};
    
/**
 * Creates upload button, validates upload, but doesn't create file list or dd. 
 */
qq.FileUploaderBasic = function(o){
    this._options = {
        // set to true to see the server response
        debug: false,
        action: '/server/upload',
        params: {},
        button: null,
        multiple: true,
        maxConnections: 3,
        // validation        
        allowedExtensions: [],               
        sizeLimit: 0,   
        minSizeLimit: 0,                             
        // events
        // return false to cancel submit
        onSubmit: function(id, fileName){},
        onProgress: function(id, fileName, loaded, total){},
        onComplete: function(id, fileName, responseJSON){},
        onCancel: function(id, fileName){},
        // messages                
        messages: {
            typeError: "{file} has invalid extension. Only {extensions} are allowed.",
            sizeError: "{file} is too large, maximum file size is {sizeLimit}.",
            minSizeError: "{file} is too small, minimum file size is {minSizeLimit}.",
            emptyError: "{file} is empty, please select files again without it.",
            onLeave: "The files are being uploaded, if you leave now the upload will be cancelled."            
        },
        showMessage: function(message){
            alert(message);

            $(".upload")
            .css({
                "background-image" : "url("+DocumentRoot+"views/image/upload.png)"
            });  

        }               
    };
    qq.extend(this._options, o);
        
    // number of files being uploaded
    this._filesInProgress = 0;
    this._handler = this._createUploadHandler(); 
    
    if (this._options.button){ 
        this._button = this._createUploadButton(this._options.button);
    }
                        
    this._preventLeaveInProgress();         
};
   
qq.FileUploaderBasic.prototype = {
    setParams: function(params){
        this._options.params = params;
    },
    getInProgress: function(){
        return this._filesInProgress;         
    },
    _createUploadButton: function(element){
        var self = this;
        
        return new qq.UploadButton({
            element: element,
            multiple: this._options.multiple && qq.UploadHandlerXhr.isSupported(),
            onChange: function(input){
                self._onInputChange(input);
            }        
        });           
    },    
    _createUploadHandler: function(){
        var self = this,
            handlerClass;        
        
        if(qq.UploadHandlerXhr.isSupported()){           
            handlerClass = 'UploadHandlerXhr';                        
        } else {
            handlerClass = 'UploadHandlerForm';
        }

        var handler = new qq[handlerClass]({
            debug: this._options.debug,
            action: this._options.action,         
            maxConnections: this._options.maxConnections,   
            onProgress: function(id, fileName, loaded, total){                
                self._onProgress(id, fileName, loaded, total);
                self._options.onProgress(id, fileName, loaded, total);                    
            },            
            onComplete: function(id, fileName, result){
                self._onComplete(id, fileName, result);
                self._options.onComplete(id, fileName, result);
            },
            onCancel: function(id, fileName){
                self._onCancel(id, fileName);
                self._options.onCancel(id, fileName);
            }
        });

        return handler;
    },    
    _preventLeaveInProgress: function(){
        var self = this;
        
        qq.attach(window, 'beforeunload', function(e){
            if (!self._filesInProgress){return;}
            
            var e = e || window.event;
            // for ie, ff
            e.returnValue = self._options.messages.onLeave;
            // for webkit
            return self._options.messages.onLeave;             
        });        
    },    
    _onSubmit: function(id, fileName){
        this._filesInProgress++;  
    },
    _onProgress: function(id, fileName, loaded, total){        
    },
    _onComplete: function(id, fileName, result){
        this._filesInProgress--;                 
        if (result.error){
            this._options.showMessage(result.error);
        }             
    },
    _onCancel: function(id, fileName){
        this._filesInProgress--;        
    },
    _onInputChange: function(input){
        if (this._handler instanceof qq.UploadHandlerXhr){                
            this._uploadFileList(input.files);                   
        } else {             
            if (this._validateFile(input)){                
                this._uploadFile(input);                                    
            }                      
        }               
        this._button.reset();   
    },  
    _uploadFileList: function(files){
        for (var i=0; i<files.length; i++){
            if ( !this._validateFile(files[i])){
                return;
            }            
        }
        
        for (var i=0; i<files.length; i++){
            this._uploadFile(files[i]);        
        }        
    },       
    _uploadFile: function(fileContainer){      
        var id = this._handler.add(fileContainer);
        var fileName = this._handler.getName(id);
        
        if (this._options.onSubmit(id, fileName) !== false){
            this._onSubmit(id, fileName);
            this._handler.upload(id, this._options.params);
        }
    },      
    _validateFile: function(file){
        var name, size;
        
        if (file.value){
            // it is a file input            
            // get input value and remove path to normalize
            name = file.value.replace(/.*(\/|\\)/, "");
        } else {
            // fix missing properties in Safari
            name = file.fileName != null ? file.fileName : file.name;
            size = file.fileSize != null ? file.fileSize : file.size;
        }
                    
        if (! this._isAllowedExtension(name)){            
            this._error('typeError', name);
            return false;
            
        } else if (size === 0){            
            this._error('emptyError', name);
            return false;
                                                     
        } else if (size && this._options.sizeLimit && size > this._options.sizeLimit){            
            this._error('sizeError', name);
            return false;
                        
        } else if (size && size < this._options.minSizeLimit){
            this._error('minSizeError', name);
            return false;            
        }
        
        return true;                
    },
    _error: function(code, fileName){
        var message = this._options.messages[code];        
        function r(name, replacement){message = message.replace(name, replacement);}
        
        r('{file}', this._formatFileName(fileName));        
        r('{extensions}', this._options.allowedExtensions.join(', '));
        r('{sizeLimit}', this._formatSize(this._options.sizeLimit));
        r('{minSizeLimit}', this._formatSize(this._options.minSizeLimit));
        
        this._options.showMessage(message);                
    },
    _formatFileName: function(name){
    	// we want full name not the short one
    	/*
        if (name.length > 33){
            name = name.slice(0, 19) + '...' + name.slice(-13);    
        }
        */
        return name;
    },
    _isAllowedExtension: function(fileName){
        var ext = (-1 !== fileName.indexOf('.')) ? fileName.replace(/.*[.]/, '').toLowerCase() : '';
        var allowed = this._options.allowedExtensions;
        
        if (!allowed.length){return true;}        
        
        for (var i=0; i<allowed.length; i++){
            if (allowed[i].toLowerCase() == ext){return true;}    
        }
        
        return false;
    },    
    _formatSize: function(bytes){
        var i = -1;                                    
        do {
            bytes = bytes / 1024;
            i++;  
        } while (bytes > 99);
        
        return Math.max(bytes, 0.1).toFixed(1) + ['kB', 'MB', 'GB', 'TB', 'PB', 'EB'][i];          
    }
};
    
       
/**
 * Class that creates upload widget with drag-and-drop and file list
 * @inherits qq.FileUploaderBasic
 */
qq.FileUploader = function(o){
    // call parent constructor
    qq.FileUploaderBasic.apply(this, arguments);
    
    // additional options    
    qq.extend(this._options, {
        element: null,
        // if set, will be used instead of qq-upload-list in template
        listElement: null,
                
        template: '<div class="qq-uploader">' + 
                '<div class="qq-upload-drop-area"><span>Drop files here to upload</span></div>' +
                '<ul class="qq-upload-list"></ul><a href="#" class="qq-upload-button"></a>' +
                '' + 
             '</div>',

        // template for one item in file list
        fileTemplate: '<li>' +
                '<span class="qq-upload-file"></span>' +
                '<span class="qq-upload-size"></span>' +
                '<span class="qq-upload-failed-text">Failed</span>' +
            '</li>',        
        
        classes: {
            // used to get elements from templates
            button: 'qq-upload-button',
            drop: 'qq-upload-drop-area',
            dropActive: 'qq-upload-drop-area-active',
            list: 'qq-upload-list',
                        
            file: 'qq-upload-file',
            spinner: 'qq-upload-spinner',
            size: 'qq-upload-size',
            cancel: 'qq-upload-cancel',

            // added to list item when upload completes
            // used in css to hide progress spinner
            success: 'qq-upload-success',
            fail: 'qq-upload-fail'
        }
    });
    // overwrite options with user supplied    
    qq.extend(this._options, o);       

    this._element = this._options.element;
    this._element.innerHTML = this._options.template;

    this._listElement = this._options.listElement || this._find(this._element, 'list');
    
    this._classes = this._options.classes;
        
    this._button = this._createUploadButton(this._find(this._element, 'button'));        
    
    this._bindCancelEvent();
};

// inherit from Basic Uploader
qq.extend(qq.FileUploader.prototype, qq.FileUploaderBasic.prototype);

qq.extend(qq.FileUploader.prototype, {
    /**
     * Gets one of the elements listed in this._options.classes
     **/
    _find: function(parent, type){                                
        var element = qq.getByClass(parent, this._options.classes[type])[0];        
        if (!element){
            throw new Error('element not found ' + type);
        }
        
        return element;
    },
    _onSubmit: function(id, fileName){
        qq.FileUploaderBasic.prototype._onSubmit.apply(this, arguments);
        this._addToList(id, fileName);
        
        $(".upload")
        .css({
            "background-image" : "url("+DocumentRoot+"views/image/loader.gif)"
        });
        
    },
    _onProgress: function(id, fileName, loaded, total){
        qq.FileUploaderBasic.prototype._onProgress.apply(this, arguments);

        var item = this._getItemByFileId(id);
        var size = this._find(item, 'size');
        size.style.display = 'none';
        
        
        var text; 
        if (loaded != total){
            text = Math.round(loaded / total * 100) + '% from ' + this._formatSize(total);
        } else {                                   
            text = this._formatSize(total);
        }          
        
        qq.setText(size, text);         
    },
    _onComplete: function(id, fileName, result){
        qq.FileUploaderBasic.prototype._onComplete.apply(this, arguments);

        // mark completed
        var item = this._getItemByFileId(id);                
        //qq.remove(this._find(item, 'cancel'));
        //qq.remove(this._find(item, 'spinner'));
        
        
        if (result.success){
            //qq.addClass(item, this._classes.success);           
            var to_user = $("#to_user").val();
            fileElement = $(".qq-upload-file").html();

               if(result.success)
               {

                   $.ajax({
                            type: "POST",
                            timeout: 20000,
                            url: DocumentRoot+"index.php?page=messaging&html=1",
                            dataType: "html",
                            data: 'msg=<a href="../uploads/'+result.filename+'" target="_blank">Sent you a file</a>&to='+to_user,
                            success: function(theResponse) {

                                $("#messages").html(theResponse);
                                $("#message").val('');
        var $id = $("#messages");
        var $flow = $id.height();
        $id.css("height", "auto");

        var $autoheight = $id.height();

        $("#messages").css("height", $flow).scrollTop($autoheight);

                            }
                    });
               }
        } else {
         
            //qq.addClass(item, this._classes.fail);
        }

            $(".upload")
            .css({
                "background-image" : "url("+DocumentRoot+"views/image/upload.png)"
            });  
                 
    },
    _addToList: function(id, fileName){
        var item = qq.toElement(this._options.fileTemplate);                
        item.qqFileId = id;

        var fileElement = this._find(item, 'file');
        
        // we want full name not formatted one        
        qq.setText(fileElement, this._formatFileName(fileName));
        //qq.setText(fileElement, filename);
        
        this._find(item, 'size').style.display = 'none';        

        this._listElement.appendChild(item);
    },
    _getItemByFileId: function(id){
        var item = this._listElement.firstChild;        
        
        // there can't be txt nodes in dynamically created list
        // and we can  use nextSibling
        while (item){            
            if (item.qqFileId == id) return item;            
            item = item.nextSibling;
        }          
    },
    /**
     * delegate click event for cancel link 
     **/
    _bindCancelEvent: function(){
        var self = this,
            list = this._listElement;            
        
        qq.attach(list, 'click', function(e){            
            e = e || window.event;
            var target = e.target || e.srcElement;
            
            if (qq.hasClass(target, self._classes.cancel)){                
                qq.preventDefault(e);
               
                var item = target.parentNode;
                self._handler.cancel(item.qqFileId);
                qq.remove(item);
            }
        });
    }    
});
    


qq.UploadButton = function(o){
    this._options = {
        element: null,  
        // if set to true adds multiple attribute to file input      
        multiple: false,
        // name attribute of file input
        name: 'file',
        onChange: function(input){},
        hoverClass: 'qq-upload-button-hover',
        focusClass: 'qq-upload-button-focus'                       
    };
    
    qq.extend(this._options, o);
        
    this._element = this._options.element;
    
    // make button suitable container for input
    qq.css(this._element, {
        position: 'relative',
        overflow: 'hidden',
        // Make sure browse button is in the right side
        // in Internet Explorer
        direction: 'ltr'
    });   
    
    this._input = this._createInput();
};

qq.UploadButton.prototype = {
    /* returns file input element */    
    getInput: function(){
        return this._input;
    },
    /* cleans/recreates the file input */
    reset: function(){
        if (this._input.parentNode){
            qq.remove(this._input);    
        }                
        
        qq.removeClass(this._element, this._options.focusClass);
        this._input = this._createInput();
    },    
    _createInput: function(){                
        var input = document.createElement("input");
        
        if (this._options.multiple){
            input.setAttribute("multiple", "multiple");
        }
                
        input.setAttribute("type", "file");
        input.setAttribute("name", this._options.name);
        
        qq.css(input, {
            position: 'absolute',
            // in Opera only 'browse' button
            // is clickable and it is located at
            // the right side of the input
            right: 0,
            top: 0,
            fontFamily: 'Arial',
            // 4 persons reported this, the max values that worked for them were 243, 236, 236, 118
            fontSize: '118px',
            margin: 0,
            padding: 0,
            cursor: 'pointer',
            opacity: 0
        });
        
        this._element.appendChild(input);

        var self = this;
        qq.attach(input, 'change', function(){
            self._options.onChange(input);
        });
                
        qq.attach(input, 'mouseover', function(){
            qq.addClass(self._element, self._options.hoverClass);
        });
        qq.attach(input, 'mouseout', function(){
            qq.removeClass(self._element, self._options.hoverClass);
        });
        qq.attach(input, 'focus', function(){
            qq.addClass(self._element, self._options.focusClass);
        });
        qq.attach(input, 'blur', function(){
            qq.removeClass(self._element, self._options.focusClass);
        });

        // IE and Opera, unfortunately have 2 tab stops on file input
        // which is unacceptable in our case, disable keyboard access
        if (window.attachEvent){
            // it is IE or Opera
            input.setAttribute('tabIndex', "-1");
        }

        return input;            
    }        
};

/**
 * Class for uploading files, uploading itself is handled by child classes
 */
qq.UploadHandlerAbstract = function(o){
    this._options = {
        debug: false,
        action: '/upload.php',
        // maximum number of concurrent uploads        
        maxConnections: 999,
        onProgress: function(id, fileName, loaded, total){},
        onComplete: function(id, fileName, response){},
        onCancel: function(id, fileName){}
    };
    qq.extend(this._options, o);    
    
    this._queue = [];
    // params for files in queue
    this._params = [];
};
qq.UploadHandlerAbstract.prototype = {
    log: function(str){
        if (this._options.debug && window.console) console.log('[uploader] ' + str);        
    },
    /**
     * Adds file or file input to the queue
     * @returns id
     **/    
    add: function(file){},
    /**
     * Sends the file identified by id and additional query params to the server
     */
    upload: function(id, params){
        var len = this._queue.push(id);

        var copy = {};        
        qq.extend(copy, params);
        this._params[id] = copy;        
                
        // if too many active uploads, wait...
        if (len <= this._options.maxConnections){               
            this._upload(id, this._params[id]);
        }
    },
    /**
     * Cancels file upload by id
     */
    cancel: function(id){
        this._cancel(id);
        this._dequeue(id);
    },
    /**
     * Cancells all uploads
     */
    cancelAll: function(){
        for (var i=0; i<this._queue.length; i++){
            this._cancel(this._queue[i]);
        }
        this._queue = [];
    },
    /**
     * Returns name of the file identified by id
     */
    getName: function(id){},
    /**
     * Returns size of the file identified by id
     */          
    getSize: function(id){},
    /**
     * Returns id of files being uploaded or
     * waiting for their turn
     */
    getQueue: function(){
        return this._queue;
    },
    /**
     * Actual upload method
     */
    _upload: function(id){},
    /**
     * Actual cancel method
     */
    _cancel: function(id){},     
    /**
     * Removes element from queue, starts upload of next
     */
    _dequeue: function(id){
        var i = qq.indexOf(this._queue, id);
        this._queue.splice(i, 1);
                
        var max = this._options.maxConnections;
        
        if (this._queue.length >= max && i < max){
            var nextId = this._queue[max-1];
            this._upload(nextId, this._params[nextId]);
        }
    }        
};

/**
 * Class for uploading files using form and iframe
 * @inherits qq.UploadHandlerAbstract
 */
qq.UploadHandlerForm = function(o){
    qq.UploadHandlerAbstract.apply(this, arguments);
       
    this._inputs = {};
};
// @inherits qq.UploadHandlerAbstract
qq.extend(qq.UploadHandlerForm.prototype, qq.UploadHandlerAbstract.prototype);

qq.extend(qq.UploadHandlerForm.prototype, {
    add: function(fileInput){
        fileInput.setAttribute('name', 'qqfile');
        var id = 'qq-upload-handler-iframe' + qq.getUniqueId();       
        
        this._inputs[id] = fileInput;
        
        // remove file input from DOM
        if (fileInput.parentNode){
            qq.remove(fileInput);
        }
                
        return id;
    },
    getName: function(id){
        // get input value and remove path to normalize
        return this._inputs[id].value.replace(/.*(\/|\\)/, "");
    },    
    _cancel: function(id){
        this._options.onCancel(id, this.getName(id));
        
        delete this._inputs[id];        

        var iframe = document.getElementById(id);
        if (iframe){
            // to cancel request set src to something else
            // we use src="javascript:false;" because it doesn't
            // trigger ie6 prompt on https
            iframe.setAttribute('src', 'javascript:false;');

            qq.remove(iframe);
        }
    },     
    _upload: function(id, params){                        
        var input = this._inputs[id];
        
        if (!input){
            throw new Error('file with passed id was not added, or already uploaded or cancelled');
        }                

        var fileName = this.getName(id);
                
        var iframe = this._createIframe(id);
        var form = this._createForm(iframe, params);
        form.appendChild(input);

        var self = this;
        this._attachLoadEvent(iframe, function(){                                 
            self.log('iframe loaded');
            
            var response = self._getIframeContentJSON(iframe);

            self._options.onComplete(id, fileName, response);
            self._dequeue(id);
            
            delete self._inputs[id];
            // timeout added to fix busy state in FF3.6
            setTimeout(function(){
                qq.remove(iframe);
            }, 1);
        });

        form.submit();        
        qq.remove(form);        
        
        return id;
    }, 
    _attachLoadEvent: function(iframe, callback){
        qq.attach(iframe, 'load', function(){
            // when we remove iframe from dom
            // the request stops, but in IE load
            // event fires
            if (!iframe.parentNode){
                return;
            }

            // fixing Opera 10.53
            if (iframe.contentDocument &&
                iframe.contentDocument.body &&
                iframe.contentDocument.body.innerHTML == "false"){
                // In Opera event is fired second time
                // when body.innerHTML changed from false
                // to server response approx. after 1 sec
                // when we upload file with iframe
                return;
            }

            callback();
        });
    },
    /**
     * Returns json object received by iframe from server.
     */
    _getIframeContentJSON: function(iframe){
        // iframe.contentWindow.document - for IE<7
        var doc = iframe.contentDocument ? iframe.contentDocument: iframe.contentWindow.document,
            response;
        
        this.log("converting iframe's innerHTML to JSON");
        this.log("innerHTML = " + doc.body.innerHTML);
                        
        try {
            response = eval("(" + doc.body.innerHTML + ")");
        } catch(err){
            response = {};
        }        

        return response;
    },
    /**
     * Creates iframe with unique name
     */
    _createIframe: function(id){
        // We can't use following code as the name attribute
        // won't be properly registered in IE6, and new window
        // on form submit will open
        // var iframe = document.createElement('iframe');
        // iframe.setAttribute('name', id);

        var iframe = qq.toElement('<iframe src="javascript:false;" name="' + id + '" />');
        // src="javascript:false;" removes ie6 prompt on https

        iframe.setAttribute('id', id);

        iframe.style.display = 'none';
        document.body.appendChild(iframe);

        return iframe;
    },
    /**
     * Creates form, that will be submitted to iframe
     */
    _createForm: function(iframe, params){
        // We can't use the following code in IE6
        // var form = document.createElement('form');
        // form.setAttribute('method', 'post');
        // form.setAttribute('enctype', 'multipart/form-data');
        // Because in this case file won't be attached to request
        var form = qq.toElement('<form method="post" enctype="multipart/form-data"></form>');

        var queryString = qq.obj2url(params, this._options.action);

        form.setAttribute('action', queryString);
        form.setAttribute('target', iframe.name);
        form.style.display = 'none';
        document.body.appendChild(form);

        return form;
    }
});

/**
 * Class for uploading files using xhr
 * @inherits qq.UploadHandlerAbstract
 */
qq.UploadHandlerXhr = function(o){
    qq.UploadHandlerAbstract.apply(this, arguments);

    this._files = [];
    this._xhrs = [];
    
    // current loaded size in bytes for each file 
    this._loaded = [];
};

// static method
qq.UploadHandlerXhr.isSupported = function(){
    var input = document.createElement('input');
    input.type = 'file';        
    
    return (
        'multiple' in input &&
        typeof File != "undefined" &&
        typeof (new XMLHttpRequest()).upload != "undefined" );       
};

// @inherits qq.UploadHandlerAbstract
qq.extend(qq.UploadHandlerXhr.prototype, qq.UploadHandlerAbstract.prototype)

qq.extend(qq.UploadHandlerXhr.prototype, {
    /**
     * Adds file to the queue
     * Returns id to use with upload, cancel
     **/    
    add: function(file){
        if (!(file instanceof File)){
            throw new Error('Passed obj in not a File (in qq.UploadHandlerXhr)');
        }
                
        return this._files.push(file) - 1;        
    },
    getName: function(id){        
        var file = this._files[id];
        // fix missing name in Safari 4
        return file.fileName != null ? file.fileName : file.name;       
    },
    getSize: function(id){
        var file = this._files[id];
        return file.fileSize != null ? file.fileSize : file.size;
    },    
    /**
     * Returns uploaded bytes for file identified by id 
     */    
    getLoaded: function(id){
        return this._loaded[id] || 0; 
    },
    /**
     * Sends the file identified by id and additional query params to the server
     * @param {Object} params name-value string pairs
     */    
    _upload: function(id, params){
        var file = this._files[id],
            name = this.getName(id),
            size = this.getSize(id);
                
        this._loaded[id] = 0;
                                
        var xhr = this._xhrs[id] = new XMLHttpRequest();
        var self = this;
                                        
        xhr.upload.onprogress = function(e){
            if (e.lengthComputable){
                self._loaded[id] = e.loaded;
                self._options.onProgress(id, name, e.loaded, e.total);
            }
        };

        xhr.onreadystatechange = function(){            
            if (xhr.readyState == 4){
                self._onComplete(id, xhr);                    
            }
        };

        // build query string
        params = params || {};
        params['qqfile'] = name;
        var queryString = qq.obj2url(params, this._options.action);

        xhr.open("POST", queryString, true);
        xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        xhr.setRequestHeader("X-File-Name", encodeURIComponent(name));
        xhr.setRequestHeader("Content-Type", "application/octet-stream");
        xhr.send(file);
    },
    _onComplete: function(id, xhr){
        // the request was aborted/cancelled
        if (!this._files[id]) return;
        
        var name = this.getName(id);
        var size = this.getSize(id);
        
        this._options.onProgress(id, name, size, size);
                
        if (xhr.status == 200){
            this.log("xhr - server response received");
            this.log("responseText = " + xhr.responseText);
                        
            var response;
                    
            try {
                response = eval("(" + xhr.responseText + ")");
            } catch(err){
                response = {};
            }
            
            this._options.onComplete(id, name, response);
                        
        } else {                   
            this._options.onComplete(id, name, {});
        }
                
        this._files[id] = null;
        this._xhrs[id] = null;    
        this._dequeue(id);                    
    },
    _cancel: function(id){
        this._options.onCancel(id, this.getName(id));
        
        this._files[id] = null;
        
        if (this._xhrs[id]){
            this._xhrs[id].abort();
            this._xhrs[id] = null;                                   
        }
    }
});

function createUploader(){            
    var uploader = new qq.FileUploader({
        element: document.getElementById('upload'),
        action: DocumentRoot+'index.php?page=upload',
        debug: true
    });           
}

// in your app create uploader as soon as the DOM is ready
// don't wait for the window to load  
window.onload = createUploader;