<?php
header("Content-Type: text/html; charset=UTF-8");

// 빈 필드가 있는지 확인하는 구문
if(empty($_POST['email'])||empty($_POST['name'])||empty($_POST['message']))
   {
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> <script>
         window.alert('제목 혹은 본문을 작성해 주세요. ');
         history.go(-1);
         </script>";
	return false;
   }
// Cross-Site Scripting (XSS)을 방지하는 시큐어코딩
// strip_tags() -> 문자열에서 html과 php태그를 제거한다
// htmlspecialchars() -> 특수 문자를 HTML 엔터티로 변환
// 악의적인 특수문자 삽입에 대비하기 위함

$email = strip_tags(htmlspecialchars($_POST['email']));
$name = strip_tags(htmlspecialchars($_POST['name']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// 이메일을 생성하고 메일을 전송하는 부분 아래 발신자 수신자 부분을 기입해 주세요
$to = 'pgh4600@hanmail.net'; // 받는 측의 이메일 주소를 기입하는 부분
$from = 'sender';
$email_subject = " $name"; // 메일 제목에 해당하는 부분
$email_body = "컨설팅 문의 이메일이 도착 했습니다.\n\n"."세부내용은 다음과 같습니다.\n\n이메일: $email\n\n제목: $name\n\n내용:\n$message";
$headers = "From : $from"; // 답장 주소

mail($to,'=?UTF-8?B?'.base64_encode($email_subject).'?=',$email_body, $headers);

 if (!$name)
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> <script>
         window.alert('메일 발송이 실패하였습니다. ');
         history.go(-1);
         </script>";
  else
    echo "         <script>
         window.alert('메일이 정상적으로 발송되었습니다.');
         history.go(-1);
         </script>";

?>
