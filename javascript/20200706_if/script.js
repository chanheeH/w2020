var id,password;
id = prompt("아이디입력") //창을 제어하여 정보를 전송

//        if(조건문){
// 	           실행문
//        }
if(id == "admin"){
	alert("관리자입니다.");
	password = prompt("비밀번호입력")
	if(password == "1234"){
		//location.href = "http://www.naver.com";
		location.href = "login.html";
	}else{
		//location.href = "http://www.daum.net";
		location.href = "error.html";
	}

}else{
	alert("나가주세요");
	location.href = "error.html";
}