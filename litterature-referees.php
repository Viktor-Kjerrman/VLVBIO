<?php
/*
Template Name: Litterature & References Page
*/
?>
<?php get_header(); ?>

<div class="container add-top ">


  <div class="col-md-12 pevivabox   ">  
    <div class="col-md-5">
      <h1>Litterature and references</h1>
      <br/>
      <p>PEVIVA specializes in ELISA assays for the quantification of Cell Death modes (apoptosis and necrosis). Our products are used for research and clinical trials in the fields of oncology and hepatology.</p>
    </div>
    <div class="col-md-6 pull-right search-container">
      
    <div class="row">
      <div class="search"><input placeholder="Search here for: Titlte, Author, Product" type="search" id="searchInput" />
          <button type=button class="btn" id="clearSearch">Clear</button>
      </div>
    </div>
    <div class="row">

    <div class="one-select">
        <span class="custom-dropdown big">
            <select id="years">    
                <option name="">Years</option>
                <option name="1997">1997</option>
                <option name="1998">1998</option>  
                <option name="1999">1999</option>
                <option name="2000">2000</option>  
                <option name="2001">2001</option>
                <option name="2002">2002</option> 
                <option name="2003">2003</option>  
                <option name="2004">2004</option>
                <option name="2005">2005</option>  
                <option name="2006">2006</option>
                <option name="2007">2007</option>  
                <option name="2008">2008</option>
                <option name="2009">2009</option>  
                <option name="2010">2010</option>
                <option name="2011">2011</option>  
                <option name="2012">2012</option>
                <option name="2013">2013</option>  
                <option name="2014">2014</option>
            </select>
        </span>
    </div>
       <div class="one-select">
        <span class="custom-dropdown big">
            <select id="app-fields">    
                <option name="">Application fields</option>
                <option name="Oncology">Oncology</option>  
                <option name="Hepatology">Hepatology</option>
                <option name="Toxicology">Toxicology</option>
                <option name="Other Applications">Other Applications</option>
            </select>
        </span>
    </div>
        <div class="one-select">
        <span class="custom-dropdown big">
            <select id="products">    
                <option name="">Products</option>
                <option name="M30">M30 Apoptosense® ELISA</option>
                <option name="M65">M65 EpiDeath® ELISA</option>
                <option name="M65"> M65® ELISA</option>
                <option name="M30"> M30 CytoDeath™ ELISA</option>
                <option name="M30"> M30 CytoDEATH™ antibody</option>
                <option name="M5/M6"> M5/M6 Keratin 18 antibodies</option>
                <option name=""> Services</option>
            </select>
        </span>
    </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
<div class="row">
      <div id="mainContainer"></div>
    </div>
          <script type="text/template" id="tmplt-Movies">
           
          </script>
          <script type="text/template" id="tmplt-Movie">
          <div class="pevivabox each-lit">
         
          <div class="lit-title"><h4><%= Titel %></h4> </div>
          <div class="lit-auth"><i class="auth-ico"></i><p><%= Författare %> </p></div>
          <div class="lit-ref"><i class="mag-ico"></i><p><%= Publikation %></p></div>
          <div class="lit-title"><%= År %> </div>
          <div class="products">
            <div class="m30"><%= M30 %></div>
            <div class="M65"><%= M65 %></div>
            <div class="ED"><%= ED %></div>
            <div class="CDE"><%= CDE %></div>
            <div class="Oncology"><%= Onko %></div>
            <div class="Hepatology"><%= Hepa %></div>
            <div class="Toxicology"><%= Tox %></div>
            <div class="Other Applications"><%= Övrigt %></div>
          </div>

          <a href="<%= Länk %>">
           ABSTRACT HERE
          </a>
          </div>
          </script> 


    <script src="<?php bloginfo('template_directory') ?>/library/js/libs/jquery-1.7.1.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?>/library/js/libs/underscore.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?>/library/js/libs/backbone.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory') ?>/library/js/referees.js" type="text/javascript"></script>   
        
    </div>

  </div>
</div>

<script type="text/javascript">
  
$( document ).ready(function() {

  setTimeout(function() {

  var $elementList = $('#mainContainer').find('.col-md-4');

  $('#searchInput').keyup(function(eve){
  searchString=$(this).val().toLowerCase();
  searchArray=searchString.split(' ');
  var len = searchArray.length;
  $elementList.each(function(index,elem){
        $eleli = $(elem)
        $eleli.removeClass('hideThisLine');
        var oneLine = $eleli.text().toLowerCase()
        match = true,
        sal = len;
        while(sal--){
          if( oneLine.indexOf( searchArray[sal] ) == -1 ){
            match = false;
          }
        }
        if(!match){
          //console.log('this one is gets hidden',searchString);
          $eleli.addClass('hideThisLine');
        }
      });
      $('.dontShow').removeClass('dontShow');
      $('.hideThisLine').addClass('dontShow');
    });

      $('#years').change(function(eve){
        searchString=$("#years option:selected").attr('name').toLowerCase();
        searchArray=searchString.split(' ');
        var len = searchArray.length;
        $elementList.each(function(index,elem){
              $eleli = $(elem)
              $eleli.removeClass('hideThisLine');
              var oneLine = $eleli.text().toLowerCase()
              match = true,
              sal = len;
              while(sal--){
                if( oneLine.indexOf( searchArray[sal] ) == -1 ){
                  match = false;
                }
              }
              if(!match){
                //console.log('this one is gets hidden',searchString);
                $eleli.addClass('hideThisLine');
              }
            });
            $('.dontShow').removeClass('dontShow');
            $('.hideThisLine').addClass('dontShow');
          });

        $('#app-fields').change(function(eve){
          searchString=$("#app-fields option:selected").attr('name').toLowerCase();
          searchArray=searchString.split(' ');
          var len = searchArray.length;
          $elementList.each(function(index,elem){
                $eleli = $(elem)
                $eleli.removeClass('hideThisLine');
                var oneLine = $eleli.text().toLowerCase()
                match = true,
                sal = len;
                while(sal--){
                  if( oneLine.indexOf( searchArray[sal] ) == -1 ){
                    match = false;
                  }
                }
                if(!match){
                  //console.log('this one is gets hidden',searchString);
                  $eleli.addClass('hideThisLine');
                }
              });
              $('.dontShow').removeClass('dontShow');
              $('.hideThisLine').addClass('dontShow');
            });

          $('#products').change(function(eve){
          searchString=$("#products option:selected").attr('name').toLowerCase();
          searchArray=searchString.split(' ');
          var len = searchArray.length;
          $elementList.each(function(index,elem){
                $eleli = $(elem)
                $eleli.removeClass('hideThisLine');
                var oneLine = $eleli.text().toLowerCase()
                match = true,
                sal = len;
                while(sal--){
                  if( oneLine.indexOf( searchArray[sal] ) == -1 ){
                    match = false;
                  }
                }
                if(!match){
                  //console.log('this one is gets hidden',searchString);
                  $eleli.addClass('hideThisLine');
                }
              });
              $('.dontShow').removeClass('dontShow');
              $('.hideThisLine').addClass('dontShow');
            });
          // Do something after 2 seconds

          $('div.products div').each(function(i,e){
             
            if ( $(this).text() == "-") {
                $(this).remove();
            }

            if ( $(this).text() == "X") {
                var className = $(this).attr('class');
                $(this).html( className );
             }  

            });


}, 1000);
     console.log( "ready!" );
});

</script>
<?php get_footer(); ?>