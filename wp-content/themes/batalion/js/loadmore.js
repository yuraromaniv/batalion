jQuery(function($) {
	$('#events_loadmore').click(function() {
		$(this).text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': events_true_posts,
			'page' : events_current_page
		};
		$.ajax({
			url:events_ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
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
		$(this).text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if ( data ) { 
					$('#blogs_loadmore').text('Більше блогів').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#blogs_loadmore").remove(); // если последняя страница, удаляем кнопку
        }
        else {
					$('#blogs_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});

	$('#discussions_loadmore').click(function() {
		$(this).text('Завантаження...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if ( data ) { 
					$('#discussions_loadmore').text('Більше обговорень').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#discussions_loadmore").remove(); // если последняя страница, удаляем кнопку
        }
        else {
					$('#discussions_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});