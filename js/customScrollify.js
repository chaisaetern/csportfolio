/**
 * 
 * 
 * 
 * Scrollify Script for Page Scroll
 * 
 * 
 * 
 */

$(function(){
    $.scrollify({
        section : ".section",
        sectionName : "data-id",
        interstitialSection : "",
        easing: "easeOutExpo",
        scrollSpeed: 800,
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
    
    // Disables scrollify
    // $.scrollify.disable()
});

