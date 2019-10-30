var page = ["#home", "#cpu", "#gpu", '#motherboard', '#ram',

			'#monitor', '#pccase', '#cpucooling', '#mouse', '#keyboard', 

			'#psu', '#i5', '#profile', '#cart','#login','#register'];

     // each value is used as a hash for an address

     // and it is doubled up as the id for a view

var curPage = page[0];



$(document).ready(function(){

   // if the hash is one of page2 to page3, 

   // render the page 

   var newPage = getPage(window.location.hash);

   render(newPage);



   // click event handler: 

   // 1) prevent loading of the new url

   // 2) may trigger hashchange event

   $('nav a').click(function(e){

       e.preventDefault();

       var newPage = $(this).attr('href');

       window.location.hash=newPage;

   });

   

   // hashchange event handler: 

   // convert the hash to one of the three 

   // page names and render the page

   $(window).on('hashchange', function(){

       var newPage = getPage(window.location.hash);

       render(newPage);

   });



});



// if the newPage is different from curPage

// hide the curPage and show the newPage

// update the curPage to the newPage

function render(newPage){

    if (newPage == curPage) return;

    $(curPage).hide();

    $(newPage).show();

    curPage = newPage; 

}



// convert the hash to one of the three page names

// other hash values are converted to page[0] (ie, page1)

function getPage(hash){

   var i = page.indexOf(hash);

   if (i<0 && hash != "") window.location.hash=page[0]; 

   return i < 1 ? page[0] : page[i];

}




jQuery.ajax({
    type: "POST",
    url: 'login.php',
    dataType: 'json',

    success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      yourVariable = obj.result;
                  }
                  else {
                      console.log(obj.error);
                  }
            }
});
