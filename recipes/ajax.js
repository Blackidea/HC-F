<script>
$(document).ready(function(){
    
    // получаем рандомные рецепт с учетом параметров фильра
   console.log(window.location.search);
    
   function getGetUrl() {
   var query = location.search.substr(1);
   var result = {};
   query.split("&").forEach(function(part) {
        var item = part.split("=");
        result[item[0]] = decodeURIComponent(item[1]);
   });
  return result;
}
    console.log(getGetUrl());
/*    if($_GET["showall"]!="y"){
        console.log($_GET["showall"]);
        url = window.location.pathname + window.location.search + '?showall=y';
        $.ajax({                                                                
           url: url,                                   
             data: '',
        	 success: function(data) {                                                      
                links = $(data).find('.recipe-link');
                rand = Math.floor(Math.random() * links.length);
                console.log($(links[rand]).attr('href'));
                //$(links[rand]).attr('href');
                $('.random-recipe').find('a').attr('href', $(links[rand]).attr('href'));
             }
 	     });
    }*/
    
          
    
    
    var pagesLinks = $('.js-pager-wrepper').find('a');
    console.log(pagesLinks);
    var loading = $('.loading-gif');
    var more = $('.js-more-news');
    var container = $('.recepts_slider');
    
    more.on('click', function(event){
        event.preventDefault();
        $(loading).show('slow');
        console.log("кол-во страниц: "+getPagesCount());
        console.log("текущая страница: "+getCurPageCount());
        console.log("следующая страница: "+genUrl());
        
        
        url = window.location.pathname + window.location.search+ genUrl();
        
        
        $.ajax({                                                                   
           url: url,                                   
             data: '',
        	 success: function(data) {                                                      
                console.log($(data).find('.recepts_slider'));
                $(container).append($(data).find('.recepts_slider').contents());
                pagesCounterPlus();
                checkMoreAvailible();
                $(loading).hide('slow');
        	  }
          });
    })
})
function checkMoreAvailible(){
    if(parseInt($('input[name="pageCur"]').val())>= parseInt($('input[name="pageCount"]').val())){
        $('.js-more-news').hide();
    }
    else{
  //      console.log('еще есть страницы');
    }
}
function pagesCounterPlus(){
    $('input[name="pageCur"]').val(parseInt($('input[name="pageCur"]').val())+1);
}
function getPagesCount(){
    return $('input[name="pageCount"]').val();
}
function getCurPageCount(){
    return $('input[name="pageCur"]').val();
}
function getNextPage(){
     return parseInt(getCurPageCount())+1;
}
function genUrl(){
    if(window.location.search!=""){
        url = "&PAGEN_1="+getNextPage();
    }
    else{
        url = "?PAGEN_1="+getNextPage();
    }
    return url;
}
</script>