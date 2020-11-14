<?php

//Задание №1
// function multiply($a, $b) {
//     return $a * $b;
// }





// Задание №2
// $name = 'Артём';
// $age = 23;
// $arr_skill = [ 'HTML5', 'CSS', 'JavaScript', 'PHP', 'mySQL'];

// echo "$name<br>$age<br>";

// foreach($arr_skill as $element ){
//     echo "$element<br>";
// }






//Задание №3
// $age = 34;

// if($age < 18){
//     echo 'ты способный парень, но тебе стоит немного
//     подучиться';
// }else if($age >=18 && $age <= 55){
//     echo 'тебе ещё работать и работать';
//     }else{
//         echo "ну что ж, ты заслужил почётный отдых";
// }






//Задание №4
// for( $i = 1; $i <= 50; $i++){
//     echo "$i<br>";
// }






//Задание №5
// $arr_nav = ['HOME'=>'../site/home','CONTACTS'=>'../site/contacts','ABOUT' => '../site/about','PARNTERS' => '../site/partners'];

// foreach($arr_nav as $key => $value) {
//     echo "<a href='$value'>$key</a> ||";
// }






//Задание №6   !!!!!!! ДЛЯ СРАБАТЫВАНИЯ РАСКОММЕНТИРОВАТЬ ЗАДАНИЕ №2 !!!!!!
// $skill = implode( ', ', $arr_skill);
// $text = "Имя - $age; Возраст - $age; Навыки: $skill";

// $fp = fopen("file.txt", "w");
 
// fwrite($fp, $text);
 
// fclose($fp);






//Задание №7
// $arr = array('one', 'two', 'three');

// function search($par_arr, $par_value){

//     $result;

//     foreach($par_arr as $value){

//         if($value === $par_value){
//             $result = "Массив содержит $par_value";
//             break;
//         }else{
//             $result = "$par_value не
//             найдено в массиве";
//         }
//     }
//     echo $result;
// }






//Задание №8
// $arr_number = [];

// for($i=0; $i<10; $i++) {
//     $arr_number[$i] = rand(0,100);
// }

// $el_max = max($arr_number);
// $el_min = min($arr_number);

// $buf = array_search( $el_min, $arr_number);
// $arr_number[$buf] = $el_max;
// $arr_number[array_search( $el_max, $arr_number)] = $el_min;






//Задание №9
// Думаю, что первый по популярности WordPress, скорее всего, это так и есть. Приходилось с ним сталкиваться в образовательном процессе.
// Далее 1С-Битрикс,Tilda, Wix.






//Задание №10
// Да, у меня есть опыт работы с JavaScript. Писал на чистом js, с jquery почти не соприкосался,
// но соприкосался с библиотекой React, в данный момент работаю удаленно на фреймворке Vue.js(но это мне не очень подходит, 
// как начинающему программисту, хочется работать в офисе, чтобы совершенствоваться), знаком с node.JS.

// В паре слов о всём этом своими словами. node.JS - это JS вынесенный за пределы браузера, что позволяет развернуть сервер и работать с файловой системой.
// Vue.js - фреймворк, который взаимодействует с DOM, позволяет сделать приложение реактивным, использовать компоненты множество раз, плюс к этому можно прибавить библиотеку VUEX
// и разработка больших приложений станет более удобной, так как станет возможным легко работать с состояниями, также это повышает разборчивость кода и оберегает от ошибок кодера. 






//Задание №11
// Да. Это разбивка архитектуры приложения на три части: контроллер, модель, представление. Это позволяет повторно использовать код, облегчает разработку и доработку приложения.






//Задание №12
// Нет, в php мне не приходилось сталкиваться с ООП, но все понятия мне известны, так как в js  мне приходилось сталкиваться с ООП. 
// К сожалению не плотно и часто, но всё же понимание, что это такое и для чего нужно есть.





//Задание №13
// К сожалению такого опыта нет. С php  работал в процессе обучения программированию и писал на чистом PHP пару небольших самостоятельных проектов (сайты для приютов бездомных животных);






//Задание №14
//Но почему бы не попробовать?(Кроме тестирования, с этим я ещё не знаком)

// class User {
//     protected $name_class;
//     protected $password_class;
//     protected $age_class;
//     protected $address_class;
//     protected $email_class;
//     protected $phone_class;

//     function __construct( $name, $password, $age, $address, $email, $phone) {
//         $this->name_class = $name;
//         $this->password_class = $password;
//         $this->age_class  = $age;
//         $this->address_class = $address;
//         $this->email_class = $email;
//         $this->phone_class = $phone;
//     }
    
//     protected function checkName(){
//         if(trim($this->name_class) !=''  && strlen($this->name_class) > 8 ){
//             return true;
//         }else{
//             return false;
//         } 
//     }

//     protected function checkPassword(){
//         if(trim($this->name_class) !=''  && strlen($this->name_class) > 8){
//             return true;
//         }else{
//             return false;
//         } 
//     }

