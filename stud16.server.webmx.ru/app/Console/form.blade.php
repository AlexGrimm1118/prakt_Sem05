<!-- 
	используем одну форму и для добавления и для обновления записи
-->
<form class="console" action="/admin/modification" method="post" enctype="multipart/form-data">
	
	<input type="text" placeholder="Название" name="title" value="{{ isset($data->title)? $data->title : '' }}"><p>	
	<textarea name="content">{{ isset($data->content)? $data->content : '' }}</textarea><p>
	<input type="text" placeholder="Имя" name="name" value="{{ isset($data->name)? $data->name : '' }}"><p>
	<input type="text" placeholder="Дата" name="" value="{{ isset($data->date)? $data->date : '' }}" readonly><p>
	<input type="text" placeholder="Ссылка" name="guid" value="{{ isset($data->guid)? $data->guid : '' }}" readonly><p>	
	<input type="text" placeholder="Изображение" name="path" value="{{ isset($data->img)? $data->img : '' }}" readonly><p>	
	<input type="file" name="image" /><p>
	<!-- 
	в скрытых полях храним некоторую служебную информацию, скрытую от глаз пользователя
		1) parent - если добавляем новую запись, нужен идентификатор родительской записи
		2) id - если обновляем запись, нужен первичный ключ обновляемой записи
	-->
	<input type="hidden" name="parent" value="{{ isset($parent)? $parent : '' }}"><p>
	<input type="hidden" name="id" value="{{ isset($data->id)? $data->id : '' }}"><p>	
	<!--...-->

	<input type="submit" value="{{ isset($data)? 'Изменить' : 'Добавить' }}"><p>	
	@csrf
	
</form>