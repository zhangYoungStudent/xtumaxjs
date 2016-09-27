


//-----滑动侧边栏---------------------------------------------------------------------------------------------------

$( document ).on( "pagecreate", "#demo-page", function() {
    $( document ).on( "swipeleft swiperight", "#demo-page", function( e ) {
        // We check if there is no open panel on the page because otherwise
        // a swipe to close the left panel would also open the right panel (and v.v.).
        // We do this by checking the data that the framework stores on the page element (panel: open).
        if ( $( ".ui-page-active" ).jqmData( "panel" ) !== "open" ) {
            if ( e.type === "swipeleft" ) {
                $( "#right-panel" ).panel( "open" );
            } else if ( e.type === "swiperight" ) {
                $( "#left-panel" ).panel( "open" );
            }
        }
    });
});
//-----滑动侧边栏---------------------------------------------------------------------------------------------------




//-----result---------------------------------------------------------------------------------------------------
function timedMsg()
{
    var t=setTimeout("location.assign('http://www.xtumax.top/zhidao.php')",8000);
}
//-----result---------------------------------------------------------------------------------------------------