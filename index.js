
   function initText() {
      var today = new Date();
      var numberOfDay = today.getDay();
      var day = today.getDate();
      var month = today.getMonth();
      var year = today.getFullYear();
      var hour = today.getHours();
      var minute = today.getMinutes();
      var second = today.getSeconds();
      if (numberOfDay == 0){this.nameOfDay="Sunday"};
      if (numberOfDay == 1){this.nameOfDay="Monday"};
      if (numberOfDay == 2){this.nameOfDay="Tuesday"};
      if (numberOfDay == 3){this.nameOfDay="Wednesday"};
      if (numberOfDay == 4){this.nameOfDay="Thursday"};
      if (numberOfDay == 5){this.nameOfDay="Friday"};
      if (numberOfDay == 6){this.nameOfDay="Saturday"};
      var current_date = ("Today is "+this.nameOfDay+" "+ day+"/"+(month+1)+"/"+year);
      var current_time = (" "+"and the time is "+hour+":"+minute+":"+second);
      document.getElementById('theText').innerHTML = "Welcome to Irtiqa Tech Guide and Online Assistance website!"+current_date+current_time;}
      
      function displayImg(){
         var imgs = ['back2.png','back7.png','back8.png'];
         var indexOfImgs = 0;
         var image; 
         function changeImgs() {
         image.src = imgs[indexOfImgs];
         if(indexOfImgs === (imgs.length-1)) {
            indexOfImgs = 0;
         }
         else {
            indexOfImgs = indexOfImgs + 1;   
         }
         }
         function intervalOfchangeImgs() {
         setInterval(changeImgs, 3000);
         }
         image = document.getElementById('changeImg');
         intervalOfchangeImgs();
      }

      function start(){
         displayImg();
         initText();

      }