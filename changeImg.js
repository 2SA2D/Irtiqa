

    var picPaths = ['back2.png','back7.png','back8.png'];
    var imageIndex = 0;
    var bannerImage; 
    bannerImage = document.getElementById('imgBanner');
    function displayNextImage() {
      bannerImage.src = picPaths[imageIndex];
      if(imageIndex === (picPaths.length-1)) {
        imageIndex = 0;
      }
      else {
        imageIndex = imageIndex + 1;   
      }
    }
        setInterval(displayNextImage, 3000);
        