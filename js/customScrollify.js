/**
 * 
 * 
 * 
 * Scrollify Script for Page Scroll
 * 
 * 
 * 
 */

$(document).ready(function(){
    // $(function() {
        $.scrollify({
            section : ".section",
            sectionName : "data-id",
            interstitialSection : "",
            easing: "easeOutExpo",
            scrollSpeed: 1100,
            offset : 0,
            scrollbars: true,
            standardScrollElements: "",
            setHeights: true,
            overflowScroll: true,
            updateHash: true,
            touchScroll:true,
            before:function() {},
            after:function() {},
            afterResize:function() {},
            afterRender:function() {}
        });
    // });
});
console.log('working..')
