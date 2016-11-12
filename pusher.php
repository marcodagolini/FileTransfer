<html><head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
  <link rel="stylesheet" href="https://bootswatch.com/spacelab/bootstrap.css" media="screen">
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('5ff847cec4669fc93011', {
      encrypted: true
    });
    


    var channel = pusher.subscribe('test_channel');
    channel.bind('my_event', function(data) {
     // alert(data.message);
     //get title
     var mydiv = document.getElementById('test');
     mydiv.innerHTML="Check your  ";

     //make <a> tag
     var aTag = document.createElement('a');
     aTag.setAttribute('href',data.message);
     aTag.setAttribute('target','_blank');
     aTag.innerHTML = "File";
     //add aTag to H1
     mydiv.appendChild(aTag);
     
    });
  </script>
</head>
<body><br>
          <div class="col-lg-6">
            <div class="well bs-component">
                <legend id="test">File Received: <a href="http://s3.amazonaws.com/lnglpdemo/Screen%20Shot%202016-11-11%20at%2010.17.07%20AM.png" target="_blank">Open File</a></legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"></label>
                    <div class="col-lg-10" id="fdiv">

                    </div>                 
                  </div>
            </div>
          </div>

</body></html>
