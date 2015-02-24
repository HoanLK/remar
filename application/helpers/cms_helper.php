<?php
function btn_edit($uri){
	return anchor($uri, '<i class="glyphicon glyphicon-edit"></i>');
}
function btn_delete($uri){
	return anchor($uri, '<i class="glyphicon glyphicon-remove-circle"></i>', array('onclick' => "return confirm('Bạn có muốn xóa bản ghi này?')" ));
}