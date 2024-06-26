<link rel="stylesheet" href="bot.css">
<?php  include('header.php')?>	

<body>
<center>
<div id="bot">
  <div id="container">
    <div id="header">
        Chat assistance
    </div>

    <div id="body">
      <!-- This section will be dynamically inserted from JavaScript -->
        <div class="userSection">
          <div class="messages user-message">

          </div>
          <div class="seperator"></div>
        </div>
        <div class="botSection">
          <div class="messages bot-reply">

          </div>
          <div class="seperator"></div>
        </div>        
    </div>

    <div id="inputArea">
      <input type="text" name="messages" id="userInput" placeholder="Please enter your message here" required>
      <input type="submit" id="send" value="Send">
    </div>
  </div>
  </div>
</center>
</body>

  <script type="text/javascript">
      
      document.querySelector("#send").addEventListener("click", async () => {
        let xhr = new XMLHttpRequest();
        var userMessage = document.querySelector("#userInput").value

        let userHtml = '<div class="userSection">'+'<div class="messages user-message">'+userMessage+'</div>'+
        '<div class="seperator"></div>'+'</div>'

        document.querySelector('#body').innerHTML+= userHtml;

        xhr.open("POST", "query.php");
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(`messageValue=${userMessage}`);

        xhr.onload = function () {
            let botHtml = '<div class="botSection">'+'<div class="messages bot-reply">'+this.responseText+'</div>'+
            '<div class="seperator"></div>'+'</div>'
            
            document.querySelector('#body').innerHTML+= botHtml;
        }

      })
      
  </script>

      <?php  include('footer.php')?>