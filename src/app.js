$(document).ready(function() {

  var source   = $("#card-template").html();
  var template = Handlebars.compile(source);

  $.ajax({
    url: 'dischi.php',
    method: 'GET',
    success: function(data) {
      for (var i = 0; i < data.length; i++) {

        console.log(data[i]);

        var context = {
          poster: data[i].poster,
          title: data[i].title,
          author: data[i].author,
          year: data[i].year
        };

        var html = template(context);
        $('.container').append(html);
      }
    },
    error: function() {
      console.log('error');
    },

  })

});
