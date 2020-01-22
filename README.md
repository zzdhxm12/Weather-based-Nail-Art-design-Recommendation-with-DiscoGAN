# Weather-based-Nail-Art-design-Recommendation-with-DiscoGAN

네일 아트가 대표적인 패션 아이템으로 성장하므로써 네일 아트 샵을 통한 작업 뿐만 아니라 사용자들이 직접 꾸미는 셀프 네일아트에 대한 관심도 증가하는 추세이다. 날씨, 사용자 패턴에 따라 어울리는 네일 디자인의 수요가 많은 반면 그를 충족해줄 적합한 서비스가 없어 기존에 만들어진 패턴을 검색하여 따라 그리는 경우가 많다. 이에 기상 정보와 사용자의 수요를 만족시킬 네일아트 디자인을 효과적으로 추천하기 위한 서비스 개발을 진행하였다.

## Usecase

### Front-End

![image](https://user-images.githubusercontent.com/53864655/72873105-50b63900-3d32-11ea-9e87-fd0870242815.png)

* 웹 인터페이스를 통해 사용자의 패션 아이템 (신발, 가방 등) 관련 사진 입력
* 기상청 데이터베이스로부터 사용자의 현재 위치에 대한 기상 정보 획득
* 사용자의 입력 이미지와 기상 정보를 바탕으로 네일아트 디자인 자동 생성

<br>

### Back-End

![image](https://user-images.githubusercontent.com/53864655/72873165-72afbb80-3d32-11ea-86fa-f8b9b807ca82.png)

* 자동 생성된 이미지를 사용자에게 추천 디자인으로 제공
* 사용자의 입력 이미지를 학습 데이터로 사용하여 주기적으로 데이터베이스 업데이트

<br>

## Architecture

![image](https://user-images.githubusercontent.com/53864655/72874779-1ea6d600-3d36-11ea-9550-63c53106b976.png)

<br>

## GAN(Generative Adversarial Networks) 

2014년에 이안 굿펠로우에 의해 발표되었으며 비지도 학습에 사용되는 인공지능 알고리즘으로, 제로섬 게임 틀 안에서 서로 경쟁하는 두 개의 신경 네트워크 시스템에 의해 구현된다. 즉, 서로 경재하며 가짜 이미지를 진짜 이미지와 최대한 비슷하게 만들어내는 네트워크이다. 

![image](https://user-images.githubusercontent.com/53864655/72875148-04212c80-3d37-11ea-92af-7de09e4c2df6.png)

## Result

[![Video Label](http://img.youtube.com/vi/uLR1RNqJ1Mw/0.jpg)](https://youtu.be/U-fNqgBuCK8)

해당 서비스는 제한적인 네일아트 디자인 집합만 사용자에게 제공하는 것이 아니라 딥러닝 기법으로 training data set을 스스로 학습하여 fake image를 만들어내는 기술인 GAN을 이용해 생성된 수많은 디자인들을 제공함으로써 네일아트 디자인 추천에 대한 다양성 증대시켰다.



