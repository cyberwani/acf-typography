<?php
if( $_GET["font"] ){
	echo "
	<style class='preview_style'>
		@import url(http://fonts.googleapis.com/css?family=" . str_replace(' ', '+', $_GET["font"]) . ":" . $_GET["wi"] . ");
	</style>";
}

echo '<div style="'. $_GET["css"] . '">Reyhoun is Awesome :) <br /> 1 2 3 4 5 6 7 8 9 0 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z</div>';
?>