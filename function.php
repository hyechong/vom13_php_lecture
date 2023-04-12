<?php

  // php 함수는 자바스크립트와 같이 정의부와 호출부로 구성된다. 

  function sayHello(){
    echo '토토 바보~~'.'<br>';
  };

  // 호출부
  sayHello();

 
  // function sumNum(){
  //   $sum = 0;

  //   for($i= 1; $i < 100; $i++){
  //     $sum+=i;
  //   }
  //   return $sum;
  // };

  //  echo sumNum();

  // for문 사용
  $sum = 0;
  function sumAll($n){
    for($i = 1; $i <= $n; $i++){
      $sum += $i;
    }
    return $sum;
  }

  echo sumAll(1000).'<br>';

  // while문 사용
  function sumAllWhile($n){
    $num = 1; // 초기값
    $sum = 0; 
    while($num <= $n){ // 증가 조건 : 실제 사이트 제작시 응답받은 데이터 유무를 조건으로 받는다. 
      $sum += $num;
      $num++; // 증가연산
    }
    return $sum;
  }

  echo sumAllWhile(50);

?>