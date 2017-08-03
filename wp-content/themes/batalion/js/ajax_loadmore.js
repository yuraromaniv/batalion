jQuery(function($) {
  $('#events_loadmore').click(function() {
    var data = {
      'action': 'loadmore',
      'query': events_true_posts,
      'page': events_current_page,
      'post_type': events_post_type
    };
    $.ajax({
      url: events_ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      beforeSend: function() {
        $('#events_loadmore').text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
      },
      success: function(data) {
        if ( data ) { 
          $('#events_loadmore').text('Більше подій').before(data); // вставляем новые посты
          events_current_page++; // увеличиваем номер страницы на единицу
          if (events_current_page == events_max_pages) $("#events_loadmore").remove(); // если последняя страница, удаляем кнопку
        }
        else {
          $('#events_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
  });

  $('#blogs_loadmore').click(function() {
    var data = {
      'action': 'loadmore',
      'query': blogs_true_posts,
      'page': blogs_current_page,
      'post_type': blogs_post_type
    };
    $.ajax({
      url: blogs_ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      beforeSend: function() {
        $('#blogs_loadmore').text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
      },
      success:function(data) {
        if ( data ) { 
          $('#blogs_loadmore').text('Більше блогів').before(data); // вставляем новые посты
          blogs_current_page++; // увеличиваем номер страницы на единицу
          if (blogs_current_page == blogs_max_pages) $("#blogs_loadmore").remove(); // если последняя страница, удаляем кнопку
        }
        else {
          $('#blogs_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
  });

  $('#library_loadmore').click(function() {
    var data = {
      'action': 'loadmore',
      'query': library_true_posts,
      'page': library_current_page,
      'post_type': library_post_type
    };
    $.ajax({
      url: library_ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      beforeSend: function() {
        $('#library_loadmore').text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
      },
      success: function(data) {
        if ( data ) { 
          $('#library_loadmore').text('Більше публікацій').before(data); // вставляем новые посты
          library_current_page++; // увеличиваем номер страницы на единицу
          if (library_current_page == library_max_pages) $("#library_loadmore").remove(); // если последняя страница, удаляем кнопку
        }
        else {
          $('#library_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
  });

  $('#discussions_loadmore').click(function() {
    var data = {
      'action': 'loadmore',
      'query': discussions_true_posts,
      'page': discussions_current_page,
      'post_type': discussions_post_type
    };
    $.ajax({
      url: discussions_ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      beforeSend: function() {
        $('#discussions_loadmore').text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
      },
      success:function(data) {
        if ( data ) { 
          $('#discussions_loadmore').text('Більше тем').before(data); // вставляем новые посты
          discussions_current_page++; // увеличиваем номер страницы на единицу
          if (discussions_current_page == discussions_max_pages) $("#discussions_loadmore").remove(); // если последняя страница, удаляем кнопку
        }
        else {
          $('#discussions_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
  });

  $('#contributions_loadmore').click(function() {
    var data = {
      'action': 'loadmore',
      'query': contributions_true_posts,
      'page': contributions_current_page,
      'post_type': contributions_post_type
    };
    $.ajax({
      url: contributions_ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      beforeSend: function() {
        $('#contributions_loadmore').text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
      },
      success: function(data) {
        if ( data ) {
          $('#contributions_loadmore').text('Більше внесків');
          $('#contributions-table').append(data); // вставляем новые посты
          contributions_current_page++; // увеличиваем номер страницы на единицу
          if (contributions_current_page == contributions_max_pages) $("#contributions_loadmore").remove(); // если последняя страница, удаляем кнопку
        }
        else {
          $('#contributions_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
  });

  $('#donations_loadmore').click(function() {
    var data = {
      'action': 'loadmore',
      'query': donations_true_posts,
      'page': donations_current_page,
      'post_type': donations_post_type
    };
    $.ajax({
      url: donations_ajaxurl, // обработчик
      data: data, // данные
      type: 'POST', // тип запроса
      beforeSend: function() {
        $('#donations_loadmore').text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
      },
      success: function(data) {
        if ( data ) {
          $('#donations_loadmore').text('Більше пожертвувань');
          $('#donations-table').append(data); // вставляем новые посты
          donations_current_page++; // увеличиваем номер страницы на единицу
          if (donations_current_page == donations_max_pages) $("#donations_loadmore").remove(); // если последняя страница, удаляем кнопку
        }
        else {
          $('#donations_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
        }
      }
    });
  });

});