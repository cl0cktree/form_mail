<!DOCTYPE html>
<html lang="ko">
  <head>
    <!-- charset 설정 -->
    <meta charset="UTF-8">
    <!-- ie 호환성보기 무시 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 모바일을 위한 viewport설정 -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <title>문의메일</title>
    <link rel="stylesheet" type="text/css" href="./email.css">
  </head>
 
  <body>
    <script>
      document.addEventListener("DOMContentLoaded", function(){
        document.getElementById('email').value='';
        document.getElementById('name').value='';
        document.getElementById('message').value='';
      });
    </script>
    <form action="contact.php" method="post">
      <div class="contact_form" id="contact_form">
        <h3>컨설팅 문의</h3>
        <table>
		      <tr>
            <th>이메일</th>
            <td>
              <input type="text" id="email" name="email" size="32" />
            </td>
          </tr>
          <tr>
            <th>제목</th>
            <td>
              <input type="text" id="name" name="name" size="32" />
            </td>
          </tr>
          <tr>
            <th>내용</th>
            <td>
              <textarea id="message" name="message" rows="5" cols="26"></textarea>
              <input type="hidden" id="h_mail"/>
            </td>
          </tr>
          <tr>
            <td colspan="2" class="ps_1">(답변이 필요 하신 분은 꼭 연락처를 남겨주세요.)</td>
          </tr>
          <tr>
             <td colspan="2" style="padding-top:20px;">
              <button id="path_button" value="문의하기">
                문의하기
              </button>
              <button id="h_button" name="submit" value="문의하기">
                문의하기
              </button>
            </td>
          </tr>
        </table>
      </div>
    </form>
  </body>
 
</html>