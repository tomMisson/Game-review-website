  <footer class="footer page-footer font-small grey">
    <div id="chatspace">
          <input type="text" placeholder="Type your message" id="message">
          <button type="submit" class ="btn btn-info" id="submit">Send</button> 
        <div id="textspace"></div> <!-- area where messages are added into-->
    </div>
    <div>
      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/94/Manchester_Metropolitan_University_logo.svg/220px-Manchester_Metropolitan_University_logo.svg.png">
    </div>
    <button disabled id="chatButton" class="open-button btn btn-success">Chat</button>
  </footer>

  <!-- imports the Vue and chat scripts-->
  <script src=<?php echo base_url('application/scripts/chat.js'); ?>></script>
  <script src=<?php echo base_url('application/scripts/CustomVue.js'); ?>></script>

</body>
</html>