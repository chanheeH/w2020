<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?	?> <!-- php프로그램의 시작과 끝 -->
	<? echo "안녕하세요" ?> <!-- 문장이나변수 화면출력 -->
	<? $name ="한찬희"; ?> <!-- 변수지정 -->
	<? echo $name; ?> <!-- name변수의 데이터를 화면에 출력 -->
	<?
	$na = $_GET["name"];
	$mail = $_GET["mail"];
	?>

	<p>
		이름: <? echo $na;?>
		이메일 : <? echo $mail; ?>			
	</p>
</body>
</html>