$(document).ready(function(){						   		   
	//При нажатии на ссылку с классом poplight и href с a # 
	$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Получить имя popup
		var popURL = $(this).attr('href'); //Определить размер popup из href				
		//Запрос и Переменные из HREF URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Возвращает первое значение строки запроса
 
		//Добавить кнопку "Закрыть" в наше окно, прописываете прямой путь к картинке кнопки
		$('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" title="Закрыть окно" class="close"></a>');		
		//Определяет запас на выравнивание по центру (по вертикали по горизонтали)мы добавим 80px к высоте / ширине, значение полей вокруг содержимого (padding) и ширину границы устанавливаем в CSS
		var popMargTop = ($('#' + popID).height() + 80) / 2;
		var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		//Применяем отступы в всплывающем окне
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		//Фон слоя затемнения
		$('body').append('<div id="fade"></div>'); //Добавляем слой затемнения.
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Постепенное исчезание слоя - .css({'filter' : 'alpha(opacity=80)'}) используется для фиксации в IE, фильтр для устранения бага тупого IE 
		
		return false;
	});
	//Закрыть всплывающее окно и слой затемнения
	$('a.close, #fade').live('click', function() { //При нажатии рядом, окно и слой затемнения закрываются 
	  	$('#fade , .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();  
	});	
		return false;
	});	
});