/** List expanding function 
*** source: http://stackoverflow.com/questions/447789/jquery-expanding-collapsing-lists
*** author: Vijay Dev */

$(function()
{
    $('li:has(ul)')
    .click(function(event){
        if (this == event.target) 
        {
            var that = this;
            $('li:has(ul)').children().filter(':not(:hidden)').parent().each(function(x){
                if(this != that)
                    toggleList(this);
            });
            toggleList(this);
        }
    })
    .css({'cursor':'pointer', 'list-style-image':'url(images/arrow_right.png)'})
    .children().hide();

    $('li:not(:has(ul))').css({'list-style-image':'images/ul_normal.png'});
}); 
function toggleList(L)
{
    $(L).css('list-style-image', (!$(L).children().is(':hidden')) ? 'url(images/arrow_right.png)' : 'url(images/arrow_down.png)');
    $(L).children().toggle('fast');
}