//     protected function checkAge(){
//         if(trim($this->age_class) !=''  && is_numeric($this->age_class) && $this->age_class > 14 && $this->name_class < 150){
//             return true;
//         }else{
//             return false;
//         } 
//     }

//     protected function checkAddress(){
//         if(trim($this->address_class) !=''  && strlen($this->address_class) > 12){
//             return true;
//         }else{
//             return false;
//         } 
//     }

//     protected function checkEmail(){
//         if(filter_var( $this->email_class, FILTER_VALIDATE_EMAIL) && !file_exists("$this->email_class.txt")){
//             return true;
//         }else{
//             return false;
//         } 
//     }

//     protected function checkEmailforAuth(){
//         if(filter_var( $this->email_class, FILTER_VALIDATE_EMAIL) && file_exists("$this->email_class.txt")){
//             return true;
//         }else{
//             return false;
//         } 
//     }
    
//     protected function checkPhone(){
//         $reg = "#^\+[0-9]{1,2}\s?\([0-9]{3}\)\s?[0-9]+\-[0-9]+\-[0-9]+$#";
//         if(preg_match($reg, $this->phone_class)){
//             return true;
//         }else{
//             return false;
//         } 
//     }

//     public function createUser(){
//         if($this->checkName() && $this->checkPassword() && $this->checkAge() && $this->checkAddress() && $this->checkEmail() && $this->checkPhone()){

//         $salt = 'fs-214=fsefs32@';
//         $pass_hash = md5($this->password_class.$salt);
//         $user_data = array('name'=>$this->name_class,'password'=>$pass_hash,'age' => $this->age_class,'address' => $this->address_class,'email' => $this->email_class,'phone' => $this->phone_class);

//         $user_data = json_encode($user_data);

//         var_dump($user_data);

//         $fp = fopen("$this->email_class.txt", "w");

//         fwrite($fp, $user_data);
 
//         fclose($fp);
//         }else{
//             echo "Err";
//         }
//     }

//     public function authUser(){
//         if($this->checkEmailforAuth() && $this->checkPassword()){

//             $user_data = file_get_contents("$this->email_class.txt");

//             $user_data = json_decode($user_data, true);

//             $salt = 'fs-214=fsefs32@';
//             $authPassword = md5($this->password_class.$salt); 

//             if($authPassword === $user_data['password']){
//                 echo 'Успешная авторизация';
//             }else{
//                 echo "Err";
//             }

//         }else{
//             echo "Err";
//         }

//     }

// }

// class Admin extends User{
//     private $admin_rights_class;

//     function __construct( $name, $password, $age, $address, $email, $phone, $right) {
//         parent::__construct( $name, $password, $age, $address, $email, $phone);
//         $this->admin_rights_class = $right;
        
//     }

//     public function createAdmin(){
//         if($this->checkName() && $this->checkPassword() && $this->checkAge() && $this->checkAddress() && $this->checkEmail() && $this->checkPhone()){

//         $salt = 'fs-214=fsefs32@';
//         $pass_hash = md5($this->password_class.$salt);
//         $admin_data = array('name'=>$this->name_class,'password'=>$pass_hash,'age' => $this->age_class,'address' => $this->address_class,'email' => $this->email_class,'phone' => $this->phone_class,'right' => $this->admin_rights_class);

//         $admin_data = json_encode($admin_data);

//         var_dump($admin_data);

//         $fp = fopen("$this->email_class.txt", "w");

//         fwrite($fp, $admin_data);
 
//         fclose($fp);
//         }else{
//             echo "Err";
//         }
//     }

//     public function authAdmin(){
//         if($this->checkEmailforAuth() && $this->checkPassword()){

//             $user_data = file_get_contents("$this->email_class.txt");

//             $user_data = json_decode($user_data, true);

//             $salt = 'fs-214=fsefs32@';
//             $authPassword = md5($this->password_class.$salt); 

//             if($authPassword === $user_data['password'] && $this->admin_rights_class){
//                 echo 'Успешная авторизация, супер администратор';
//             }else{
//                 echo "Err: отсутствуют права";
//             }

//         }else{
//             echo "Err";
//         }

//     }
// }

// $user_one = new User('Макурин Артём Юрьевич','fdkfvdfkddd',23,'Город N, ул.Неизвестная','ya.xacki@mail.ru','+7(993)333-44-55');
// $user_two = new User('Иванов Иван Петрович','HONDAcbr600',34,'Город N, ул.Неизвестная','biker.speed@yandex.ru','+7(993)333-44-55');

//Данный объект будет являться администратором, но без прав-супер, так как задан статус false
// $admin = new Admin('Градцкий Иван Андреевич','myDOG_HUSUN',20,'Город N, ул.Неизвестная','lol.xacki@yandex.ru','+7(993)333-44-55',false);

?>