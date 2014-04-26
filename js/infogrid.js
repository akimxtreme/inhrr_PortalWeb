$(function() {

    // Set up variables
    var $el, $parentWrap, $otherWrap, 
        $allTitles = $("dt").css({
            padding: '10px 0.5% 10px 0.5%', // setting the padding here prevents a weird situation, where it would start animating at 0 padding instead of 5
			marginTop: 2, 
			'font-weight':'bold',
            "cursor": "pointer" // make it seem clickable
        }),
        $allCells = $("dd").css({
            position: "relative",
			padding: '',
            top: 0,
            left: 0,
            display: "none" // info cells are just kicked off the page with CSS (for accessibility)
        });
    
    // clicking image of inactive column just opens column, doesn't go to link   
    $("#page-wrap2").delegate("a.image","click", function(e) { 
        
        if ( !$(this).parent().hasClass("curCol") ) {         
            e.preventDefault(); 
            $(this).next().find('dt:first').click(); 
        } 
        
    });
    
    // clicking on titles does stuff
    $("#page-wrap2").delegate("dt", "click", function() {
        
        // cache this, as always, is good form
        $el = $(this);
        
        // if this is already the active cell, don't do anything
        if (!$el.hasClass("current")) {
        
            $parentWrap = $el.parent().parent();
            $otherWraps = $(".info-col").not($parentWrap);
            
            // remove current cell from selection of all cells
            $allTitles = $("dt").not(this);
            
            // close all info cells
            $allCells.slideUp();
            
            // return all titles (except current one) to normal size
            $allTitles.animate({
                fontSize: "12px",
                paddingTop: 8,
                paddingRight: '0.5%',
                paddingBottom: 8,
                paddingLeft: '0.5%',
				marginTop: 2, 
            });
            
            // animate current title to larger size            
            $el.animate({
                 paddingTop: 8,
                }).next().slideDown();
            
            // make the current column the large size
            $parentWrap.animate({
                width: '100%'
            }).addClass("curCol");
            
            // make other columns the small size
            $otherWraps.animate({
                width: '100%'
            }).removeClass("curCol");
            
            // make sure the correct column is current
            $allTitles.removeClass("current");
            $el.addClass("current");  
        
        }
        
    });
    
    $("#starter").trigger("click");
    
});