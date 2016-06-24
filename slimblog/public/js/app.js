$(document).ready(function(){


$.get('http://slimblog/api/post' , function(data){
  
  var output = '<ul>';
  
   $.each(JSON.parse(data),function(index , post){
  
     output+= '<li>'+post.title+'</li>';

   });

  output+= '</ul>' ;

  $('#post').html(output);

});

});


$(document).ready(function(){


$.get('http://slimblog/api/categories' , function(data){
  
  var output = '<ul>';
  
   $.each(JSON.parse(data),function(index , categories){
  
     output+= '<li>'+categories.name+'</li>';

   });

  output+= '</ul>' ;

  $('#categories').html(output);

});

});